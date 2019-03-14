<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\work\tp\public/../application/index\view\company\index.html";i:1545894120;s:45:"D:\work\tp\application\index\view\header.html";i:1552464527;s:45:"D:\work\tp\application\index\view\footer.html";i:1552464611;}*/ ?>
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

<div style="" class="uk-slidenav-position" data-uk-slideshow="">
    <ul class="uk-slideshow " style="height: auto">
		<li>
			<img src="/pic/company.png" width="" height="" alt="">       
        </li>  
    </ul>
</div>



<div style="margin-top:20px;"  class="uk-grid">
	<div class="uk-slidenav-position uk-width-1-6"></div>
	<div class="uk-slidenav-position uk-width-4-6" >
		<ul class="uk-tab" data-uk-tab>
			<li class="uk-active"><a onclick="javascript:addRecord(1)">企业介绍</a></li>
			<li><a onclick="javascript:addRecord(2)" >企业文化</a></li>
			<li><a onclick="javascript:addRecord(3)" >发展历程</a></li>
			<li><a onclick="javascript:addRecord(4)" >团队剪影</a></li>
		</ul>
	</div>
	<div class="uk-slidenav-position uk-width-1-6"></div>	
</div>

<div style="margin-top:15px;"  class="uk-grid">
	<div class="uk-slidenav-position uk-width-1-6"></div>
	<div class="uk-slidenav-position uk-width-4-6" >
		<!--企业介绍 -->
		<div id="id_1" class="uk-slider-container" style="display:block">
			<img src="/pic/company_culture.png" width="" height="" alt=""> 
			<div style="margin-top:10px">
				<article class="uk-article">
					<div class="uk-grid"> 
						<div class="uk-slidenav-position uk-width-2-5"></div>
						<span class="uk-text-large ">公司简介</span>
					</div>
					<p class="uk-article-meta">
						余从京域，言归东藩，背伊阙 ，越轘辕，经通谷，陵景山。日既西倾，车殆马烦。尔乃税驾乎蘅皋，秣驷乎芝田，容与乎阳林，流眄乎洛川。于是精移神骇，忽焉思散。俯则未察，仰以殊观。睹一丽人，于岩之畔。乃援御者而告之曰：“尔有觌于彼者乎？彼何人斯，若此之艳也！”御者对曰：“臣闻河洛之神，名曰宓妃。然则君王所见，无乃是乎？其状若何，臣愿闻之。”
					</p>
				</article>
			</div>	
		</div>
		
		<!--企业文化 -->
		<div id="id_2" class="uk-slider-container" style="display:none">
			<img src="/pic/company_culture.png" width="" height="" alt=""> 
			<div style="">
				<article class="uk-article">
					<p class="uk-article-meta">
						余从京域，言归东藩，背伊阙 ，越轘辕，经通谷，陵景山。日既西倾，车殆马烦。尔乃税驾乎蘅皋，秣驷乎芝田，容与乎阳林，流眄乎洛川。于是精移神骇，忽焉思散。俯则未察，仰以殊观。睹一丽人，于岩之畔。乃援御者而告之曰：“尔有觌于彼者乎？彼何人斯，若此之艳也！”御者对曰：“臣闻河洛之神，名曰宓妃。然则君王所见，无乃是乎？其状若何，臣愿闻之。”
					</p>
				</article>
			</div>	
			<div style="margin-top:10px">
				<img src="/pic/company_culture.png" width="" height="" alt=""> 
				<div style="">
					<article class="uk-article">
						<p class="uk-article-meta">
							余从京域，言归东藩，背伊阙 ，越轘辕，经通谷，陵景山。日既西倾，车殆马烦。尔乃税驾乎蘅皋，秣驷乎芝田，容与乎阳林，流眄乎洛川。于是精移神骇，忽焉思散。俯则未察，仰以殊观。睹一丽人，于岩之畔。乃援御者而告之曰：“尔有觌于彼者乎？彼何人斯，若此之艳也！”御者对曰：“臣闻河洛之神，名曰宓妃。然则君王所见，无乃是乎？其状若何，臣愿闻之。”
						</p>
					</article>
				</div>
			</div>		
		</div>
		
		<!--发展历程-->
		<div id="id_3" class="uk-slider-container" style="display:none">
			<div class="main">
			  <div class="history" >
				<div class="history-date">
				  <ul>
					<li></li>
				   <li>
					 <h3>07.19<span>2012</span></h3>
					  <dl>
						<dt>升级极速内核到20.0
						<span>HTML5支持度全球最好，达到469分，测试页面： </span>
						</dt>
					  </dl>
					</li>

					 <li>
					  <h3>07.02<span>2012</span></h3>
					  <dl>
						<dt>升级极速内核到19.0
							<span>支持网络摄像头，浏览器可直接访问摄像头</span>
						</dt>
					  </dl>
					</li>

				   <li class="green">
					  <h3>06.27<span>2012</span></h3>
					  <dl>
						<dt>
							<span>大力推广HTML5</span>
						</dt>
					   </dl>
					</li>
					<li>
					  <h3>06.15<span>2012</span></h3>
					  <dl>
						<dt>新增了下载文件前扫描下载链接安全性的功能</dt>
					  </dl>
					</li>
					<li>
					  <h3>06.05<span>2012</span></h3>
					  <dl>
						<dt>W3C联盟首席执行官访华，首站访问360公司
						</dt>
					  </dl>
					</li>
					<li>
					  <h3>05.12<span>2012</span></h3>
					  <dl>
						<dt>360受邀出席W3C联盟成员见面会议</dt>
					  </dl>
					</li>
					<li>
					  <h3>05.11<span>2012</span></h3>
					  <dl>
						<dt>升级极速内核到18.0
							<span><p>新增多用户使用浏览器的功能</p></span>
						</dt>
					  </dl>
					</li>
					<li>
					  <h3>05.03<span>2012</span></h3>
					  <dl>
						<dt>360极速浏览器用户数突破5000万，活跃用户超2000万
						</dt>
					  </dl>
					</li>
					<li>
					  <h3>03.08<span>2012</span></h3>
					  <dl>
						<dt>升级极速内核到17.0，提升浏览器速度、增强安全性
							<span>新增HTTP管线化技术，大幅提升网页加载速度</span>
						</dt>
					  </dl>
					</li>
					<li>
					  <h3>01.29<span>2012</span></h3>
					  <dl>
						<dt>国内率先加入W3C联盟HTML工作组，参与HTML5标准制定</span></dt>
					  </dl>
					</li>
				  </ul>
				  </div>
				</div>
			</div>
		</div>
		
		<!--团队剪影 -->
		<div id="id_4" class="uk-slider-container" style="display:none">
			<img src="/pic/company_culture.png" width="" height="" alt=""> 
			<div style="">
				<article class="uk-article">
					<p class="uk-article-meta">
						余从京域，言归东藩，背伊阙 ，越轘辕，经通谷，陵景山。日既西倾，车殆马烦。尔乃税驾乎蘅皋，秣驷乎芝田，容与乎阳林，流眄乎洛川。于是精移神骇，忽焉思散。俯则未察，仰以殊观。睹一丽人，于岩之畔。乃援御者而告之曰：“尔有觌于彼者乎？彼何人斯，若此之艳也！”御者对曰：“臣闻河洛之神，名曰宓妃。然则君王所见，无乃是乎？其状若何，臣愿闻之。”
					</p>
				</article>
			</div>	
			<div style="margin-top:10px">
				<img src="/pic/company_culture.png" width="" height="" alt=""> 
				<div style="">
					<article class="uk-article">
						<p class="uk-article-meta">
							余从京域，言归东藩，背伊阙 ，越轘辕，经通谷，陵景山。日既西倾，车殆马烦。尔乃税驾乎蘅皋，秣驷乎芝田，容与乎阳林，流眄乎洛川。于是精移神骇，忽焉思散。俯则未察，仰以殊观。睹一丽人，于岩之畔。乃援御者而告之曰：“尔有觌于彼者乎？彼何人斯，若此之艳也！”御者对曰：“臣闻河洛之神，名曰宓妃。然则君王所见，无乃是乎？其状若何，臣愿闻之。”
						</p>
					</article>
				</div>
			</div>		
		</div>
		
		
	</div>
	<div class="uk-slidenav-position uk-width-1-6"></div>	
</div>	


<script>
	var addRecord = function(j){
		var i;
		for(i=1;i<=4;i++) {
			if(i == j){$("#id_"+j).show();}
			else $("#id_"+i).hide();
		}
		if(j == 3) {$(".history").css({"height":"700px","margin-left":"-100px"})};
	}
	
</script>



<div class="footer uk-block uk-block-primary uk-contrast " style="background-color: white">
   
</div>

</body>
</html>