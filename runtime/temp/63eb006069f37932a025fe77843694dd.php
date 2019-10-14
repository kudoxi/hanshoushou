<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:104:"/data3/htdocs/hanshoushou.host.smartgslb.com/hanshou/public/../application/hanshou/view/test/jieguo.html";i:1558691713;}*/ ?>
<!DOCTYPE html>
<html  lang="zh_CN" data-wf-page="5ce5fb72d355ee2af9e08354" data-wf-site="5ce4bd78a62d23d76e6f3e37">
<head>
  <meta charset="utf-8">
  <title>测试结果页面</title>
  <meta content="测试结果页面" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <!--服务器加载路径的模式-->
  <link href="/hanshou/public//assets/test/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/hanshou/public//assets/test/css/scent.css" rel="stylesheet" type="text/css">
  <link href="/hanshou/public//assets/test/css/scentest.h5.css" rel="stylesheet" type="text/css">
  <!--<link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/scent.css" rel="stylesheet" type="text/css">
  <link href="css/scentest.h5.css" rel="stylesheet" type="text/css">-->
  	
  <!-- [if lt IE 9]><script src="js/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script></head>
<body>
  <div class="main jieguobg">
    <div class="daanqu jjieguoye">
      <div class="wx-touxiang"></div>
      <div class="wx-name">气味小酱</div>
      <div class="xiugeshi">
        <div>你的嗅觉人格是</div>
      </div>
      <div class="xiuge-jieguo">
        <div class="text-block">青小草</div>
      </div>
      <div class="leidatu">
        <div> </div>
        <div class="shuxing _1">坚韧</div>
        <div> </div>
        <div class="shuxing">积极</div>
        <div> </div>
        <div class="shuxing">坦率</div>
        <div id="w-node-0cbd65e7fdbf-f9e08354" class="shuxing">群居</div>
        <div> </div>
        <div id="w-node-34169a945d1a-f9e08354" class="shuxing">群居</div>
      </div>
      <div class="xiuge-biaoshu">
        <p>当和一群志同道合的伙伴在一起时，青草嗅格会产生不可思议的化学反应。</p>
        <p>多吃肉虽然可能会长肉，但这会让你拥有心情更愉快。</p>
        <p>不管多么不如意，你都会选择积极的去面对各种困难和挑战。</p>
      </div>
      <div class="erweima"><img src="_PUBLIC__/assets/test/images/erweima.png" width="280" srcset="_PUBLIC__/assets/test/images/erweima-p-500.png 500w, images/erweima.png 560w" sizes="259px" alt=""></div>
      <div class="logo"><img src="_PUBLIC__/assets/test/images/logo.png" width="184" alt=""></div>
    </div>
    <div class="fenxiang">
      <div>长按保存到手机相册，分享朋友圈</div>
      <a class="down" href="" download="downImg" style="display: none;">下载</a>
      <img src="" style="display: none;" class="imgcontain" />
    </div>
  </div>
  <!--服务器加载路径的模式-->
  <!-- integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="-->
  <script src="/hanshou/public//assets/test/js/jquery-3.3.1.min.js" type="text/javascript" crossorigin="anonymous"></script>
  <script src="/hanshou/public//assets/test/js/scenth5.js" type="text/javascript"></script>
  <script src="/hanshou/public//assets/test/js/jweixin-1.4.0.js" type="text/javascript"></script>
  <script src="/hanshou/public//assets/test/js/html2canvas.min.js" type="text/javascript"></script>
  <script src="/hanshou/public//assets/test/js/canvas2image.js" type="text/javascript"></script>
  
  <!--<script src="js/jquery-3.3.1.min.js" type="text/javascript" crossorigin="anonymous"></script>
  <script src="js/scenth5.js" type="text/javascript"></script>
  <script src="js/jweixin-1.4.0.js" type="text/javascript"></script>
  <script src="js/html2canvas.min.js" type="text/javascript"></script>
  <script src="js/canvas2image.js" type="text/javascript"></script>-->
  <script>
