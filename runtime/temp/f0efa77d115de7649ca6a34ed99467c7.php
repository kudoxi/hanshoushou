<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:107:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/public/../application/hanshou/view/record/record2.html";i:1560131324;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/head.html";i:1560131124;s:96:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/header.html";i:1521373495;s:97:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/sidebar.html";i:1521373495;s:96:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/footer.html";i:1521373495;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/foot.html";i:1521373495;}*/ ?>
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

        <!-- audio -->
		<link href="/hanshou/public//assets/css/audio.css" rel="stylesheet">
        <script src="/hanshou/public//assets/js/audio.js"></script>
<title>字母</title>
<style>
.zan_div{
	position: absolute;
    width: 295px;
    margin-top: -112px;
    right: 0;
    margin-right: 20px;
}
.dianzan:hover,.caicai:hover{
	background-color: #00193A;
	cursor: pointer;
}
.zan_active{
	background-color: #00193A;
}
</style>
	</head>
	<body class="skin-blue layout-boxed sidebar-mini" style="padding-top: 0px;">
		<div class="wrapper" style="overflow: hidden; height: auto; min-height: 100%;">
			<header class="main-header" id="top">
	<a href="<?php echo url('hanshou/index/index'); ?>" class="logo">
		<!-- LOGO -->
		KouGong
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Navbar Right Menu -->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<a href="<?php echo url('hanshou/base/add_language'); ?>" title="创建语言分类">
						<i class="fa fa-plus"></i>
					</a>
				</li>
				<li class="dropdown messages-menu">
					<a href="<?php echo url('hanshou/base/upload'); ?>" title="上传你的录音">
						<i class="fa fa-upload"></i>
					</a>
				</li>
				<?php if($is_login == 2): ?>
				<li class="dropdown messages-menu">
					<a href="<?php echo url('hanshou/letter/letter'); ?>"  title="你的信">
						<i class="fa fa-envelope-o"></i>
						<span class="label label-success">1</span>
					</a>
					<!--<ul class="dropdown-menu">
						<li class="header"><?php if($is_login == 2): ?>你有1封信<?php endif; ?></li>
						<li>
							<ul class="menu">
								<li>
									<a href="#">
										<div class="pull-left">
											<img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
										</div>
										<h4>
                      Sender Name
                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
										<p>Message Excerpt</p>
									</a>
								</li>
								...
							</ul>
						</li>
						<li class="footer">
							<a href="#">See All Messages</a>
						</li>
					</ul>-->
				</li>
				<?php endif; ?>
				<!-- Notifications: style can be found in dropdown.less -->
				<!--<li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="ion ion-ios-people info"></i> Notification title
                  </a>
                </li>
                ...
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>-->
				<!-- Tasks: style can be found in dropdown.less -->
				<!--<li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">9</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 9 tasks</li>
            <li>
              <ul class="menu">
                <li>
                  <a href="#">
                    <h3>
                      设计按钮
                      <small class="pull-right">20%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                ...
              </ul>
            </li>
            <li class="footer">
              <a href="#">View all tasks</a>
            </li>
          </ul>
        </li>-->
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="/hanshou/public//assets/img/mmexport1518176423879.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs"><?php echo $ahan_username; ?></span>
					</a>
					<ul class="dropdown-menu">
						<!--<li class="user-header">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              <p>
                Alexander Pierce - Web Developer
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <li class="user-body">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </li>-->
						<li class="user-footer">
							<!--<div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>-->
							<div class="pull-right">
								<a href="" class="btn btn-default btn-flat login_out">去洗澡了</a>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown messages-menu">
					<a href="<?php echo url('hanshou/index/login_out'); ?>" title="溜了溜了">
						<i class="fa  fa-sign-out"></i>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<script>
	$(".login_out").click(function() {
		$.ajax({
			type: "post",
			url: "<?php echo url('hanshou/index/login_out'); ?>",
			async: true,
			success: function(data) {
				layer.msg(data[1]);
			}
		});
	})
