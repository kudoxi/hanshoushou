<?php
namespace app\hanshou\controller;

use app\common\controller\Frontend;
use Think\Db;
use think\Session;
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPExcel/Writer/Excel5.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPExcel/Writer/Excel2007.php';
class Map extends Index
{
	public function _initialize()
    {
        parent::_initialize();
    }
    public function map()
    {
    	$where = "1=1";
    	$date1_s = Session::get("date1");
		$date2_s = Session::get("date2");
		if($date1_s != ""){
			$where .= " and rtime >= '$date1_s'";
		}
		if($date2_s != ""){
			$where .= " and rtime <= '$date2_s'";
		}
    	$arr = Db::name("map")->where($where)->order("id DESC")->select();
    	$arr_x = array();
    	$arr_y = array();
    	$arr_a = array();
    	$arr_r = array();
    	$arr_m = array();
    	if(!empty($arr)){
    		foreach($arr as $k=>$v){
	    		$arr_x[$k] = $v['x'];
	    		$arr_y[$k] = $v['y'];
	    		$arr_a[$k] = $v['address'];
	    		$arr_r[$k] = $v['rtime'];
	    		$arr_m[$k] = $v['remark'];
	    	}
    	}
    	$this->view->assign("arr_m", json_encode($arr_m));
    	$this->view->assign("arr_r", json_encode($arr_r));
    	$this->view->assign("arr_x", json_encode($arr_x));
    	$this->view->assign("arr_x", json_encode($arr_x));
    	$this->view->assign("arr_y", json_encode($arr_y));
    	$this->view->assign("arr_a", json_encode($arr_a));
    	$this->view->assign("city_x", Session::get("city_x"));
    	$this->view->assign("city_y", Session::get("city_y"));
        return $this->view->fetch();
    }
    public function map2()
    {
    	$where = "1=1";
    	$date2_s = "";
    	$date1_s = "";
    	if($this->request->isPost()){
    		$date = date("Y-m-d");
    		$date1 = $this->request->post("date1") ? $this->request->post("date1") : "";
    		$date2 = $this->request->post("date2") ? $this->request->post("date2") : "";
    		$address = $this->request->post("address") ? $this->request->post("address") : "";
    		$leixing = $this->request->post("leixing") ? $this->request->post("leixing") : 0;
    		if($leixing == 1){
    			Session::set("date1",$date1);
    			Session::set("date2",$date2);
    			Session::set("map_address",$address);
    		}
    	}
    	$date1_s = Session::get("date1");
		$date2_s = Session::get("date2");
		$map_address = Session::get("map_address");
		if($date1_s != ""){
			$where .= " and rtime >= '$date1_s'";
		}
		if($date2_s != ""){
			$where .= " and rtime <= '$date2_s'";
		}
		if($map_address != ""){
			$where .= " and address like '%$map_address%'";
		}
    	$arr = model("map")->where($where)->order("id DESC")->paginate(10);
    	$arr2 = model("map")->where($where)->order("id DESC")->select();
    	//$arr = array("中山北路900号","杨泰路2158弄");//,"上海海洋大学","东方名筑"
    	$date2_s = $date2_s ? $date2_s : "";
    	$date1_s = $date1_s ? $date1_s : "";
    	$map_address = $map_address ? $map_address : "";
    	$this->view->assign("date2", $date2_s);
    	$this->view->assign("date1", $date1_s);
    	$this->view->assign("map_address", $map_address);
    	$this->view->assign("json_arr", json_encode($arr2));
    	$this->view->assign("arr", $arr);
        return $this->view->fetch();
    }
    public function update_xy(){
    	$x = $this->request->post("x");
    	$y = $this->request->post("y");
    	$id = $this->request->post("id");
    	$is_city = $this->request->post("is_city");
    	if($is_city == 1){
    		Session::set("city_x",$x);
    		Session::set("city_y",$y);
    	}else{
    		$data = array("x"=>$x,"y"=>$y);
    		$success = Db::name("map")->where("id",$id)->update($data);
    	}
    	echo 1;
    }
    public function dao(){
    	return $this->view->fetch();
    }
    
