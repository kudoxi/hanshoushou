<?php
namespace app\hanshou\controller;

use app\common\controller\Frontend;
use Think\Db;
use think\Session;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use app\common\model\Mywords;
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/SMTP.php';
class Index extends Frontend
{
	protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize();
        $this->special_name = \think\Config::get("SPECIAL_NAME");
        $this->mywords = new Mywords();
        //Session::set("ahan_username","");
        $ahan_username = Session::get("ahan_username");
        if($ahan_username != ""){
        	if(in_array($ahan_username,$this->special_name)){
        		$this->is_login = 2;
        	}else{
        		$this->is_login = 1;
        	}
        }else{
        	$this->is_login = 0;
        }
        //判断三次机会是否都已经看过了
    	$special_name = $this->special_name;
    	$need_wait = 0;
    	$mw = Db::name("mywords")->select();
    	if(empty($mw)){
    		$need_wait = 1;
    	}
    	foreach($special_name as $k=>$v){
    		$is_read = Db::name("mywords")->where("name = '$v' and is_read != 1")->find();
    		if(!empty($is_read)){
    			$need_wait = 1;
    		}
    	}
    	$this->need_wait = $need_wait;
    	$this->view->assign("need_wait", $need_wait);
		$this->view->assign("is_login", $this->is_login);


        $this->appid ='wx53304857b300c82a';
        $this->appsecret='7202904ac5bad3e0fe597b5b3c309733';
    }

    public function index()
    {
    	
        return $this->view->fetch();
    }
    public function chatbox(){
    	return $this->view->fetch();
    }
    //登陆判断
    public function checkname(){
    			
    	if($this->request->isPost()){
    		$name = $this->request->post("name");
    		Session::set("ahan_username",$name);
    		
    		//是阿韩
    		if(in_array($name,$this->special_name)){
    			//判断是否已经看过
    			$mywords = Db::name("mywords")->where("name",$name)->find();
    			//取随机数
    			$bye = \think\Config::get("BYE");
    			$arr = range(1,count($bye));
    			shuffle($arr);
    			$rang_num = $arr[0];
    			//看过且已经拒绝
    			if($mywords['is_read'] == 1){
    				return array("0"=>"101","1"=>$bye[$rang_num]);
    			}elseif($mywords['is_read'] == 2){
    				//看过且已经保存
    				return array("0"=>"102","1"=>"东西放在你信箱了哦");
    			}else{
    				//第一次看
    				if(!$mywords){
    					$data = array("is_read"=>0,"name"=>$name,"ctime"=>date('Y-m-d H:i:s'));
	    				$success = Db::name("mywords")->insert($data);
    				}else{
    					$success = 1;
    				}
	    			if($success){
	    				send_email($name."找到信了",$name."找到信了","1140514109@qq.com");
	    				return array("0"=>"100","1"=>"找到你了");
	    			}else{
	    				return array("0"=>"104","1"=>"你是不是网不好啊");
	    			}
    			}
    		}else{
    			if($this->need_wait == 0){
	    			return array("0"=>"103","1"=>"好，进去吧");
	    		}
    			//是路人甲
    			return array("0"=>"103","1"=>"不是...进去学习吧，我再等等");
    		}
    	}
    }
    //设置看或不看的session
    public function lookornot(){
    	if($this->request->isPost()){
    		$look = $this->request->post("look");
    		Session::set("LOOK",$look);
    	}else{
    		$ahan_username = Session::get("ahan_username");
    		if($ahan_username != ""){
    			$s_look = Session::get("LOOK");
    			$look = $s_look != "" ? $s_look : 0;
    			return array("0"=>"101","1"=>$look);
    		}else{
    			return array("0"=>"102","1"=>"你还没回答我呢...");
    		}
    	}
    }
    //退出登录
    public function login_out(){
    	Session::set("ahan_username","");
    	$this->success("再见",url("hanshou/index/index"));
    }




/////////////////////////////////// 获取accesstion //////////////////////
    public function test(){
        header("Access-Control-Allow-Origin: *");
        $url = $this->request->get('url');
        $res = $this->getSignPackage($url); 
        return json_encode($res);
    }


    public function getToken(){

        //
        //$file = file_get_contents("access_token.json",true);
        //$result = json_decode($file,true);
        //$expires_time = Session::get("expires");
        //var_dump(date("Y-m-d H:i",intval($expires_time)));
        //if (!$expires_time && time() > $expires_time){
            $data = array();
            $data['access_token'] = $this->getNewToken();
            //$data['expires']=time()+7000;
            //Session::set("expires",$data['expires']);
            //$jsonStr =  json_encode($data);
            //$fp = fopen("access_token.json", "w");
            //fwrite($fp, $jsonStr);
            //fclose($fp);

            //Session::set("access_token",$data['access_token']);
            return $data['access_token'];
        //}else{
        //    return Session::get("access_token");
        //}
    }
    public function getNewToken(){
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$this->appid}&secret={$this->appsecret}";
        $access_token_Arr =  $this->https_request($url);
        //$this->write_log(json_encode($access_token_Arr));
        return $access_token_Arr['access_token'];
    }
    public function https_request ($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $out = curl_exec($ch);
            //$this->write_log($out);
            curl_close($ch);
            return  json_decode($out,true);
    }
    public function write_log($content){
        $myfile = fopen("log.txt", "a+") or die("Unable to open file!");
        $txt = date('Y-m-d H:i:s')."^_^".$content."\r\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }

//////////////////////////// 获取api_ticket ///////////////////////
    public function curlHttp($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($curl, CURLOPT_TIMEOUT, 500 );
        curl_setopt($curl, CURLOPT_URL, $url );
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;
    }

    public function getJsApiTicket($accessToken) {
     
        $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=$accessToken&&type=jsapi";
        // 微信返回的信息
        $returnData = json_decode($this->curlHttp($url));
        //var_dump($returnData);
        $resData['ticket'] = $returnData->ticket;
        $resData['expiresIn'] = $returnData ->expires_in;
        $resData['time'] = date("Y-m-d H:i",time());
        $resData['errcode'] = $returnData->errcode;
 
        return $resData;
    }
///////////////////////////////// 创建签名 
    // 获取签名
    public function getSignPackage($url) {
        // 获取token
        $token = $this->getToken();
        //var_dump($token);
        // 获取ticket
        $ticketList = $this->getJsApiTicket($token);
        $ticket = $ticketList['ticket'];
        
        // 该url为调用jssdk接口的url
        //$url = 'https://www.xxx.com/xxx.html';
        // 生成时间戳
        $timestamp = time();
        // 生成随机字符串
        $nonceStr = $this->createNoncestr();
        // 这里参数的顺序要按照 key 值 ASCII 码升序排序 j -> n -> t -> u
        $string = "jsapi_ticket={$ticket}&noncestr={$nonceStr}&timestamp={$timestamp}&url={$url}";
        $signature = sha1($string);
        $signPackage = array (
            "appId" => $this->appid,
            "nonceStr" => $nonceStr,
            "timestamp" => $timestamp,
            "url" => $url,
            "signature" => $signature,
            "rawString" => $string,
            "ticket" => $ticket,
            "token" => $token
        );
 
        // 返回数据给前端
        return json_encode($signPackage);
    }
 
    // 创建随机字符串
    public function createNoncestr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for($i = 0; $i < $length; $i ++) {
            $str .= substr ( $chars, mt_rand ( 0, strlen ( $chars ) - 1 ), 1 );
        }
        return $str;
    }
}
?>