<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($configs["title"]); ?></title>
<meta name="keywords" content="<?php echo ($configs["keywords"]); ?>">
<meta name="description" content="<?php echo ($configs["description"]); ?>">
<script type="text/javascript" async src="/GodZmooc/Public/Home/js/ga.js"></script>
<script type="text/javascript" src="/GodZmooc/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/GodZmooc/Public/Home/js/course_list.js"></script>

<link href="/GodZmooc/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/GodZmooc/Public/Home/css/course_list.css" type="text/css" rel="stylesheet">

<!--微专业major css/js-->
<script src="/GodZmooc/Public/Home/js/SpryAssets/SpryDOMUtils.js" type="text/javascript"></script>
<script src="/GodZmooc/Public/Home/js/major_small.js" type="text/javascript"></script>
<link href="/GodZmooc/Public/Home/css/major_small.css" type="text/css" rel="stylesheet">

<!--计算机专业 css/js-->
<script src="/GodZmooc/Public/Home/js/major_inter.js" type="text/javascript"></script>
<link href="/GodZmooc/Public/Home/css/major_inter.css" type="text/css" rel="stylesheet">

<!--互联网职业技能 css/js-->
<script src="/GodZmooc/Public/Home/js/major_skill.js" type="text/javascript"></script>
<link href="/GodZmooc/Public/Home/css/major_skill.css" type="text/css" rel="stylesheet">

<!--金融专业 css/js-->
<script src="/GodZmooc/Public/Home/js/major_money.js" type="text/javascript"></script>
<script src="/GodZmooc/Public/Home/js/specialWebCommon.js" type="text/javascript"></script>
<link href="/GodZmooc/Public/Home/css/major_money.css" type="text/css" rel="stylesheet">

<!--联系我们 css-->
<link href="/GodZmooc/Public/Home/css/advice/advice.css" type="text/css" rel="stylesheet">
<link href="/GodZmooc/Public/Home/css/advice/core.css" type="text/css" rel="stylesheet">

<!--退出登录 css/js-->
<script src="/GodZmooc/Public/Home/js/loginout.js" type="text/javascript"></script>
<link href="/GodZmooc/Public/Home/css/loginout.css" type="text/css" rel="stylesheet"></head>

<!--个人中心personal css/js-->
<script src="/GodZmooc/Public/Home/js/personalcenter.js" type="text/javascript"></script>
<link href="/GodZmooc/Public/Home/css/personalcenter.css" type="text/css" rel="stylesheet">

<!--下载页download css/js-->
<link href="/GodZmooc/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/GodZmooc/Public/Home/css/download/download.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="/GodZmooc/Public/Home/css/download/b5m-plugin.css" type="text/css">
<link rel="stylesheet" href="/GodZmooc/Public/Home/css/download/b5m.botOrTopBanner.css" type="text/css">

<!--广告information css/js-->
<script src="/GodZmooc/Public/Home/js/information.js" type="text/javascript"></script>
<link href="/GodZmooc/Public/Home/css/information.css" type="text/css" rel="stylesheet">

