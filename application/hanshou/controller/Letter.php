<?php
namespace app\hanshou\controller;

use app\hanshou\controller\Base;
use Think\Db;
use think\Session;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/SMTP.php';
class Letter extends Base
{
	public function _initialize()
    {
    	parent::_initialize();
    	
    }
    public function letter(){
    	$pass = 0;
    	if(in_array($this->ahan_username,$this->special_name)){
    		$mywords = Db::name("mywords")->where("name",$this->ahan_username)->find();
    		if($mywords['is_read'] != 1){
    			$pass = 1;
    		}
    	}
    	if($pass == 1){
    		return $this->view->fetch();
    	}else{
    		$this->error("这里已是荒芜之地",url("hanshou/vocabulary/vocabulary"));
    	}
    }
    public function check_out(){
    	return $this->view->fetch();
    }
    public function is_read(){
    	if($this->request->isPost()){
    		$is_read = $this->request->post('is_read');
    		$success = Db::name("mywords")->where("name",$this->ahan_username)->update(array("is_read"=>$is_read));
    		if($is_read == 1){
    			$words = "拒绝";
    			$return_words = "那么，再见了";
    		}else{
    			$words = "保留";
    			$return_words = "好呗";
    		}
    		$title = $this->ahan_username.$words."了";
    		send_email($title,$title,"1140514109@qq.com");
    		return array('0'=>'101','1'=>$return_words);
    	}
    }
}
?>