<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:100:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/public/../application/hanshou/view/map/map.html";i:1521871552;s:101:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/map_sidebar.html";i:1521719145;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!-- Bootstrap Core CSS -->
        <!--<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="/hanshou/public/assets/css/index.css" rel="stylesheet">
		<link href="//cdn.fastadmin.net/assets/css/frontend.min.css" rel="stylesheet">-->
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
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=GC3kHLC77WncOixzyb38dDVT2QjPVBX4"></script>
	<style type="text/css">
		#allmap {width: 100%;height: 100%;}
		.BMapLabel{width: 100px;height: 50px;}
	</style>
	</head>
	<body class="skin-blue layout-boxed sidebar-mini" style="padding-top: 0px;">
		<div class="wrapper">
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
			<div id="allmap"></div>
		</div>
		<div id="control">
			<button onclick="setCity();">设置城市</button>
			<button onclick = "polyline.enableEditing();polygon.enableEditing();">开启线、面编辑功能</button>
			<button onclick = "polyline.disableEditing();polygon.disableEditing();">关闭线、面编辑功能</button>
		</div>
	<input type="hidden" class="arr_m" value='<?php echo $arr_m; ?>'/>
	<input type="hidden" class="arr_r" value='<?php echo $arr_r; ?>'/>	
	<input type="hidden" class="arr_a" value='<?php echo $arr_a; ?>'/>	
	<input type="hidden" class="arr_x" value='<?php echo $arr_x; ?>'/>	
	<input type="hidden" class="arr_y" value='<?php echo $arr_y; ?>'/>	
	<script async src="//www.google-analytics.com/analytics.js"></script>
	<script src="/hanshou/public//bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/hanshou/public//bower_components/fastclick/lib/fastclick.js"></script>
	<script src="/hanshou/public//dist/js/demo.js"></script>
	</body>
	<script type="text/javascript">
		
		var center_point_x = '<?php echo $city_x;?>';//121.48;
		var center_point_y = '<?php echo $city_y;?>';//31.22;
		var address = JSON.parse($(".arr_a").val());
		var rtime = JSON.parse($(".arr_r").val());
		var point_x = JSON.parse($(".arr_x").val());//[121.435652,121.461727];//,121.525985,121.435652
		var point_y = JSON.parse($(".arr_y").val());//[31.401116,31.265179];//31.205729,31.401116
		var remark = JSON.parse($(".arr_m").val());
		// 百度地图API功能
		var map = new BMap.Map("allmap");
		map.centerAndZoom(new BMap.Point(center_point_x, center_point_y), 15);
		map.enableScrollWheelZoom();
		//通过传入的经纬度数组，两两连线
		for(var i = 0;i<address.length;i++){
			if(i % 2 == 0 && point_x[i] != null && point_x[i+1] != null){
				var polyline = new BMap.Polyline([
				new BMap.Point(point_x[i], point_y[i]),
				new BMap.Point(point_x[i+1], point_y[i+1]),
				], {strokeColor:"blue", strokeWeight:2, strokeOpacity:0.5});   //创建折线
				map.addOverlay(polyline);   //增加折线
				//标记点
				var marker1 = new BMap.Marker(new BMap.Point(point_x[i], point_y[i]));
				var marker2 = new BMap.Marker(new BMap.Point(point_x[i+1], point_y[i+1]));
				map.addOverlay(marker1);
				map.addOverlay(marker2);
				//加备注
				if(point_x[i] == point_x[i+1] && point_y[i] == point_y[i+1]){
					var content1 = "<div><div>起终点 : "+address[i]+"</div><div>起始时间 : "+rtime[i]+"</div><div>终止时间 : "+rtime[i+1]+"</div></div>";
					var height = "auto";
					if(remark[i]){
						content1 += "<div>"+remark[i]+"</div>";
					}if(remark[i+1]){
						content1 += "<div>"+remark[i+1]+"</div>";
					}
					var label = new BMap.Label(content1,{offset:new BMap.Size(20,-10)});
					label.setStyle({
						 color : "blue",
						 fontSize : "12px",
						 fontWeight:"bold",
						 height : height,
						 width:"200px",
						 lineHeight : "20px",
						 fontFamily:"微软雅黑",
						 display:"block",
						 paddingBottom:"5px",
						 paddingLeft:"5px",
						 paddingTop:"5px",
					 });
					 marker1.setLabel(label); 
					 //同点的事件无效
				}else{
					var content1 = "<div>起点 : "+address[i]+"</div><div>起始时间 : "+rtime[i]+"</div>";
					var content2 = "<div>终点 : "+address[i+1]+"</div><div>结束时间 : "+rtime[i+1]+"</div>";
					var height = "auto";
					if(remark[i]){
						content1 += "<div>"+remark[i]+"</div>";
					}
					if(remark[i+1]){
						content2 += "<div>"+remark[i+1]+"</div>";
					}
					var label = new BMap.Label(content1,{offset:new BMap.Size(20,-10)});
					label.setStyle({
						 color : "red",
						 fontSize : "12px",
						 fontWeight:"bold",
						 height : height,
						 width:"200px",
						 lineHeight : "20px",
						 fontFamily:"微软雅黑",
						 paddingBottom:"5px",
						 paddingLeft:"5px",
						 paddingTop:"5px",
						 display:"none",
					 });
					marker1.setLabel(label); 
					marker1.addEventListener("mouseover",attribute);
					marker1.addEventListener("mouseout",attribute2);
					var label2 = new BMap.Label(content2,{offset:new BMap.Size(20,-10)});
					label2.setStyle({
						 color : "green",
						 fontSize : "12px",
						 fontWeight:"bold",
						 height : "40px",
						  width:"200px",
						 lineHeight : "20px",
						 fontFamily:"微软雅黑",
						 paddingBottom:"5px",
						 paddingLeft:"5px",
						 paddingTop:"5px",
						 display:"none",
					 });
					marker2.setLabel(label2);
					marker2.addEventListener("mouseover",attribute);
					marker2.addEventListener("mouseout",attribute2);
				}
				
			}
		}
		//标记监听事件
		function attribute(e){
			var p = e.target.getLabel();
			p.setStyle({    //给label设置样式，任意的CSS都是可以的
		        display:"block",
		    });
		}
		function attribute2(e){
			var p = e.target.getLabel();
			p.setStyle({    //给label设置样式，任意的CSS都是可以的
		        display:"none",
		    });
		}
</script>
</html>
