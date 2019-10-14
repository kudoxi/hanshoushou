<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:101:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/public/../application/hanshou/view/map/edit.html";i:1521730205;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/head.html";i:1521373495;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!-- Bootstrap Core CSS -->
        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="/hanshou/public/assets/css/index.css" rel="stylesheet">
		<link href="//cdn.fastadmin.net/assets/css/frontend.min.css" rel="stylesheet">
        <!-- Plugin CSS -->
        <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
		<!--adminlte-->
		<link href="/hanshou/public//dist/css/AdminLTE.min.css" rel="stylesheet">	
		<link href="/hanshou/public//dist/css/skins/_all-skins.min.css" rel="stylesheet">	
		
		<!--文件上传-->
		<link href="/hanshou/public//assets/css/fileinput.css" rel="stylesheet">
		<!-- jQuery -->
        <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="//cdn.bootcss.com/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
        <!-- layer-->
        <script src="/hanshou/public//assets/layer/layer.js"></script>
        <script src="/hanshou/public//assets/layer/layer.js"></script>
        
        <!--文件上传-->
        <script src="/hanshou/public//assets/js/sortable.js"></script>
        <script src="/hanshou/public//assets/js/fileinput.js"></script>
		<script src="/hanshou/public//assets/js/theme.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
		
		<!--富文本-->
		<script src="/hanshou/public//assets/js/ueditor/ueditor.config.js"></script>	
		<script src="/hanshou/public//assets/js/ueditor/ueditor.all.min.js"></script>	

<link href="/hanshou/public//assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/hanshou/public//assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body style="padding: 10px;">
	<form role="form" method="post" action="<?php echo url('hanshou/map/edit'); ?>">
		<div class="form-group">
			<label for="name">地址</label>
			<input type="text" class="form-control address" value="<?php echo $list['address']; ?>" placeholder="请输入地址" required/>
		</div>
		<div class="form-group">
			<label for="name">经度</label>
			<input type="text" class="form-control x" value="<?php echo $list['x']; ?>" placeholder="请输入经度" />
		</div>
		<div class="form-group">
			<label for="name">纬度</label>
			<input type="text" class="form-control y" value="<?php echo $list['y']; ?>" placeholder="请输入纬度" />
		</div>
		<div class="form-group">
			<label for="name">车辆时间</label>
			<div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                <input size="16" class="form-control rtime" type="text" value="<?php echo $list['rtime']; ?>" readonly required>
                <span class="add-on"><i class="icon-remove"></i></span>
				<span class="add-on"><i class="icon-th"></i></span>
            </div>
			<input type="hidden" id="dtp_input1" value="" />
		</div>
		<input type="hidden" id="id" value="<?php echo $list['id']; ?>" />
		<span class="btn btn-primary tijiao">提交</span>
	</form>
<script type="text/javascript" src="/hanshou/public//assets/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/hanshou/public//assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/hanshou/public//assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/hanshou/public//assets/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript" src="/hanshou/public/assets/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
</body>
<script>
	$('.form_datetime').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
    $(".tijiao").click(function(){
    	var id = $("#id").val();
    	var address = $(".address").val();
    	var x = $(".x").val();
    	var y = $(".y").val();
    	var rtime = $(".rtime").val();
    	$.ajax({
    		type:"post",
			url:"<?php echo url('hanshou/map/edit'); ?>",
			async:false,
			data:{id:id,address:address,x:x,y:y,rtime:rtime},
			success:function(data){
				if(data[0] == "101"){
					layer.msg(data[1], {
					  icon: 1,
					  time: 2000 //2秒关闭（如果不配置，默认是3秒）
					}, function(){
						var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
						parent.layer.close(index); //再执行关闭  
					}); 
				}else{
					layer.msg(data[1], {
					  icon: 2,
					  time: 2000 //2秒关闭（如果不配置，默认是3秒）
					}, function(){
						
					}); 
				}
			}
    	})
    })
</script>
</html>