</head>
<body id="find" class="auto-1449466894298-parent" style="padding-top: 60px;">
<div class="f-pf g-headwrap" id="j-fixed-head">
  <div id="j-appbanner" class="u-appbannerwrap"></div>
  <div class="g-hd f-bg1 m-yktNav " id="j-topnav" style="background:#2F3440">
    <div class="g-flow">
      <div class="f-pr f-cb">
        <div class="m-logo f-cb"> <a class="f-fl" hidefocus="true" href="/GodZmooc/index.php" target="_self" data-index="GodZmooclogo"> <img class="f-fl img" src="/GodZmooc/Public/Home/imgs/logo3.png" title="GodZmooc" width="153" height="28"> </a> </div>
        <div class="u-navcatebtn"> <a href="" target="_blank" class="cbtn" id="j-nav-catebtn"></a> </div>
        <div class="m-navrgt f-fr f-cb f-pr j-navright">
          <div class="userinfo f-fr f-cb f-pr">
		  <?php if($_SESSION["id"] == null): ?><div class="unlogin f-fr">
				<a href="/GodZmooc/index.php/login/index.html" class="j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a>
			</div><?php endif; ?>
          </div>

          <div class="nav-search u-navsearchUI j-searchP">
            <div class="box off j-search f-cb" onmouseover="this.style.background='white'" onmouseout="this.style.background='#5C5F68'" style="right:200px;" >
              <div class="submit j-submit f-hide f-fl" id="auto-id-1449466894323">搜索课程、计划或用户</div>
              <input  type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466894329">
            </div>
            <div class="j-suggest u-navsearchsug"></div>
          </div>
		  
		 <?php if($_SESSION["id"] != null): ?><div id="login">
			<div><a href="<?php echo ($_SESSION["id"]); ?>">消息</a></div>
			<div><a href="<?php echo ($_SESSION["id"]); ?>">课程包</a></div>
			<img src="/GodZmooc/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>
			<div id="login1">
				<div><a href="/GodZmooc/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($_SESSION["username"]); ?></a></div>
				<div><a href="/GodZmooc/index.php/Detail/personalCenter/id/<?php echo ($_SESSION["id"]); ?>">个人主页</a></div>
				<div><a href="/GodZmooc/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>">反馈意见</a></div>
				<div><a href="/GodZmooc/index.php/Detail/index/id/<?php echo ($_SESSION["id"]); ?>">设置</a></div>
				<div><a href="/GodZmooc/index.php/Index/logout/id/<?php echo ($_SESSION["id"]); ?>">退出</a></div>
			</div>
		 </div><?php endif; ?>

        </div>
        <div class="m-nav f-cb j-navFind"> <a data-index="首页" class="nitem" href="/GodZmooc/index.php"" hidefocus="true">首页</a>
			<div class="f-pr f-cb nitem x-hoverItem">
				<span>课程体系</span>
				<div class="f-pa u-navdropmenu x-child">
					<span class="arrr f-pa"></span>
					<a data-index="大学计算机专业" class="dropitem f-f0" href="/GodZmooc/index.php/major/major_inter" hidefocus="true">
						<span>大学计算机专业</span>
					</a>
					<a data-index="互联网职业技能" class="dropitem f-f0" href="/GodZmooc/index.php/major/major_skill" hidefocus="true">
						<span>互联网职业技能</span></a>
					<a data-index="金融专业" class="dropitem f-f0 last" href="/GodZmooc/index.php/major/major_money" hidefocus="true">
						<span>金融专业</span>
					</a>
				</div>
			</div>
          <a data-index="微专业" class="nitem" href="/GodZmooc/index.php/major/major_small" hidefocus="true">微专业</a>
		  <div class="nitem f-f0 x-hoverItem" hidefocus="true"> <span class="j-dropmenubtn" data-href="/client/download.htm" id="auto-id-1449466857063">下载APP</span>
            <div class="u-navapptip f-pa x-child">
              <div class="arrr f-pa"></div>
              <img src="/GodZmooc/Public/Home/imgs/nav_qrcode.png" class="ewm f-fl" alt="下载APP" title="下载APP">
              <div class="rcon f-fr">
                <h4 class="txt">扫码下载官方App</h4>
                <a data-index="appstore下载" href="/GodZmooc/index.php/User/download" class="store apple"><img src="/GodZmooc/Public/Home/imgs/upload(1).png" width="150px"></a> <a data-index="android下载" href="/GodZmooc/index.php/User/download" class="store android"><img src="/GodZmooc/Public/Home/imgs/upload(2).png"></a> </div>
            </div>
          </div>
          <a data-index="学习中心" class="nitem" href="" hidefocus="true">学习中心</a>
          <div class="xxzxtip f-pa f-dn" id="j-xxzxtip-black-nav">
            <div class="arrr f-pa"></div>
            <div class="text f-fl">
              <p>“我的GodZ”改名为“学习中心”啦！</p>
              <p>你可以在学习中心查看所有学习记录和进度。</p>
            </div>
            <div class="xxzxtip-close f-pa" id="j-xxzxtip-close-black-nav">X</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="m-maintainInfo" style="display:none">
  <div id="maintain_info_box" class="g-flow"></div>
</div>
<div id="advertisement_box" class="advertisement_box f-pf" style="display:none;"></div>

<style type="text/css">
	#page a{
		float:left;
		text-indent:20px;
	}
