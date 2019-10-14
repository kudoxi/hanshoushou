<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:106:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/public/../application/hanshou/view/index/chatbox.html";i:1521379091;s:94:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/application/hanshou/view/public/head.html";i:1560131680;}*/ ?>
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
	.look,.dontlook{
		cursor: pointer;
	}
</style>
</head>
<!-- Construct the box with style you want. Here we are using box-danger -->
<!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
<!-- The contextual class should match the box, so we are using direct-chat-danger -->
<body style="padding: 0px;">
<div class="box box-primary direct-chat direct-chat-primary">
  	<div class="box-header with-border">
	    <h3 class="box-title">这是对话框</h3>
	    <div class="box-tools pull-right">
	      <!--<span data-toggle="tooltip" title="3 New Messages" class="badge bg-red">3</span>-->
	      <!--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
	      <!-- In box-tools add this button if you intend to use the contacts pane -->
	      <!--<button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>-->
	      <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
	    </div>
	</div><!-- /.box-header -->
  	<div class="box-body">
    <!-- Conversations are loaded here -->
    	<div class="direct-chat-messages">
      	<!-- Message. Default to the left -->
      		<!--<div class="direct-chat-msg">
		        <div class="direct-chat-info clearfix">
		          <span class="direct-chat-name pull-left">我</span>
		          <span class="direct-chat-timestamp pull-right"><?php echo date('Y-m-d H:i:s'); ?></span>
		        </div>
        		<img class="direct-chat-img" src="/hanshou/public//assets/img/mmexport1516527927135.jpg" alt="message user image">
		        <div class="direct-chat-text">
		          	打扰了，有人让我把信交给一个猪蹄子
		        </div>
      		</div>
			<div class="direct-chat-msg">
		        <div class="direct-chat-info clearfix">
		          <span class="direct-chat-name pull-left">我</span>
		          <span class="direct-chat-timestamp pull-right"><?php echo date('Y-m-d H:i:s'); ?></span>
		        </div>
        		<img class="direct-chat-img" src="/hanshou/public//assets/img/mmexport1516527927135.jpg" alt="message user image">
		        <div class="direct-chat-text">
		          	但是我是一个机器人，没法分辨谁是这个猪蹄子，所以能告诉我，你的名字吗？
		        </div>
      		</div>-->
      		<!-- Message to the right 
      		<div class="direct-chat-msg right">
        		<div class="direct-chat-info clearfix">
          			<span class="direct-chat-name pull-right">我</span>
          			<span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
        		</div>
        		<img class="direct-chat-img" src="/hanshou/public//assets/img/mmexport1518176423879.jpg" alt="message user image">
		        <div class="direct-chat-text">
		          aaa 
		        </div>
      		</div>-->
		</div>

    	<!-- Contacts are loaded here -->
	    <!--<div class="direct-chat-contacts">
	      	<ul class="contacts-list">
	        <li>
	          	<a href="#">
	           	 	<img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="Contact Avatar">
		            <div class="contacts-list-info">
		              <span class="contacts-list-name">
		                		我
		                <small class="contacts-list-date pull-right">2/28/2015</small>
		              </span>
		              <span class="contacts-list-msg">How have you been? I was...</span>
		            </div>
	          	</a>
	        </li>
	      </ul>
	    </div>-->
  	</div><!-- /.box-body -->
  	<div class="box-footer">
    	<div class="input-group">
      		<input type="text" name="message" placeholder="请输入你的名字 ..." class="form-control your_name">
      		<span class="input-group-btn">
        		<button class="btn btn-primary btn-flat send_mess">发送</button>
        		<input type="hidden" class="canasw" value="0"/>
      		</span>
    	</div>
  	</div><!-- /.box-footer-->
