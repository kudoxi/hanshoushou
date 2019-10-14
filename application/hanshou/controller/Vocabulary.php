<?php
namespace app\hanshou\controller;

use app\hanshou\controller\Base;
use Think\Db;
use think\Session;
class Vocabulary extends Base
{
	public function _initialize()
    {
    	parent::_initialize();	
    }
    public function vocabulary(){
    	$lid = input('lid');
    	//默认是冰岛语
    	$moren_lid['id'] = 0;
    	$moren_lid['name'] = "冰岛语";
    	$moren_lid = Db::name("language")->where("is_shenpi",1)->order("id asc")->find();
    	$lid = $lid ? $lid : $moren_lid['id'];
    	$moren_lid2 = Db::name("language")->where("id = $lid and is_shenpi = 1")->find();
    	$moren = !empty($moren_lid2) ? $moren_lid2['name'] : $moren_lid['name'];
    	$where = array();
    	$list = array();
    	if($lid){
    		$list = model("vocabulary")->where("language",$lid)->order("zan DESC,id DESC")->paginate(20);
    		//计算点赞量
    		foreach($list as $k => $v){
    			$id = $v['id'];
    			$res = $this->count_zan_percent("vocabulary",$id);
    			$list[$k]['ok'] = $res['ok'];
    			$list[$k]['percent'] = $res['percent'];
    			$lname = Db::name("language")->where("id = ".$v['language'])->find();
    			if(in_array($lname['name'],$this->file_type)){
    				$list[$k]['is_file'] = 1;
    			}else{
    				$list[$k]['is_file'] = 0;
    			}
    		}
    	}
    	$this->view->assign("language",$moren);
    	$this->view->assign("list",$list);
    	return $this->view->fetch();
    }
}
?>