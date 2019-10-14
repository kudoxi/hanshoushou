<?php
namespace app\hanshou\controller;

use app\common\controller\Frontend;
use Think\Db;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Think\Request;
use think\Session;
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/SMTP.php';
class Base extends Frontend
{
	protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize();
        $this->special_name = \think\Config::get("SPECIAL_NAME");
        $ahan_username = Session::get("ahan_username");
        $controller = request()->controller();
        if($ahan_username != ""){
        	//判断登陆
        	if(in_array($ahan_username,$this->special_name)){
        		if($controller == "Letter"){
        			$this->is_login = 3;//除了信件页面（is_login = 3）不显示消息外，消息数量都显示为1
        		}else{
        			$this->is_login = 2;
        		}
        	}else{
        		$this->is_login = 1;
        	}
        	//获取语言分类
        	$languagelist = model('Language')->where("is_shenpi",1)->select();
        	//所有语言分类
        	$alllanguagelist = model('Language')->select();
			//上传类型
			$study_type = \think\Config::get("STUDY_TYPE");
			
        	$this->ahan_username = $ahan_username;
        	//文件类型
        	$this->file_type = \think\Config::get("file_type");
        	
        	$this->view->assign("is_login", $this->is_login);
        	$this->view->assign("study_typelist", $study_type);
        	$this->view->assign("languagelist", $languagelist);
        	$this->view->assign("ahan_username", $ahan_username);
        	$this->view->assign("alllanguagelist", $alllanguagelist);
        }else{
        	$this->error("请告诉我你的名字",url("hanshou/index/index"));
        }
    }
    public function zan_or_cai(){
    	if($this->request->isPost()){
    		$type = $this->request->post("type");
    		$is_zan = $this->request->post("is_zan");
    		$id = $this->request->post("id");
    		$option = $this->request->post("option");
    		$zan = Db::name($type)->where("id",$id)->find();
    		if($option == "+"){
    			$new_zan = $zan[$is_zan] + 1;
    		}else{
    			$new_zan = $zan[$is_zan] - 1;
    			if($new_zan < 0){
    				$new_zan = 0;
    			}
    		}
    		
    		$success = Db::name($type)->where("id",$id)->update(array($is_zan=>$new_zan));
    		//计算
    		$res = $this->count_zan_percent($type,$id);
    		return array("0"=>"101","zan"=>$res['zan'],"percent"=>$res['percent'],"ok"=>$res['ok']);
    	}
    }
    //计算赞的百分比
    public function count_zan_percent($type,$id){
    	$obj = Db::name($type)->where("id",$id)->find();
    	$zan = $obj['zan'];
    	$cai = $obj['cai'];
    	$total = $zan + $cai;
    	$list = array();
    	$list['zan'] = $zan;
    	$list['cai'] = $cai;
		if($zan > $cai){
			$list['ok'] = "bg-red";
		}else{
			$list['ok'] = "bg-aqua";
		}
		if($total != 0){
			$jisuan = $zan / $total * 100;
		}else{
			$jisuan = 0;
		}
		$list['percent'] = $jisuan."%";
		return $list;
    }
    //创建语言
    public function add_language(){
    	if($this->request->isPost()){
    		$name = $this->request->post("name");
    		$time = time();
    		$ip = request()->ip();
    		$upter = $this->ahan_username;
    		$is_shenpi = 0;
    		$data = array(
    			"name"=>$name,
    			"c_time"=>$time,
    			"ip"=>$ip,
    			"upter"=>$upter,
    			"is_shenpi"=>$is_shenpi
    		);
    		$success = Db::name("language")->insert($data);
    		if($success){
    			send_email($upter."添加了新的语言类型",$upter."添加了新的语言类型".$name,"1140514109@qq.com");
    			return array("0"=>"101","1"=>"ok,谢谢你~已经提交给管理员审批了,管理员在摸鱼的话，半小时内就可以在菜单看到了，忙的话最晚1天。不过不影响你现在就给这个语言类型添加录音~");
    		}else{
    			return array("1"=>"102","1"=>"服务器有点问题，稍后试试？");
    		}
    		exit();
    	}
    	return $this->view->fetch();
    }
    //上传录音
    public function upload(){
    	if($this->request->isPost()){
    		$filename = $this->request->post("filename");
    		$language = $this->request->post("language");
    		$table = $this->request->post("table");
    		$name = $this->request->post("name");
    		$remark = $this->request->post("remark");
    		$uper = $this->ahan_username;
    		$ctime = date("Y-m-d H:i:s");
    		$url_arr = explode(",",$filename);
    		$url_arr = array_filter($url_arr);
    		if(!empty($url_arr)){
    			foreach($url_arr as $k=>$v){
    				$data = array(
		    			"name"=>$name,
		    			"language"=>$language,
		    			"url"=>$v,
		    			"uper"=>$uper,
		    			"remark"=>$remark ? $remark : "",
		    			"ctime"=>$ctime
		    		);
		    		$success = Db::name($table)->insert($data);
    			}
    			if($success){
    				//判断语言是否通过审批
    				$res = Db::name("language")->where("id = $language")->find();
    				if($res['is_shenpi'] == 1){
    					$lid = $language;
    				}else{
    					$lid = "";
    				}
    				if($table == "record"){
						$url = url("hanshou/record/record",array("lid"=>$lid));
					}elseif($table == "vocabulary"){
						$url = url("hanshou/vocabulary/vocabulary",array("lid"=>$lid));
					}
    				return array("0"=>"101","1"=>"添加成功","2"=>$url);
    			}else{
    				return array("0"=>"102","1"=>"添加失败");
    			}
    		}else{
    			return array("0"=>"102","1"=>"你还没上传文件诶");
    		}
    		exit();
    	}
    	return $this->view->fetch();
    }
    public function do_upload(){
    	$file = request()->file('files');
    	if (empty($file)) { 
	    	$this->error('请选择上传文件'); 
	    }
	    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'); 
	    if ($info) { 
	    	//返回文件路径
	    	$filename = \think\Config::get("LOCAHOST2").DS."hanshou".DS."public".DS. 'uploads'.DS.$info->getSaveName();
	      	return $filename;
	    } else { 
	      	//上传失败获取错误信息 
	    	$this->error($file->getError()); 
	    } 
    }
}
?>