</div><!--/.direct-chat -->
<script>
	$(function(){
		var need_wait = <?php echo $need_wait;?>//已经等到了
		if(need_wait == 0){
			setTimeout(function(){
				alert_mes("我是看大门的机器人");
			},1000);
			setTimeout(function(){
				alert_mes("告诉我你的名字才能进去");
				$(".canasw").val(1);
			},3000);
		}else{
			setTimeout(function(){
				alert_mes("打扰了，主人让我在这等一个人");
			},1000);
			setTimeout(function(){
				alert_mes("但是我只知道ta的名字");
			},4000);
			setTimeout(function(){
				alert_mes("所以能告诉我，你的名字吗？");
				$(".canasw").val(1);
			},6000);
		}
		
	})
	$(".send_mess").click(function(){
		send_message();
	})
	$('.your_name').keydown(function(event){ 
		if(event.keyCode == 13){
			send_message();
		}
	})
	$("body").on("click",".look",function(){
		look_or_not(1);
	})
	$("body").on("click",".dontlook",function(){
		look_or_not(0);
	})
	function send_message(){
		if($(".canasw").val() == 0){
			return;
		}
		var your_name = $(".your_name").val();
		your_name = $.trim(your_name);
		if(your_name == ""){
			setTimeout(function(){alert_mes("你发了啥？");},1000);
		}else{
			answer(your_name);
			$(".your_name").val("");
			$.ajax({
				type:"post",
				url:"<?php echo url('hanshou/index/checkname'); ?>",
				async:false,
				data:{name : your_name},
				success:function(data){
					if(data['0'] == "104"){
						setTimeout(function(){alert_mes(data[1]);},2000);
					}else if(data['0'] == "100"){
						setTimeout(function(){alert_mes(data[1]);},2000);
						setTimeout(function(){alert_mes('主人有封情书要给你');},4000)
						setTimeout(function(){alert_mes('现在就看吗?');},6000)
						setTimeout(function(){
							var mes = '<a class="look">看</a>'+
							' or <a class="dontlook">不看</a>';
							alert_mes(mes);
						},8000)
					}else{
						setTimeout(function(){alert_mes(data[1]);},2000);
						setTimeout(function(){
							var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
							parent.layer.close(index); //再执行关闭  
						},4000);
					}
				}
			});
		}
	}
	function look_or_not(is_look){
		$.ajax({
			type:"post",
			url:"<?php echo url('hanshou/index/lookornot'); ?>",
			async:false,
			data:{look : is_look},
			success:function(data){
				var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
				parent.layer.close(index); //再执行关闭  
			}
		});
	}
	function answer(message){
		var myDate = new Date();
		var now_time = myDate.toLocaleTimeString();
		var mes = '<div class="direct-chat-msg right">'
		           		+'<div class="direct-chat-info clearfix">'
		          		+'<span class="direct-chat-name pull-right">我</span>'
		            +'<span class="direct-chat-timestamp pull-left">'+now_time+'</span>'
		        	+'</div>'
		        	+'<img class="direct-chat-img" src="/hanshou/public//assets/img/mmexport1518176423879.jpg" alt="message user image">'
        			+'<div class="direct-chat-text">'
		        	+message
		        	+'</div></div>';
		$(".direct-chat-messages").append(mes);
		var el_height = $('.direct-chat-messages')[0].scrollHeight;
		$('.direct-chat-messages').scrollTop(el_height);
	}
	function alert_mes(message){
		var myDate = new Date();
		var now_time = myDate.toLocaleTimeString();
		var mes = '<div class="direct-chat-msg">'
		           		+'<div class="direct-chat-info clearfix">'
		          		+'<span class="direct-chat-name pull-left">我是机器人</span>'
		            +'<span class="direct-chat-timestamp pull-right">'+now_time+'</span>'
		        	+'</div>'
		        	+'<img class="direct-chat-img" src="/hanshou/public//assets/img/mmexport1516527927135.jpg" alt="message user image">'
        			+'<div class="direct-chat-text">'
		        	+message
		        	+'</div></div>';
		$(".direct-chat-messages").append(mes);
		var el_height = $('.direct-chat-messages')[0].scrollHeight;
		$('.direct-chat-messages').scrollTop(el_height);
	}
</script>
</body>
</html>