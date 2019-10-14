<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"D:\UPUPW_AP7.0\htdocs\hanshou\public/../application/hanshou\view\index\index.html";i:1571031113;s:71:"D:\UPUPW_AP7.0\htdocs\hanshou\application\hanshou\view\public\head.html";i:1571016990;}*/ ?>

<title>这是首页</title>
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
	.index_content{
		width: 800px;
		margin: 0 auto;
		height:300px;
		position: relative;
		text-align: center;
	}
	.index_img{
	    position: absolute;
	    margin-left: -43px;
	}
	.index_btn{
		background-image: url('/hanshou/public//assets/img/anniu_beijing.png');
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translateY(-50%);
	}
</style>
</head>
<body>
	<div class="index_content">
		<!-- <img class="index_img" src="/hanshou/public//assets/img/chahua2.png" />
		<img src="/hanshou/public//assets/img/title.png" /> -->
		<button style="width: 200px;margin: 0 auto;font-weight: bold;" class="btn btn-block btn-info btn-lg index_btn entrance">入口</button>
	</div>


<script type="text/javascript" src="/hanshou/public//assets/js/jquery-3.3.1.min.js" ></script>
</body>
<script>
var check = '<?php echo $is_login;?>';//没登陆

$(".entrance").click(function(){
	if(check == 0){
		layer.ready(function(){ 
			layer.open({
			    	type: 2,
			    	title: '寻人启事',
			    	maxmin: true,
			    	area: ['800px', '450px'],
			    	content: "<?php echo url('hanshou/index/chatbox'); ?>",
			    	end: function(){
			    		$.ajax({
			    			type:"get",
			    			url:"<?php echo url('hanshou/index/lookornot'); ?>",
			    			async:true,
			    			success:function(data){
			    				if(data[0] == '101' && data[1] == 0){
			    					window.location.href = "<?php echo url('hanshou/vocabulary/vocabulary'); ?>";
			    				}else if(data[0] == '101' && data[1] == 1){
			    					window.location.href = "<?php echo url('hanshou/letter/letter'); ?>";//信件页面
			    				}else{
			    					layer.msg(data[1]);
			    				}
			    			}
			    		});
			    	}
			  	});
			});
	}else{
		window.location.href = "<?php echo url('hanshou/vocabulary/vocabulary'); ?>";
	}
})
</script>
</html>