</style>
<div class="g-flow f-cb">
	<div id="j-catbox" class="m-catebox f-pr f-cb">
		<ul class="level-1">
			<li class="level-1-item f-pr" id="catId-all"> 
				<a href="" >全部</a> 
				<span class="arrow"> 
					<span class="arrow_wrap arrow-wrap-trsp"> 
						<i class="arrow-border"></i> 
						<em class="arrow-cnt"></em> 
					</span> 
				</span> 
			</li>
			
			<?php if(is_array($types)): foreach($types as $key=>$type): ?><li class="level-1-item f-pr selected" id="catId-3">
				<a href="/GodZmooc/index.php/id/<?php echo ($type["id"]); ?>" class="myType" value="<?php echo ($type["id"]); ?>"> <?php echo ($type["name"]); ?></a> 
				<span class="arrow"> 
					<span class="arrow_wrap arrow-wrap-trsp"> 
						<i class="arrow-border"></i> 
						<em class="arrow-cnt"></em> 
					</span> 
				</span> 
			</li><?php endforeach; endif; ?>
		</ul>
		<ul class="level-2 f-dn">
		  <li class="level-2-item" id="auto-id-1449466894342"><span>请选择相关分类...</span></li>
		</ul>
		
		<!--遍历子栏目-->
		<ul class="level-2" style="" id="myUl">
			<li class="level-2-slash"></li>
		</ul>
	</div>
	<div class="b-20"></div>
