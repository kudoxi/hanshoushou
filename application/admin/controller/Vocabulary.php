<?php
namespace app\admin\controller\study;

use app\common\controller\Backend;
use Think\DB;
/**
 * 字母管理
 *
 * @icon fa fa-user
 */
class Vocabulary extends Backend
{
	protected $noNeedRight = ['searchlist'];
	
	public function _initialize(){
		parent::_initialize();
		$this->model = model('Vocabulary');
        $this->language = model('Language');
        $language = DB::name("language")->select();
		$arr = array();
		foreach($language as $k=>$v){
			$arr[$v['id']] = $v['name'];
		}
		$this->view->assign("lang_list", $arr);
	}
	public function index(){
		if ($this->request->isAjax())
        {
            //如果发送的来源是Selectpage，则转发到Selectpage
            if ($this->request->request('pkey_name'))
            {
                return $this->selectpage();
            }
            list($where, $sort, $order, $offset, $limit) = $this->buildparams();
            $total = $this->model
                    ->where($where)
                    ->order($sort, $order)
                    ->count();
            $list = $this->model
                    ->where($where)
                    ->order($sort, $order)
                    ->limit($offset, $limit)
                    ->select();
            foreach($list as $k=>$v){
            	$list[$k]['remark'] = htmlspecialchars_decode($v['remark']);
            	if($v['language'] != 0){
            		$l = DB::name("language")->where("id = ".$v['language'])->find();
            		$list[$k]['language'] = $l['name'];
            	}
            }
            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
	}
	//搜索下拉列表
	function searchlist(){
		$searchlist = get_language_type();
		$data = ['searchlist' => $searchlist];
        $this->success('', null, $data);
	}
	function add(){
		if ($this->request->isPost())
        {
        	$url = $this->request->post('url');
        	$remark = $this->request->post('remark');
    		$data = array();
    		$data['name'] = $this->request->post('name');
    		$data['language'] = $this->request->post('language');
    		$data['url'] = isset($url) ? \think\Config::get('LOCAHOST2').$url : "";
    		$data['remark'] = isset($remark) ? $remark : "";
    		$id = $this->model->create($data);
    		if($id){
    			$this->success();
    		}else{
    			$this->error();
    		}
    	}
		return parent::add();
	}
	function edit($ids = null){
		$row = $this->model->get(['id' => $ids]);
        if (!$row)
            $this->error(__('No Results were found'));
        if ($this->request->isPost())
        {
        	$url = $this->request->post('url');
        	$remark = $this->request->post('remark');
    		$data = array();
    		$data['name'] = $this->request->post('name');
    		$data['language'] = $this->request->post('language');
    		if(isset($url) && $url != $row['url'] ) $data['url'] = \think\Config::get('LOCAHOST2').$url;
    		$data['remark'] = isset($remark) ? $remark : "";
    		$id = $row->save($data);
    		if($id){
    			$this->success();
    		}else{
    			$this->error();
    		}
        }    
    	$this->view->assign("row", $row);
		return parent::add();
	}
}
?>