    //修改
    public function edit(){
    	$id = $lid = input('id');
    	$list = array();
    	$list['address'] = "";
    	$list['x'] = "";
    	$list['y'] = "";
    	$list['rtime'] = "";
    	$list['id'] = "";
    	if($id){
    		$list = Db::name("map")->where("id = $id")->find();
    	}
    	if($this->request->isPost()){
    		$id = $this->request->post("id");
    		$address = $this->request->post("address");
    		$x = $this->request->post("x");
    		$y = $this->request->post("y");
    		$rtime = $this->request->post("rtime");
    		$remark = $this->request->post("remark");
    		$data = array(
    			"address"=>$address,
    			"x"=>$x,
    			"y"=>$y,
    			"rtime"=>$rtime,
    			"remark"=>$remark,
    		);
    		$res = Db::name("map")->where("id = $id")->update($data);
    		if($res){
    			return array("0"=>"101","1"=>"修改成功");
    		}else{
    			return array("0"=>"102","1"=>"修改失败");
    		}
    		exit;
    	}
    	$this->view->assign("list", $list);
    	return $this->view->fetch();
    }
    //删除
    public function delete(){
    	$id = $this->request->post('id');
    	if($id % 2 == 0){
    		$ids = $id - 1;
    	}else{
    		$ids = $id + 1;
    	}
    	$res1 = Db::name("map")->where("id = $id")->delete();
    	$res2 = Db::name("map")->where("id = $ids")->delete();
    	if($res1 && $res2){
    		return array("0"=>"101","1"=>"删除成功");
    	}else{
    		return array("0"=>"102","1"=>"删除失败");
    	}
    }
    /*
	 * 接收传入的excel
	 */
	function excelpost(){
		//获取上传的文件名、扩展名等信息
	    if(!empty($_FILES['file_stu']['name'])){
	        //保存的是文件上传到服务器临时文件夹之后的文件名
	        $tmp_file = $_FILES ['file_stu']['tmp_name'];
	        //分割文件名和扩展名
	        $file_types = explode ( ".", $_FILES['file_stu']['name']);
	        //获取扩展名
	        $file_type = $file_types [count ( $file_types ) - 1];
		    //判别是不是.xls文件，判别是不是excel文件
		    if(strtolower($file_type)!= "xlsx" && strtolower ( $file_type ) != "xls"){
		       $this->error ( '不是Excel文件，重新上传' );
		    }
	   		//设置上传路径
	     	$savePath = $_SERVER['DOCUMENT_ROOT'].'/hanshou/public/uploads/';
	     	//以时间来命名上传的文件
	     	$str = date ( 'Ymdhis' ); 
	     	$file_name = basename ( $str . "." . $file_type );   
	     	$upload_file_name = $savePath.$file_name;
	     	$upload_file_name = str_replace("\\","/",$upload_file_name);
	     	$upload_file_name = str_replace("//","/",$upload_file_name);
	     	if(isset($_FILES["file_stu"]) && is_uploaded_file($tmp_file) && $_FILES["file_stu"]["error"] == 0){
				if(!move_uploaded_file($tmp_file,$upload_file_name)){
	     			$this->error ( '上传失败' );
	     		}
	     	}else{
	     		$this->error ( '上传失败' );
	     	}
	    }else{
	    	$this->error("文件未上传！");
	    }
	    $data =$this->importExcel($savePath.$file_name);
	    $res = 1;
	    if(!empty($data)){
	    	foreach($data as $k=>$v){
	    		if(!empty($v)){
	    			foreach($v as $i=>$val){
				    	if($val && $i >= 1 && $val['H']){
				    		$rtime = isset($val['F']) ? $val['F'] : "";//经过卡口时间
				    		$address = isset($val['H']) ? $val['H'] : "";//卡口名称
				    		$remark = isset($val['M']) ? $val['M'] : "";//行驶方向
				    		//处理地址格式
				    		$new_address = "";
				    		$new_address_arr = explode("-",$address);
				    		$new_address = $new_address_arr[1];
				    		$data_db = array(
				    			"address"=>$new_address,
				    			"ctime"=>date("Y-m-d H:i:s"),
				    			"rtime"=>$rtime,
				    			"remark"=>$remark,
				    		);
				    		$id = Db::name("map")->insertGetId($data_db);
				    		$success = Db::name("map")->where("id = $id")->update(array("paixu"=>$id));
				    		if(!$success){
				    			$res = 0;
				    		}
				    	}
				    }
	    		}
	    	}
	    }else{
	    	$res = 0;
	    }
	    if($res != 0){
	    	$this->success("导入成功",url("Hanshou/map/map2"));
	    }else{
	    	$this->error("导入失败");
	    }
	}
    /*
     * 导入excel
     */
    function importExcel($filePath){
    	$PHPExcel = new \PHPExcel();
    	//默认用excel2007读取excel，若格式不对，则用之前的版本进行读取
    	$PHPReader = new \PHPExcel_Reader_Excel2007();
    	if(!$PHPReader->canRead($filePath)){ 
    		$PHPReader = new \PHPExcel_Reader_Excel5(); 
    		if(!$PHPReader->canRead($filePath)){ 
    			 echo 'no Excel'; 
    			 return; 
    		}
    	}
    	$data = array();
    	$PHPExcel = $PHPReader->load($filePath);
    	$sheetCount = $PHPExcel->getSheetCount();
    	for ( $i = 0; $i < $sheetCount; $i++ ) {
    	 	$currentSheet = $PHPExcel->getSheet($i);  //读取excel文件中的第一个工作表
    	 	$allColumn = $currentSheet->getHighestColumn(); //取得最大的列号
    		$allRow = $currentSheet->getHighestRow(); //取得一共有多少行
    		$highestRow = intval( $allRow ) ;
    		$highestColumn = \PHPExcel_Cell::columnIndexFromString($allColumn);//有效总列数
    		for( $currentRow = 2; $currentRow <= $highestRow; $currentRow++ ) {
    		 	//从第A列开始输出
				for($currentColumn= 'A';$currentColumn<= $allColumn; $currentColumn++){
					//数据坐标 
					$address = $currentColumn . $currentRow;
					//读取到的数据，保存到数组$arr中 
					$val = $currentSheet->getCell($address)->getValue(); 
					//如果输出汉字有乱码，则需将输出内容用iconv函数进行编码转换，如下将gb2312编码转为utf-8编码输出
					//$val = iconv('gb2312','utf-8', $val)."\t"; 
					$data[$i][$currentRow][$currentColumn] = $val; 
				}
    		}
    	}
    	
		/*//从第二行开始输出，因为excel表中第一行为列名
		for($currentRow = 2;$currentRow <= $allRow;$currentRow++){ 
			//从第A列开始输出
			for($currentColumn= 'A';$currentColumn<= $allColumn; $currentColumn++){
				//数据坐标 
				$address = $currentColumn . $currentRow; 
				//读取到的数据，保存到数组$arr中 
				$val = $currentSheet->getCell($address)->getValue(); 
				//如果输出汉字有乱码，则需将输出内容用iconv函数进行编码转换，如下将gb2312编码转为utf-8编码输出
				//$val = iconv('gb2312','utf-8', $val)."\t"; 
				$data[$currentRow][$currentColumn] = $val;
			}
		}*/
    	return $data;
    }
}
?>