<?php
namespace app\hanshou\controller;
use app\hanshou\controller\Base;
use think\Session;
class Video extends Base
{
	public function _initialize()
    {
    	parent::_initialize();
    	
    }
    public function index(){
    	$n = $this->request->get('n');
    	if(!$n){
            $n = 1;
        }
    	$this->view->assign("n",$n);
    	return $this->view->fetch();
    }
    
}
?>