<div id="GG">
	<div class="g-mn2" style="float:left">
		<div class="g-mn2c">
			<div id="j-breadTit" class="u-topTit" style="padding-top: 0px;"></div>
			<div id ="logo" class="m-slide f-pr" id="j-slideBox">
				<a class="slide j-slide" target="_blank" id="auto-id-1449466894351" href="" data-index="2">
					<?php if(is_array($advs)): foreach($advs as $key=>$advs): switch($advs["place"]): case "0": ?><img id="auto-id-1449466894546" src="/GodZmooc/Public/Upload/<?php echo ($advs["pic"]); ?>" style="opacity: 1; transition-property: opacity; transition-duration: 1s; transition-timing-function: ease-in-out; border='1px solid blue'"><?php break; endswitch; endforeach; endif; ?>
					<!-- <img id="auto-id-1449466894546" src="/GodZmooc/Public/Home/imgs/567256d653ec6.jpg" style="opacity: 1; transition-property: opacity; transition-duration: 1s; transition-timing-function: ease-in-out; border='1px solid blue'">
					<img id="auto-id-1449466894546" src="/GodZmooc/Public/Home/imgs/6630608169839812534.jpg" style="opacity: 1; transition-property: opacity; transition-duration: 1s; transition-timing-function: ease-in-out; border='1px solid blue'"> -->
				</a>
        
			</div>
			<div class="m-coursebox">
				<div id="j-topBar" class="top f-cb auto-1449466894243-parent auto-1449466894224-parent">
					<div class="m-cSelUI f-cb auto-1449466894243 f-fl">
						<a class="f-fl f-fc3 j-type selected" id="auto-id-1449466894369">
						全部
						</a>
						<a class="f-fl f-fc3 j-type" id="auto-id-1449466894370">
						随到随学
						</a>
						<a class="f-fl f-fc3 j-type" id="auto-id-1449466894371">
						正在开课</a>
						<a class="f-fl f-fc3 j-type" id="auto-id-1449466894372">
						即将开始
						</a>
						<a class="f-fl f-fc3 j-type" id="auto-id-1449466894373">
						已结束
						</a>
					</div>
					<div class="f-cb auto-1449466894224 f-fr">
					<a class="j-sort sort f-fl f-fc3 selected" id="auto-id-1449466894375">
					热门
					</a>
					<div class="f-fl sep">-</div>
						<a class="j-sort sort f-fl f-fc3" id="auto-id-1449466894376">
							最新
						</a>
						<div class="j-sort sort f-fl f-cb">
							<div class="f-fl sep">-</div>
							<div class="u-select f-fl" id="auto-id-1449466894383">
								<div class="up j-up f-thide">价格</div>
								<div class="down f-bg j-list" style="display: none;">
									<div class="f-thide list" title="价格由高到低" id="auto-id-1449466894379">
											价格由高到低
									</div>
									<div class="f-thide list" title="价格由低到高" id="auto-id-1449466894381">
											价格由低到高
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
        <div id="j-courseNode" class="lists auto-1449466894196-parent">
         
			<div class="m-basepool f-cb auto-1449466894196">
				<div id ="hh"class="m-data-lists f-cb f-pr j-data-list"style="width:100%">
				<?php if(is_array($typeData)): foreach($typeData as $key=>$ty): ?><div class="u-cover u-find-cover first" id="auto-id-1449466894429" style="margin-left:14px">
						<div class="wrap f-cb">
							<a href="/GodZmooc/index.php/Course/index/id/<?php echo ($ty["id"]); ?>" target="_blank" class="j-href wrap" data-href="/course/introduction/1367011.htm" data-index="1" data-name="C/C++黑客编程项目实战课程  【择善教育】">
					  
							<div class="img">
								<div class="pic f-pr"> 
									<img class="imgPic" src="/GodZmooc/Public/Upload/<?php echo ($ty["video"]); ?>" alt="C/C++黑客编程项目实战课程  【择善教育】"> 
								</div>
								<div class="tit">
								  <h3 class="f-thide"><?php echo ($ty["title"]); ?></h3>
								  <div class="continued sign ">老师参与</div>
								  <div class="continued sign foxconn2 f-dn foxconn"></div>
								</div>
								<div class="orgName f-fs0 f-thide"><?php echo ($ty["teacher"]); ?></div>
								<div class="thumb">
									<div class="desc f-cb"> 
										<span class="hot f-fs0"><?php echo ($ty["number"]); ?></span>
									</div>
									<div  style="height:20px;background:white;margin-top:10px;"> 
										<?php if($ty["price"] == 0.00): ?><span class="normal f-fs0" style="color:#93D250;font-size:12px;"><b>免费</b></span> 
										<?php else: ?><span class="normal f-fs0" style="color:#FE4000;font-size:12px"><b>¥<?php echo ($ty["price"]); ?></b></span><?php endif; ?>
 
									</div>
								</div>
								<div class="f-dn"></div>
							</div>
				  
							</a>
							<div class="j-mask mask" data-id="1367011" style="display:none">
								<div class="j-del delbtn"></div>
							</div>
						</div>
					</div><?php endforeach; endif; ?>	
				</div>	
			</div> 
		</div>
			
			
		<div id="page">
			<?php echo ($page); ?>
		</div>
        </div>
    </div>
    <div id="j-empty" class="u-emptybig" style="display: none;">
          <p class="emptytext">暂无课程</p>
    </div>
  
   <!--加-->
     
   
  <div class="g-sd2" style="margin-top:0px" >
    <div class="m-livebox">
      <div class="u-topTit">讲师直播<span class="livingicn f-ib"></span></div>
      <div id="j-liveBox" class="u-sideGray list"> <a class="c f-fc3 f-thide" data-index="1" data-name="2016考研西理工《材料科学基础》冲刺高分策略" href="http://study.163.com/course/introduction/1579002.htm" target="_blank" title="2016考研西理工《材料科学基础》冲刺高分策略"> [12月07日 18:00] 2016考研西理工《材料科学基础》冲刺高分策略 </a> <a class="c f-fc3 f-thide" data-index="2" data-name="背包游遍西班牙" href="http://study.163.com/course/introduction/1471002.htm" target="_blank" title="背包游遍西班牙"> [12月07日 19:00] 背包游遍西班牙 </a> <a class="u-more f-cb" data-index="更多" data-name="更多" href="http://study.163.com/find.htm#/courselist?ct=0"><span>更多</span><span class="icn"></span></a> </div>
    </div>
    <div class="b-20"></div>
    <div class="m-livebox">
      <div class="u-topTit">系列课程</div>
      <div class="u-sideGray list">
        <div id="j-alltpic">
          <li class="f-thide"><a class="f-fc3" target="_blank" href="http://study.163.com/series/86001.htm" data-index="1" data-name="美得不像话的Office系列">美得不像话的Office系列</a></li>
          <li class="f-thide"><a class="f-fc3" target="_blank" href="http://study.163.com/series/81001.htm" data-index="2" data-name="卖家打造爆款就靠这几招">卖家打造爆款就靠这几招</a></li>
          <li class="f-thide"><a class="f-fc3" target="_blank" href="http://study.163.com/series/61002.htm" data-index="3" data-name="手把手教你做优秀外企财务">手把手教你做优秀外企财务</a></li>
          <li class="f-thide"><a class="f-fc3" target="_blank" href="http://study.163.com/series/80001.htm" data-index="4" data-name="平面设计师必学4大技能">平面设计师必学4大技能</a></li>
        </div>
        <a class="u-more f-cb" data-index="更多" data-name="更多" href="http://study.163.com/series/all.htm"><span>更多</span><span class="icn"></span></a> </div>
    </div>
    <div class="b-20"></div>
    <div id="j-rankbox">
      <div class="u-topTit"> <a class="f-fc3 j-rankType selected" id="auto-id-1449466894340">付费排行</a><span style="margin:0 5px;color:#ddd;">|</span><a class="f-fc3 j-rankType" id="auto-id-1449466894341">免费排行</a> </div>
      <div class="u-sideGray j-ranklist" id="auto-id-1449466894352">
        <div class="u-rankItm f-cb">
          <div class="f-fl num num1">01</div>
          <a class="f-fl f-fc3 f-thide name" data-index="1" data-name="和秋叶一起学PPT" data-gatitle="付费排行" href="http://study.163.com/course/introduction/381006.htm" target="_blank" title="和秋叶一起学PPT">和秋叶一起学PPT</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num2">02</div>
          <a class="f-fl f-fc3 f-thide name" data-index="2" data-name="和秋叶一起学职场技能" data-gatitle="付费排行" href="http://study.163.com/course/introduction/967019.htm" target="_blank" title="和秋叶一起学职场技能">和秋叶一起学职场技能</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num3">03</div>
          <a class="f-fl f-fc3 f-thide name" data-index="3" data-name="英语口语革命" data-gatitle="付费排行" href="http://study.163.com/course/introduction/940019.htm" target="_blank" title="英语口语革命">英语口语革命</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num4">04</div>
          <a class="f-fl f-fc3 f-thide name" data-index="4" data-name="和阿文一起学信息图表" data-gatitle="付费排行" href="http://study.163.com/course/introduction/.htm#/courseDetail" target="_blank" title="和阿文一起学信息图表">和阿文一起学信息图表</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num5">05</div>
          <a class="f-fl f-fc3 f-thide name" data-index="5" data-name="手机摄影达人速成" data-gatitle="付费排行" href="http://study.163.com/course/introduction/1128006.htm" target="_blank" title="手机摄影达人速成">手机摄影达人速成</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num6">06</div>
          <a class="f-fl f-fc3 f-thide name" data-index="6" data-name="无痛英语第一季" data-gatitle="付费排行" href="http://study.163.com/course/introduction/995029.htm" target="_blank" title="无痛英语第一季">无痛英语第一季</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num7">07</div>
          <a class="f-fl f-fc3 f-thide name" data-index="7" data-name="和秋叶一起学Word" data-gatitle="付费排行" href="http://study.163.com/course/introduction/747046.htm#/courseDetail" target="_blank" title="和秋叶一起学Word">和秋叶一起学Word</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num8">08</div>
          <a class="f-fl f-fc3 f-thide name" data-index="8" data-name="表格之道(专业版)" data-gatitle="付费排行" href="http://study.163.com/course/introduction/720001.htm" target="_blank" title="表格之道(专业版)">表格之道(专业版)</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num9">09</div>
          <a class="f-fl f-fc3 f-thide name" data-index="9" data-name="向《经济学人》学图表" data-gatitle="付费排行" href="http://study.163.com/course/introduction/1337018.htm" target="_blank" title="向《经济学人》学图表">向《经济学人》学图表</a> </div>
        <div class="u-rankItm f-cb">
          <div class="f-fl num num10">10</div>
          <a class="f-fl f-fc3 f-thide name" data-index="10" data-name="Meta分析简明教程" data-gatitle="付费排行" href="http://study.163.com/course/introduction/1169005.htm" target="_blank" title="Meta分析简明教程">Meta分析简明教程</a> </div>
      </div>
    </div>
    <div class="b-20"></div>
    
   