$(function(){
/*  		
	 		//wx获取参数-等接口
  		$.ajax({
  			type:"get",
  			url:"http://www.hanshoushou.com/hanshou/public/hanshou/index/test",
  			async:true,
  			dataType : "json",  
  			data:{'url':'http://www.hanshoushou.com/hanshou/public/hanshou/test/jieguo'},
  			success:function(res){
  				console.log(444444);
  				var obj = eval('(' + res + ')');
  				obj = eval('(' + obj + ')');
  				console.log(obj,typeof(obj));
  				console.log(obj['appId']);
  				console.log(obj['timestamp'])
  				console.log(obj['nonceStr'])
  				console.log(obj['signature'])
  				wx.config({
					    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
					    appId: obj['appId'], // 必填，公众号的唯一标识
					    timestamp: obj['timestamp'], // 必填，生成签名的时间戳
					    nonceStr: obj['nonceStr'], // 必填，生成签名的随机串
					    signature: obj['signature'],// 必填，签名
					    jsApiList: ['updateTimelineShareData','updateAppMessageShareData','onMenuShareAppMessage'] // 必填，需要使用的JS接口列表
					});
					wx.error(function (res) {
						console.log(res)
			        if(res.errMsg!='config.ok'){
			        		alert("signature:"+obj['signature'])
			            alert(res.errMsg);
			        }
			    });
			    wx.ready(function(){
      			console.log(22222);		
			    	//分享给朋友
	          wx.onMenuShareAppMessage({
		            title: '信息！', // 分享标题
		            desc: '描述', // 分享描述
		            link: 'www.hanshoushou.com', // 分享链接
		            imgUrl: 'https://xscenic.qiweiwangguo.com/miniprogram/icon-drogan-boat-share-icon.png', // 分享图标
		            type: 'link', // 分享类型,music、video或link，不填默认为link
		            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		            success: function () { 
		                alert('已分享');// 用户确认分享后执行的回调函数
		            },
		            cancel: function () { 
		                // 用户取消分享后执行的回调函数
		                alert('取消');
		            },
		            fail: function (res) {
		                alert(JSON.stringify(res));
		            }
		        });
			    });
					//这个新版的不知道为什么不生效
//					wx.ready(function(){
//						//自定义“分享给朋友”及“分享到QQ”按钮的分享内容
//						wx.updateAppMessageShareData({ 
//				        title: 'xxxxxxx', // 分享标题
//				        desc: 'aaaaaaa', // 分享描述
//				        link: 'http://www.hanshoushou.com', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
//				        imgUrl: "https://xscenic.qiweiwangguo.com/miniprogram/icon-drogan-boat-share-icon.png"//ROOT_DIR+'images/logo.png', // 分享图标
//				        success: function () {
//				          // 设置成功
//				        }
//				   });
//					});
					 
  			}
  		});*/
  		//长按保存图片
  		var fenxiang = document.querySelector('.fenxiang');
  		fenxiang.addEventListener('touchstart', function () {
			  startTime = +new Date()
			})
			fenxiang.addEventListener('touchend', function () {
			  endTime = +new Date()
			  var time_cha = endTime - startTime;
			  if ( time_cha > 700) {
			    // 处理点击事件
			    //转canvas 
			    var canvas = document.createElement("canvas"); //创建一个canvas节点
			    var orgin_w = $(".main").width();
					var orgin_h = $(".main").height();
					var scale = 2; //定义任意放大倍数 支持小数
					canvas.width = orgin_w * scale; //定义canvas 宽度 * 缩放
  				canvas.height = orgin_h * scale; //定义canvas高度 *缩放
  				//放大后再缩小提高清晰度
  				canvas.getContext("2d").scale(scale, scale);
  				// 设置html2canvas方法的配置
		      var opts = {
		        scale: scale, // 添加的scale 参数
		        canvas: canvas, //自定义 canvas
		        width: orgin_w, //dom 原始宽度
		        height: orgin_h,
		        //useCORS: true // 【重要】开启跨域配置 切记allowTaint和useCORS这两个参数不能共存
		        //allowTaint: true, //允许画布上有跨域图片 不建议使用 后面详细补充
		        // logging: true, //日志开关，便于查看html2canvas的内部执行流程
		      };
					html2canvas(document.querySelector(".main"),opts).then(function(canvas){
						var context = canvas.getContext('2d');
		        // 【重要】关闭抗锯齿
		        context.mozImageSmoothingEnabled = false;
		        context.webkitImageSmoothingEnabled = false;
		        context.msImageSmoothingEnabled = false;
		        context.imageSmoothingEnabled = false;
		        // 【重要】默认转化的格式为png,也可设置为其他格式 (不支持跨域)
		        //var img = Canvas2Image.saveAsPNG(canvas,true).getAttribute('src');
		        //saveFile(img, 'scenth5.png');
		        
		        
		         var imgUria = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"); // 获取生成的图片的url
		         console.log(imgUria)
						//$(".main").append(canvas);
					});
					
			  }
			});
			// 保存文件函数
			var saveFile = function(data, filename){
		    var save_link = document.createElementNS('http://www.w3.org/1999/xhtml', 'a');
		    save_link.href = data;
		    save_link.download = filename;
		   
		    var event = document.createEvent('MouseEvents');
		    event.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
		    save_link.dispatchEvent(event);
		 };
  	
})
  </script>
  <!-- [if lte IE 9]><script src="js/placeholders.min.js"></script><![endif] -->
</body>
</html>