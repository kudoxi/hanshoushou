<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:100:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/public/../application/hanshou/view/map/dao.html";i:1521871550;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/head.html";i:1521373495;s:101:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/map_sidebar.html";i:1521719145;s:96:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/footer.html";i:1521373495;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/foot.html";i:1521373495;}*/ ?>
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

	</head>
	<body class="skin-blue layout-boxed sidebar-mini" style="padding-top: 0px;">
		<div class="wrapper" style="overflow: hidden; height: auto; min-height: 100%;">
			<aside class="main-sidebar" style="padding-top: 0px;">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar" style="height: auto;padding-top: 50px;">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="/hanshou/public//assets/img/mmexport1518176423879.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>狗哥</p>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu tree" data-widget="tree">
			<li class="header">地图</li>
			<li>
				<a href="<?php echo url('hanshou/map/dao'); ?>"><i class="fa fa-circle-o"></i>导入excel</a>
			</li>
			<li>
				<a href="<?php echo url('hanshou/map/map2'); ?>"><i class="fa fa-circle-o"></i>数据处理</a>
			</li>
			<li>
				<a href="<?php echo url('hanshou/map/map'); ?>"><i class="fa fa-circle-o"></i>标记点连线</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
			<div class="content-wrapper" style="min-height: 1020px;">
				<div class="box">
					<div class="box-header with-border" style="padding-left: 50px;">
						<h3 class="box-title">ps【卡口格式 】：保证路名前后有“-”，如（-浦上路高宅路口-），（卡-二环乌山高架桥-南往北上桥处），（卡-卢滨路金洲路-）</h3>
					</div>
					<div class="box-body content" style="padding: 20px 50px;">
						<form class="form-horizontal" method="post" action="<?php echo url('Hanshou/map/excelpost'); ?>" enctype="multipart/form-data">
							<label class="control-label">导入excel文件:</label>
							<br />
							<div class="controls">
								<input type="file" class="form-control" name="file_stu">
							</div>
							 <br />
							<div class="form-actions">
								<input type="submit" value="数据导入（Excel）" class="btn btn-danger btn-import">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script>
	$(".check_out").click(function(){
		var to_href = $(this).attr("attr-href");
		window.location.href = to_href;
	})
	
	function zan_or_cai(my,tip,zc,option,ud,id,lang){
		$.ajax({
			type:"post",
			url:"<?php echo url('hanshou/base/zan_or_cai'); ?>",
			async:false,
			data:{type : lang,"is_zan":ud,id:id,option:option},
			success:function(data){
				layer.tips(tip,my,{tips:1});
				my.siblings(".z_or_c").val(zc);
				if(option == "+"){
					my.addClass("zan_active");
				}else{
					my.removeClass("zan_active");
				}
				my.parents(".zan_div").children(".info-box").removeClass("bg-aqua").removeClass("bg-red").addClass(data['ok']);
				my.parents(".zan_div").find(".progress-bar").css("width",data["percent"]);
				my.parents(".zan_div").find(".info-box-number").text(data['zan']);
			}
		})
	}
	//点赞区域自适应
	$(window).resize(function(){
		if($(window).width() < 1000){
			$(".zan_div").css({"position":"relative","margin-top":"0px"});
		}else{
			$(".zan_div").css({"position":"absolute","margin-top":"-112px"});
		}
		console.log();
	})
</script> <style>
	.to_top{
		position: fixed; 
		bottom: 20px; 
		right: 25px; 
		width: 40px; 
		height: 40px; 
		color: rgb(238, 238, 238); 
		line-height: 40px; 
		text-align: center; 
		background-color: rgb(34, 45, 50); 
		cursor: pointer; 
		border-radius: 5px; 
		z-index: 99999; 
		opacity: 0.7; 
		display: block;
	}
	.to_top:hover{
		opacity: 1; 
	}
</style>
<div class="to_top">
	<i class="fa fa-chevron-up"></i>
</div>
<script async src="//www.google-analytics.com/analytics.js"></script>
<script src="/hanshou/public//bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/hanshou/public//bower_components/fastclick/lib/fastclick.js"></script>
<script src="/hanshou/public//dist/js/adminlte.min.js"></script>
<script src="/hanshou/public//dist/js/demo.js"></script>
<script>
	$(function(){
		$('.to_top').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);}); 
	})
</script>
	</body>
</html>