</script><aside class="main-sidebar" style="padding-top: 0px;">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar" style="height: auto;padding-top: 50px;">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="/hanshou/public//assets/img/mmexport1518176423879.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $ahan_username; ?></p>
			</div>
		</div>
		<!-- search form -->
		<!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu tree" data-widget="tree">
			<li class="header">去你想去的地方</li>
			<?php if(is_array($languagelist) || $languagelist instanceof \think\Collection || $languagelist instanceof \think\Paginator): $i = 0; $__LIST__ = $languagelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li class="treeview"><!-- active menu-open-->
				<a href="#">
					<i class="fa fa-files-o"></i>
					<span><?php echo $vo['name']; ?></span>
					<span class="pull-right-container">
		            	<i class="fa fa-angle-left pull-right"></i>
		            </span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a class="check_out" attr-href="<?php echo url('hanshou/record/record',array('lid'=>$vo['id'])); ?>" href="javascript:void(0)"><i class="fa fa-circle-o"></i>字·母</a>
					</li>
					<li>
						<a class="check_out" attr-href="<?php echo url('hanshou/vocabulary/vocabulary',array('lid'=>$vo['id'])); ?>" href="javascript:void(0)"><i class="fa fa-circle-o"></i>单·词</a>
					</li>
					<li>
						<a class="check_out cant_use" attr-href="#" href="javascript:void(0)"><i class="fa fa-circle-o"></i>语·法</a>
					</li>
				</ul>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
<script>
	$(".cant_use").click(function(){
		layer.tips('等我', $(this));
	})
</script>
			<div class="content-wrapper" style="min-height: 1020px;">
				<div class="box">
					<div class="box-header with-border" style="padding-left: 50px;">
						<h3 class="box-title"><?php echo $language; ?>字母部分</h3>
					</div>
					<div class="box-body content" style="padding: 20px 50px;">
						<div class="container" style="width: 100%">
							<div class="row">
								<?php if($list->isEmpty()): ?>
								<div class="callout callout-info">
							        <h4>额....</h4>
							        <p>暂时没有数据，要不你自己<a href="<?php echo url('hanshou/base/upload'); ?>">上传</a>一下？</p>
							    </div>
								<?php endif; ?>
								<ul class="list-group">
									<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<li class="list-group-item">
										<p><?php echo $vo['name']; ?></p>
										<div>
											<audio size="#" duration="#" filename="#<?php echo $vo['name']; ?>" >
												<source src="<?php echo $vo['url']; ?>" type="audio/mp3">
											</audio>
											<!-- <audio src="<?php echo $vo['url']; ?>" controls="controls" class="audio_"></audio> -->
										</div>
										<div style="width: 500px;">
											<?php echo htmlspecialchars_decode($vo['remark'])?>
										</div>
										<p style="margin-top: 10px;font-size: 16px;color: #ddd;">上传者 <?php echo $vo['uper']; ?> 上传时间 <?php echo $vo['ctime']; ?></p>
										<div class="zan_div">
											<div class="info-box <?php echo $vo['ok']; ?>">
												<span class="info-box-icon dianzan" attr-id="<?php echo $vo['id']; ?>"><i class="fa fa-thumbs-o-up"></i></span>
												<input type="hidden" class="z_or_c" value="0" />
												<div class="info-box-content" style="width: 114px;">
													<span class="info-box-text">赞</span>
													<span class="info-box-number"><?php echo $vo['zan']; ?></span>
													<div class="progress">
														<div class="progress-bar" style="width: <?php echo $vo['percent']; ?>"></div>
													</div>
												</div>
												<span class="info-box-icon caicai" attr-id="<?php echo $vo['id']; ?>" style="position: absolute;right: 0px;top: 0px;"><i class="fa fa-thumbs-o-down"></i></span>
											</div>
										</div>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
								<div class="pagination"><?php echo $list->render(); ?></div>
							</div>
						</div>
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
	<script>
		$(".dianzan").click(function(){
		var id = $(this).attr("attr-id");
		var my = $(this);
		var z_or_c = my.siblings(".z_or_c").val();
		if(z_or_c == 0){
			//点赞
			zan_or_cai(my,"+1",1,"+","zan",id,'record');
		}else if(z_or_c == 1){
			//取消赞
			zan_or_cai(my,"-1",0,"-","zan",id,'record');
		}else if(z_or_c == 2){
			layer.tips("这条你已经踩了",my,{tips:1});
		}
	})
	//踩
	$(".caicai").click(function(){
		var id = $(this).attr("attr-id");
		var my = $(this);
		var z_or_c = my.siblings(".z_or_c").val();
		if(z_or_c == 0){
			//点踩
			zan_or_cai(my,"+1",2,"+","cai",id,'record');
		}else if(z_or_c == 2){
			//取消踩
			zan_or_cai(my,"-1",0,"-","cai",id,'record');
		}else if(z_or_c == 1){
			layer.tips("这条你已经赞了",my,{tips:1});
		}
	})
	</script>
</html>
