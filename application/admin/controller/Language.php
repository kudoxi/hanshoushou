<?php
namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 语言管理
 *
 * @icon fa fa-user
 */
class Language extends Backend
{
	public function _initialize()
    {
        parent::_initialize();
        $this->model = model('Language');
        $this->vocabulary = model('vocabulary');
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
            foreach ($list as $k => $v)
            {
                $v->password = '';
                $v->salt = '';
            }
            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }
    public function add(){
    	if ($this->request->isPost())
        {
    		$data = array();
    		$data['name'] = $this->request->post('name');
    		$data['c_time'] = time();
    		$data['ip'] = request()->ip();
    		$id = $this->model->create($data);
    		if($id){
    			$this->success();
    		}else{
    			$this->error();
    		}
    	}
    	return parent::add();
    }
    public function edit($ids=null){
    	$row = $this->model->get(['id' => $ids]);
        if (!$row)
            $this->error(__('No Results were found'));
        if ($this->request->isPost())
        {
        	$data = array();
    		$data['name'] = $this->request->post('name');
    		$result = $row->save($data);
            if ($result === FALSE)
            {
                $this->error($row->getError());
            }
            $this->success();
        }    
    	$this->view->assign("row", $row);
        return $this->view->fetch();
    }
    public function del($ids=null){
    	$row = $this->model->get(['id' => $ids]);
        if (!$row)
            $this->error(__('No Results were found'));
        //检查使用
        $exist = $this->vocabulary->where("language = $ids")->find();
        if(empty($exist)){
        	$res = $row->delete();
        	if(!$res){
	        	$this->error($row->getError());
	        }
        }else{
        	$this->error(__('parameter has been used'));
        }
        $this->success();
    }
}
?>