</div>
	
<script type="text/javascript" src="/GodZmooc/Public/Home/js/ajax.js"></script>
<script type="text/javascript" src="/GodZmooc/Public/Home/js/jquery.js"></script>
<script>
	   $(".myType").click(function(){
			var id = $(this).attr('value');
		     $.post("/GodZmooc/index.php/Type/type",{"id":id},function(data){
				var len=data.length;
				var html="";
				for(var i=0;i<len;i++){
					html +="<li class='level-2-slash'><a class='A' dd="+data[i]['id']+">"+data[i]['name']+"</a></li>";
				}
				$('#myUl').html(html);
				
			 },'json');
			return false;
	   });
	   
	   $(".A").live("click",function(){
	        var id =$(this).attr('dd');
			$.post("/GodZmooc/index.php/Type/video",{"id":id},function(data){
			
			//var len=data.length;
			var html ="";
			for(var i in data){
				html +="<div class='u-cover u-find-cover first' id='auto-id-1449466894429'style='margin-left:14px'><div class='wrap f-cb'><a href='/GodZmooc/index.php/Course/index/id/"+data[i]['id']+"' target='_blank' class='j-href wrap' data-href='/course/introduction/1367011.htm' data-index='1' data-name='C/C++黑客编程项目实战课程  【择善教育】'><div class='img'><div class='pic f-pr'> <img class='imgPic' src='/GodZmooc/Public/Upload/"+data[i]['video']+"' alt='C/C++黑客编程项目实战课程  【择善教育】'> </div><div class='tit'><h3 class='f-thide'>"+data[i]['title']+"</h3><div class='continued sign '>老师参与</div><div class='continued sign foxconn2 f-dn foxconn'></div></div><div class='orgName f-fs0 f-thide'>"+data[i]['tname']+"</div><div class='thumb'><div class='desc f-cb'> <span class='hot f-fs0'>"+data[i]['number']+"</span></div><div style='height:20px;background:white;margin-top:10px;'><span class='normal f-fs0'style='color:red;font-size:20px'>"+data[i]['price']+"</span> <span class='discount'></span> </div></div><div class='f-dn'></div></div></a><div class='j-mask mask' data-id='1367011' style='display:none'><div class='j-del delbtn'></div></div></div></div>";
			}
			 $("#hh").html(html);
		  },"json"); 
			
		});
		
		$("#login > img").hover(function(){
			$("#login1").fadeIn(1000,function(){
				$("#login1").css("display","block");
			});
		},function(){
			$("#login1").hover(function(){
				var time=setInterval(function(){
					$("#login1").css("display","none");
				},3000);
			},function(){
				$("#login1").fadeOut(1000,function(){
					$("#login1").css("display","none");
				});
			});
		});
		
			<!-- 滚动的广告 -->
	var n=0;
	var time =setInterval(function(){
		if(n<3){
			$("#logo img").css("display","none");
			$("#logo img").eq(n).css("display","block");
			
			n++;
		}else{
			n=0;
		}	
	},2000);
	/*
	$("#logo img").hover(function(){
		clearInterval(time);
	},function(){
		
	});*/
	  
  </script>

