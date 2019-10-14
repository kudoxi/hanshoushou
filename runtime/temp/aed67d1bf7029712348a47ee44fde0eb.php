<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:106:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/public/../application/hanshou/view/letter/letter.html";i:1522597502;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/head.html";i:1521373495;s:96:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/header.html";i:1521373495;s:97:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/sidebar.html";i:1521373495;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/foot.html";i:1521373495;}*/ ?>
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

<style>
	.content p{
		text-indent: 32px;
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
</script>
			<aside class="main-sidebar" style="padding-top: 0px;">
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
			        	<h3 class="box-title">给阿韩的一封情书</h3>
			        </div>
			        <div class="box-body content" style="padding: 20px 50px;">
			        	<p style="color: #ddd;font-style: italic;">————不知道你看到这封信的时候，我们是否都能相信爱情。</p>
			        	<p>这是第几次修改这封信了，又熬过了一个月。</p>
			        	<p>每时每刻，只要停下来都会想到你，会想你在干嘛，想你现在又有谁在陪，会想在那个独自度过的跨年夜里你会不会有一点点地不适，是因为我不在。不止一次埋怨自己，当时的负气真不是时候，但又一遍又一遍地用事实残忍地告诫自己或许是绝佳的离开你的机会。</p>
			        	<p>多少次看着你的头像却不敢点开，害怕自己控制不住去找你，只有不停地让事情占据我的大脑，不停地学习，工作，玩乐，假装自己是个无忧无虑，洒脱自然的人，假装自己毫不在意，假装自己正在学会放下，正在遗忘。
					因为不知道到底还要多久我才能摆脱这种状态，我能做的只有欺骗自己，但与此同时，我又清楚地知道我在欺骗自己。
			        	</p>
			        	<p>我像是被放在烤架上的鱼，闭不上眼睛，躺在那喊不出声音，眼睁睁地看着自己从内到外在被一点点耗干，一点点失去希望。</p>
			        	<p>爱情这种东西果然虚无缥缈又徒增伤害，我不想再碰它一分，一毫。</p>
			        	<hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="80%" color=#987cb9 SIZE=3/>
			        	<p>和你聊第一句话的时候是在群里，我还认不清谁是谁，大家都还匿着名放肆开车，鬼知道后来我会喜欢上你。</p>
			        	<p>那时只是怀着对新事物的期盼和第一次接触同类的好奇，我尝试和一群陌生人聊起天南地北。直到你描绘奶奶家山间的风景时候，我才记住你的名字，阿韩。</p>
		        		<p>之后你每次匿名我都能一眼看穿（骄！傲！）。第一次揭穿，第二次暗示，然后看你炸毛地索性裸聊。</p>
		        		<p>莫名愉悦（后来就收敛多了，怕再揭穿你会觉得没意思）。</p>
		        		<p>而后你开车，我推车的时候（是的，比起坐拥<span style="color:	#FFE153">众图</span>的闷骚的你，我只能算个推车的），我想，这人或许可以做朋友（把图套过来什么的从来没想过，我不是，我没有，别乱说）。</p>
			        	<p>几个月过去，不知不觉，万年潜水党居然也跟着你们聊成了江湖传说。后来发生了各种各样的事，现在想起来却已经很遥远。</p>
			        	<p>不知从什么时候开始变质，哪天没和你聊天心里就像缺了一块，心神不宁，我以为是习惯使然。</p>
			        	<p>至今我也不想说出喜欢你的理由，或者说羞于承认那个原因。因为实在是，太羞耻了！简直不像我自己！从来都是我清醒地开解朋友的心结，换作她们中的哪个人因为这个理由喜欢上谁，我肯定会:“你清醒一点！
			        		<span style="text-decoration: line-through;">蚂蚁竞走十年了！</span>”。
			        	</p>
			        	<p>虽然很羞耻，虽然你不一定会care，不过反正在你面前我也不需要脸皮，而且是最后一次了，就告诉你吧。</p>
			        	<p>还记得我曾发过的“贤妻良母”女武神在深夜缝补的截图吗。</p>
			        	<p>黑夜中只看得到“我们”俩人，“我”躺在帐篷里，旁边那个人絮絮叨叨，操心又温暖地说着明天的打算，让我突然有了一种可以依靠、安心的感觉。这种感觉在之前从未有过，我当时单单想的是，想要这样和你过一辈子。
			        		（朋友目瞪口呆地问我是不是恋母情结？？？当然不可能！因为，<span style="color: #4F4F4F;">因为，</span><span style="color:#5B5B5B">因为</span>
			        		<span style="color:#9D9D9D">会有</span><span style="color:#d0d0d0">那情啥</span><span style="color:#E0E0E0">欲</span>...），
			        	</p>
			        	<p>虽然那只是其中很小的日常，但是就像燎原之火在我心里蔓延开，如果说之前对你还是朦胧的好感，那么那次我真的感受到了喜欢。</p>
			        	<p>即使曾经面对直女时，我也一直处于患得患失的不安里，但是面对你却能全然信任。这种信任让我敢于把自己对你的想法和盘托出，把我的一切摊开在你面前，失去理智般把弱点暴露无遗——当然，弱点就是你。</p>
			        	<p>你本可以对我予取予求（自立自尊的你不会，因为对你来说我是别人，是不可以相欠的人），发生在你身上的所有事对我来说都是重要的事，
			        		只要想到别人也曾遇到过，或正在遇到，或将要遇到这样温柔的你，我就会产生强烈的妒意，这让我更加想要参与进你的生活。
			        		可我就像游戏里向你伸手拥抱的那个路人甲，面对这样的人，你能保持善意，却无法感同身受，无法回应，这不是你的问题，却让我感到无力，
			        		我做的一切都像精卫填海。
			        	</p>
			        	<p>中途几次我都想逃避这个水月镜花的开始，带来的注定没有结果的结局（是，我从一开始就知道我们之间就像热水浇花，热水控制不住温度，花也无辜，我们是单纯的不合适），
			        		但即使我全部都知道，知道流水有意，知道落花无情，也依然会沉溺在分享彼此生活的梦境里，骗自己顺其自然，想着就这样陪着吧，陪到你有了另一半，把所有的选择权都交给你。
			        	</p>
			        	<p>但是不想得到回报的人注定得不到回抱，没抱希望的人怎么都会失望。</p>
			        	<p>我终于发现自己的一意孤行和自作多情只会让你觉得有所负担。我给的都是你不要的，我自作主张的喜欢除了只能产生隔阂外，一无是处。</p>
			        	<p>我想要抽身，在你对我感到厌烦之前，即使成为陌生人也好。但这需要未知的时间。所幸痛苦的只有我。</p>
			        	<p>所以我们开始变得陌生。</p>
			        	<p>安静的开始，我每天都不停地给自己安排事情，学习，玩游戏，出游，可一到停下来的时刻就会思考为什么。</p>
			        	<p>“为什么？” “什么为什么？” 大脑一直在不耐烦地自言自语，像是陷进了一种混沌。谁能知道一脸平静地坐在沐浴阳光的桌前安静的我，却被潮水般的绝望淹没，只要想到“再无瓜葛”四个字，胸口就作痛到快要窒息。</p>
			        	<p>我在想的问题没有题目，也就得不到答案。</p>
			        	<p>我想了很久，还是很想你。你是题目，也是答案，但是我不能改变你，也不想。</p>
			        	<p>我感觉自己就像快要爆发的火山，想用xmind画思维导图，想用processon清理逻辑思路，想要尝试所有办法只要能不再去想你，但是我像个废物停滞不前，既不能靠近你，也不能离开你，我根本什么都做不到。</p>
			        	<p>终于在一个寻常的下午，办公桌前的我突然魔怔，“我是白痴吗？！”</p>
			        	<p>脱口而出的一句话让一切变得清晰。</p>
			        	<p>这个答案可以解释我所有反常无理的行为。</p>
			        	<p>因为我是白痴，我会喜欢一个素未谋面的陌生人；</p>
			        	<p>因为我是白痴，我会为这个人的一句话高兴难过；</p>
			        	<p>因为我是白痴，我会像幼稚中学生因为游戏吃醋；</p>
			        	<p>因为我是白痴，我会一直自导自演地喜欢这个人；</p>
			        	<p>即使以后我的生活里不再有你，即使我狼狈不堪又踌躇不前，这个答案都可以让我坦然地面对自己：“别烦了，谁教这个大脑的主人是个白痴”。</p>
			        	<p>现在这个白痴终于等到你心血来潮地故地重游，总算能把憋了很久的话说出来了。</p>
			        	<p>即使是我心思细腻的朋友听我所述，也觉得我是傻子。曾经心大如你，这些话我就一直都不敢开口，怕说了你不仅不会理解反而当我神经病，或者自觉无法回应而逃离我，毕竟连我自己都嫌弃这样完全失去自我的自己。</p>
			        	<p>只是不知道现在的你能不能理解了。不能理解也好，毕竟能理解白痴的人，就要经历白痴的经历，而我只希望你能遇到一个喜欢你，你也喜欢的人，顺顺利利地在一起。</p>
			        	<p>（第一次写这种东西写就要道别，我果然是非酋）</p>
			        	<p>到最后就想说声谢谢你，和你在一起的时候我真的很开心。希望未来的你能一直坚持自己的目标，把握住自己的人生，最后一次:加油。</p>
			        	<div style="text-align: right;padding: 20px 0px;margin-bottom: 20px;">
			        		2018-03-17 扣攻
			        	</div>
			        </div>
				</div>
			</div>
		</div>
		

		<style>
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
		<script>
			$(".check_out").click(function(){
				var to_href = $(this).attr("attr-href");
				layer.open({
			    	type: 2,
			    	title: 'emmmmmm',
			    	maxmin: true,
			    	area: ['400px', '250px'],
			    	content: "<?php echo url('hanshou/letter/check_out'); ?>",
			    	end: function(){
			    		window.location.href = to_href;
			    	}
			   })
			})
		</script>
	</body>
</html>
