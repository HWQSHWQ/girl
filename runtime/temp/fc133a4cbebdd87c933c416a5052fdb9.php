<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"D:\work\tp\public/../application/index\view\game\index.html";i:1552549484;s:45:"D:\work\tp\application\index\view\header.html";i:1552464527;s:45:"D:\work\tp\application\index\view\footer.html";i:1552464611;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit"><!-- 360开启急速模式！-->
    <link rel="stylesheet" href="/uikit/css/uikit.min.css" />
	
</head>
<body>
<script  type="text/javascript" src="/uikit/js/jquery.min.js"></script>
<script  type="text/javascript" src="/uikit/js/uikit.min.js"></script>
<style>
    .mainimg img{height:55px;width: 165px}
	.header-img img{height:90%;width:100%}
	.cooper-img img{width:100%}
	
</style>

<!--导航栏-->
<div style="">


</div>

<!--为导航给选定样式-->
<script>
	 $("li.<?php echo $action; ?>").addClass('uk-active');
</script>


<link rel="stylesheet" href="/time/css/history.css" />
<link rel="stylesheet" href="/uikit/css/components/slideshow.css" />
<link rel="stylesheet" href="/uikit/css/components/dotnav.css" />
<link rel="stylesheet" href="/uikit/css/components/slidenav.css" />
<link rel="stylesheet" href="/uikit/css/components/slider.css" />

<script  type="text/javascript" src="/uikit/js/components/slideshow.js"></script>
<script  type="text/javascript" src="/uikit/js/components/slider.js"></script>
<script  type="text/javascript" src="/time/js/main.js"></script>
 
<div style="margin-top:20px;"  class="uk-grid">
	<div class="uk-slidenav-position uk-width-1-6"></div>
	<div class="uk-slidenav-position uk-width-4-6 " >
	
		<div class="uk-grid showmoney">
			<div class="uk-width-5-6">
				<a src href="/index.php/index/index/game1"><img  id = "op" class="click_money" src="/pic/1/1.jpg" width="" height="" alt="">  </a>
			</div>
			<div class="uk-width-5-6">
			<p>清纯小美女，美美哒</p>
			</div>			
		</div>
		
		<div class="uk-grid showmoney">
			<div class="uk-width-5-6">
				<a src href="/index.php/index/index/game2"><img  id = "op" class="click_money" src="/pic/1/2.jpg" width="" height="" alt="">  </a>
			</div>
			<div class="uk-width-5-6">
				<p>美女尤物 君子爱之 </p>
			</div>			
		</div>
		
		<div class="uk-grid showmoney">
			<div class="uk-width-5-6">
				<a src href="/index.php/index/index/game3"><img  id = "op" class="click_money" src="/pic/1/3.jpg" width="" height="" alt="">  </a>
			</div>
			<div class="uk-width-5-6">
				<p>寂寞少妇 </p> 
			</div>			
		</div>
		
		
		

	</div>
	<div class="uk-slidenav-position uk-width-1-6"></div>
</div>	

<script>
	$(".showmoney").click(function(){
		
	});
	
 
	
</script>




<div class="footer uk-block uk-block-primary uk-contrast " style="background-color: white">
   
</div>

</body>
</html>