<div class="g-ft">
  <div class="m-yktFoot" id="j-yktfoot">
    <div class="g-flow ftwrapper f-cb">
      <div class="f-fl ftlf">
        <div class="logo"></div>
        <p class="txt f-fs0"> 网易公司(163.com)旗下实用技能学习平台。与顶级机构、院校和优秀讲师合作，为您提供海量优质课程，以及创新的在线学习体验，帮助您获得全新的个人发展和能力提升。</p>
        <div class="share f-cb">
			<p class="tit">关注我们：</p>
			<a href="#" class="weibo" target="_blank" data-index="关注我们_微博">
				<img src="/GodZmooc/Public/Home/imgs/1.png">
			</a> 
			<a href="#" class="renren" target="_blank" data-index="关注我们_人人">
				<img src="/GodZmooc/Public/Home/imgs/2.png">
			</a>
			<a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信">
				<img src="/GodZmooc/Public/Home/imgs/3.png">
				<div class="tipQrcode f-pa">
					<div class="qrImag"> <img src="/GodZmooc/Public/Home/imgs/yixin.png" width="120px" height="120px" alt="加GodZmooc易信好友"> </div>
					<p class="qrTitle">易信号：study163</p>
					<div class="tip f-pa"></div>
				</div>
			</a>
			<a href="javascript:void(0)" class="weixin f-pr" data-index="关注我们_微信">
				<img src="/GodZmooc/Public/Home/imgs/4.png">
				<div class="tipQrcode f-pa">
					<div class="qrImag">
						<img src="/GodZmooc/Public/Home/imgs/weixin.png" width="120px" height="120px" alt="加GodZmooc微信好友">
					</div>
					<p class="qrTitle">微信号：study163</p>
					<div class="tip f-pa"></div>
				</div>
			</a>
		</div>
        <div class="copy">©<span>1997-2015</span> <?php echo ($configs["copyright"]); ?></div>
      </div>
      <div class="ftrt f-fr">
		<a href="/GodZmooc/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="关于我们">关于我们</a>
		<a href="/GodZmooc/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="联系我们">联系我们</a>
		<a href="/GodZmooc/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="帮助中心">帮助中心</a>
		<a href="/GodZmooc/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="内容招募">内容招募</a>
		<a href="/GodZmooc/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="意见反馈">意见反馈</a>
		<a href="" target="_blank" data-index="中国大学MOOC">中国大学MOOC</a>
        <div class="f-cb mobile f-fr">
          <div class="tit f-fl">移动App:</div>
          <a target="_blank" class="mlogo1" href=""></a>
		  <a target="_blank" class="mlogo2" href=""></a>
		</div>
      </div>
    </div>
  </div>
