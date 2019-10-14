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
class Test extends Frontend
{
	protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function _initialize()
    {
        header("Access-Control-Allow-Origin: *");
        parent::_initialize();
    }

    public function jieguo()
    {
    	
        return $this->view->fetch();
    }
    

    public function problems(){
        $res = array(
            'total'=>5,
            'problem_id'=>2,
            'title'=>'这是一个盛满气味的漂亮盒子，你觉得打开它后你会闻到？',
            'choices'=>array(
                '21'=>'糖果味',
                '33'=>'茶叶味',
                '34'=>'某个地方的新鲜空气',
            ),
            'picture'=>'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1558812727221&di=0d230e5ac68fd1d11eeecdcb442a725d&imgtype=0&src=http%3A%2F%2Fpic192.gtobal.com%2Fimage1%2F45%2F54%2FwKgSE1HWQg-AfD5MAADetdx36dI136.jpg',
        );
        return json_encode($res);
    }
    public function sub(){
        $nowpage = $_POST["nowpage"];
        $problem_id = $_POST['problem_id'];
        $choice_id = $_POST['choice_id'];
        //存入数据库
        $res = array(
            'code'=>1,
            'msg'=>''
        );
        return json_encode($res);
    }
}
?>