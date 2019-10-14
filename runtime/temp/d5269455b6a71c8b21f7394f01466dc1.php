<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:101:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/public/../application/hanshou/view/map/map2.html";i:1521883165;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/head.html";i:1521373495;s:101:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/map_sidebar.html";i:1521719145;s:96:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/footer.html";i:1521373495;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/foot.html";i:1521373495;}*/ ?>
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

	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=GC3kHLC77WncOixzyb38dDVT2QjPVBX4"></script>
	<link href="/hanshou/public//assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="/hanshou/public//assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<style>
		.date1,.date2{
			height: 31px;
			line-height: 31px;
		}
		.search_time{
			margin-left: 10px;
		}
		.progress-bar{
			background-color: #dd4b39;
		}
	</style>
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
						<div class="input-group" style="color: red;">
							*定位前请先设置目标所在城市位置
						</div>
						<br />
						<div class="input-group">
							<input type="text" class="form-control city" value="福州" placeholder="输入所在城市" />
							<span class="input-group-btn">
								<input type="button" value="转换" class="btn btn-primary turn_city" />
							</span>
						</div>
						<br />
						<div class="input-group">
							*查找目标出行时间段
						</div>
						<form method="post" action="<?php echo url('hanshou/map/map2'); ?>" >
							<div class="input-group">
								<div class="controls input-append date form_datetime1" data-date="" data-date-format="yyyy-mm-dd HH:ii:ss" data-link-field="dtp_input1" style="display: inline-block;margin-right: 10px;">
					                <input size="16" name="date1" class="form-control" type="text" value="<?php echo $date1; ?>"  placeholder="起始时间" readonly style="width: 170px;">
					                <span class="add-on"><i class="icon-remove"></i></span>
									<span class="add-on"><i class="icon-th"></i></span>
					            </div>
								<div class="controls input-append date form_datetime2" data-date="" data-date-format="yyyy-mm-dd HH:ii:ss" data-link-field="dtp_input1" style="display: inline-block;margin-right: 10px;">
					                <input size="16" name="date2" class="form-control" type="text" value="<?php echo $date2; ?>"  placeholder="结束时间" readonly style="width: 170px;">
					                <span class="add-on"><i class="icon-remove"></i></span>
									<span class="add-on"><i class="icon-th"></i></span>
					            </div>
					            <div class="controls input-append date" style="display: inline-block;">
					            	<input type="text"class="form-control" name="address" value="<?php echo $map_address; ?>"  placeholder="地址"  style="margin-top: -25px;"/>
								</div>
					            <input type="hidden" value="1" name="leixing"/>
								<input type="submit" value="查找" class="btn btn-primary search_time" style="margin-top: -25px;"/>
								<span class="btn btn-primary piliang" style="margin-left: 10px;margin-top: -25px;">批量转换</span>
							</div>
						</form>
						<!--进度条-->
						<div class="progress-group" style="display: none;">
		                    <span class="progress-text">转换进度</span>
		                    <span class="progress-number"><b class="finished">0</b>/<span class="alled">0</span>&nbsp;剩余时间：<span class="remain_time"></span></span>
							<div class="progress sm">
		                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
		                    </div>
		                </div>
					</div>
					<div class="box-body content" style="padding: 20px 50px;">
						<table class="table table-striped table-bordered table-hover">
							<tr>
								<th>ID</th>
								<th>地点</th>
								<th>经度</th>
								<th>纬度</th>
								<!--<th>排序</th>-->
								<th>导入时间</th>
								<th>车辆时间</th>
								<th>操作</th>
							</tr>   
						<?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<tr>
								<td><?php echo $vo['id']; ?></td>
								<td class="address"><?php echo $vo['address']; ?></td>
								<td class="x x-<?php echo $vo['id']; ?>"><?php echo $vo['x']; ?></td>
								<td class="y y-<?php echo $vo['id']; ?>"><?php echo $vo['y']; ?></td>
								<!--<td class="paixu-<?php echo $vo['id']; ?>"><input type="text" class="px" value="<?php echo $vo['paixu']; ?>"/></td>-->
								<td><?php echo $vo['ctime']; ?></td>
								<td><?php echo $vo['rtime']; ?></td>
								<td class="anniu">
									<?php if($vo['x'] == ""): ?>
									<input type="button" value="转换" class="btn btn-primary turn turn_<?php echo $vo['id']; ?>" attr-id="<?php echo $vo['id']; ?>"/>
									<?php else: ?>
									<input type="button" value="更新" class="btn btn-primary turn turn_<?php echo $vo['id']; ?>" attr-id="<?php echo $vo['id']; ?>"/>
									<?php endif; ?>
									<input type="button" value="修改" class="btn btn-primary btn-warning edit" attr-id="<?php echo $vo['id']; ?>"/>
									<input type="button" value="删除" class="btn btn-primary btn-danger delete" attr-id="<?php echo $vo['id']; ?>" />
								</td>
							</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
						<div class="pagination"><?php echo $arr->render(); ?></div>
						<br />
						<div id="container"></div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" id="is_city" value="0" />
	    <input type="hidden" id="id" value="" />
	    <input type="hidden" id="x" value="" />
		<input type="hidden" id="y" value="" />
		<input type="hidden" id="json_arr" value='<?php echo $json_arr; ?>' />
		<input type="hidden" id="is_turning" value='0' />
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
	<script type="text/javascript" src="/hanshou/public//assets/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/hanshou/public//assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/hanshou/public//assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/hanshou/public//assets/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript" src="/hanshou/public/assets/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
	<script type="text/javascript">
		$(function(){
			$('.form_datetime1').datetimepicker({
		        language:  'zh-CN',
		        weekStart: 1,
		        todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
		        showMeridian: 1
		    });
		    $('.form_datetime2').datetimepicker({
		        language:  'zh-CN',
		        weekStart: 1,
		        todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
		        showMeridian: 1
		    });
			//修改
			$(".edit").click(function(){
				var id = $(this).attr("attr-id");
				layer.ready(function(){ 
					layer.open({
			    	type: 2,
			    	title: '修改',
			    	maxmin: true,
			    	area: ['550px', '600px'],
			    	content: "<?php echo url('hanshou/map/edit'); ?>"+"?id="+id,
			    	end: function(){
			    		window.location.reload();
			    	}
			    		
			    	})
				
				})
			})
			//删除
			$(".delete").click(function(){
				var id = $(this).attr("attr-id");
				layer.confirm('注意，删除该条数据时同时会删除与其对应的数据，确定删除？', {icon: 3, title:'提示'}, function(index){
				$.ajax({
				  	type:"post",
					url:"<?php echo url('hanshou/map/delete'); ?>",
					async:false,
					data:{id:id},
					success:function(data){
						if(data[0] == '101'){
							layer.msg(data[1], {
							  icon: 1,
							  time: 2000 //2秒关闭（如果不配置，默认是3秒）
							}, function(){
								window.location.reload();
							});  
						}else{
							layer.msg(data[1], {
							  icon: 2,
							  time: 2000 //2秒关闭（如果不配置，默认是3秒）
							}, function(){
							  //do something
							});  
						}
					}
				  })
				  layer.close(index);
				});
			})
		})
	    var arr_x = [];
	   	var city = $(".city").val();
	    var map = new BMap.Map("container");
	    map.centerAndZoom(city, 12);
	    map.enableScrollWheelZoom();    //启用滚轮放大缩小，默认禁用
	    map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
	    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
	    map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
	    map.addControl(new BMap.OverviewMapControl({ isOpen: true, anchor: BMAP_ANCHOR_BOTTOM_RIGHT }));   //右下角，打开
	    var localSearch = new BMap.LocalSearch(map);
	    localSearch.enableAutoViewport(); //允许自动调节窗体大小
		$(".turn").click(function(){
			$("#id").val("");
			$("#x").val("");
			$("#y").val("");
			var id = $(this).attr("attr-id");
			$("#id").val(id);
			var keyword = $(this).parents("tr").find(".address").text();
			localSearch.search(keyword);
			$(this).val("已转换");
		})
		$(".turn_city").click(function(){
			var city = $(".city").val();
			$("#is_city").val(1);
			localSearch.search(city);
			$(this).val("已转换");
		})
		//批量转换
		$(".piliang").click(function(){
			var arr = JSON.parse($("#json_arr").val());
			var num = arr.length;
			var info = arr;
			var is_turning = $("#is_turning").val();
			
			if(is_turning == 1){
				layer.msg("正在转换中，请稍后", {
				  icon: 2,
				  time: 2000 //2秒关闭（如果不配置，默认是3秒）
				}, function(){
				});
				return;
			}else{
				get_remain_time(num);
				$(".alled").text(num);
				$(".finished").text(0);
				$(".remain_time").text();
				$(".progress-bar").css("width","0px");
				$(".progress-group").show();
				$("#is_turning").val(1);
				$(".piliang").text("转换中");
			}
			var n = 0;
			var interval = setInterval(function(){
				var m = get_xy(n);
				if(m == "over"){
					$(".progress-group").hide();
					layer.msg("全部转换完成", {
					  icon: 1,
					  time: 2000 //2秒关闭（如果不配置，默认是3秒）
					}, function(){
						n = "over";
						$("#is_turning").val(0);
						$(".piliang").text("批量转换");
						clearInterval(interval);
					}); 
				}else{
					n++;
				}
			},3000)
		})
		//获取坐标
		function get_xy(n){
			if(n == "over"){
				return ;
			}
			var arr = JSON.parse($("#json_arr").val());
			var num = arr.length;
			var info = arr;
			var address = info[n]['address'];
			var x = info[n]['x'];
			var y = info[n]['y'];
			var id = info[n]['id'];
			$("#id").val("");
			$("#x").val("");
			$("#y").val("");
			$("#id").val(id);
			if(address){
				localSearch.search(address);
			}
			get_remain_time(num-n-1);
			$(".finished").text(n+1);
			var percent = (n+1)/num * 100;
			$(".progress-bar").css("width",percent+"%");
			$(".turn_"+id).val("已转换");
			if(n == num-1){
				//说明这是最后一次，可以退出了
				n = "over";
			}
			return n;
		} 
		//获取剩余时长
		function get_remain_time(num){
			var time = num * 3;
			var remain_time = "";
			if(time<60){
				remain_time = time+"秒";
			}else{
				remain_time = (time / 60).toFixed(2)+"分钟";
			}
			$(".remain_time").text(remain_time);
		}
	$.ajaxSetup({async: false});
	localSearch.setSearchCompleteCallback(function (searchResult) {
        var poi = searchResult.getPoi(0);
        
        var x = poi.point.lng;
        var y = poi.point.lat;
        $("#x").val(x);
        $("#y").val(y);
        var is_city = $("#is_city").val();
        var id = $("#id").val();
        map.centerAndZoom(poi.point, 13);
        var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
        map.addOverlay(marker);
        $.ajax({
			type:"post",
			url:"<?php echo url('hanshou/map/update_xy'); ?>",
			async:false,
			data:{x:x,y:y,id:id,is_city:is_city},
			success:function(data){
				if(is_city == 1){
					$("#is_city").val(0);
				}else{
					$(".x-"+id).text(x);
					$(".y-"+id).text(y);
				}
			}
		});
    });		
	</script>
	</body>
</html>