</div>
<script src="/GodZmooc/Public/Home/css/reuglar.0.3.1.js"></script>
<div class="f-dn">玩转 C语言 基础课堂,Fenby,IT与互联网 编程语言,玩转 C语言 基础课堂，用最基础易懂的形象比喻方式来学习和理解C语言的基础知识点，去掉冗繁的基础概念知识，最大化的在线练习编写代码中找到知识重点，以练为主，以学为辅，两者在快乐和最快时间里都可兼得，省去学习C语言看书和找习题的麻烦。  适用人群：喜欢编程，担心编程很难的零基础人群，想快速学好C语言基础，想用新鲜学习方式和不喜欢看书的C语言初学者。</div>
<div class="m-side-operation auto-1449466944905" id="j-side-operation">
  <div class="side-service-item">
	<a class="item-link-block" data-name="留言" href="" target="_blank">
		<i class="side-service-icon feedback-icon"></i>
		<span class="item-hover-text feedback-text">反馈意见</span>
	</a>
  </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item ">
	<a class="item-link-block app-download" data-name="手机课堂" href="javascript:void(0)">
		<i class="side-service-icon phone-icon"></i>
		<span class="item-hover-text">手机课堂</span>
		<div class="qrcode-bubble">
        <div class="qrcode">
			<div class="download"><img src="/GodZmooc/Public/Home/imgs/sideBar90.png">
			  <p>下载App</p>
			</div>
			<div class="follow-weixin"><img src="/GodZmooc/Public/Home/imgs/weixin.png">
			  <p>关注微信</p>
			</div>
		</div>
      <div class="arrow">
        <div class="arrow-border"></div>
        <div class="arrow-cnt"></div>
      </div>
    </div>
    </a> </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item "> <a class="item-link-block side-service-top" data-name="回到顶部" href="javascript:void(0)" id="auto-id-1449466944916"> <i class="side-service-icon top-icon"></i> <span class="item-hover-text scrtop-text">返回顶部</span> </a> </div>
</div>
<div>
  <div id="loadingMask" class="loading-mask" style="z-index: 10001; display: none;"></div>
  <div id="loadingPb" class="ui-loading f-cb" style="z-index: 10002; display: none;"></div>
</div>
<div class="u-userCard" id="auto-id-1449466944964">
  <div class="j-cardMain main">
    <div class="base f-cb">
      <div class="face f-fl"><a class="j-imglink"><img class="j-img" width="80" height="80" src=""></a></div>
      <div class="info f-fl">
        <p class="nameloginfo"><a target="_blank" class="f-thide f-ib j-name name" title="进入个人主页"></a></p>
        <p class="j-gztxt gztxt"></p>
      </div>
    </div>
    <p class="j-des des"></p>
    <div class="j-gzbtn gz"></div>
  </div>
  <div class="j-loading loading"></div>
</div>
</body>
<script type="text/javascript"charset="utf-8">
	$("#login > img").hover(function(){
		$("#login1").fadeIn(1000,function(){
			$("#login1").css("display","block");
		});
	},function(){
		$("#login1").hover(function(){
			var time=setInterval(function(){
				$("#login1").css("display","none");
			},3000);
		},function(){
			$("#login1").fadeOut(1000,function(){
				$("#login1").css("display","none");
			});
		});
	});
	
</script>
</html>