<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>全部课程 - GodZmooc</title>
		<meta name="keywords" content="GodZmooc">
		<meta name="description" content="GodZmooc">
		<script type="text/javascript"charset="utf-8"src="/godzmooc/Public/Home/js/ajax.js"></script>
		<script type="text/javascript"charset="utf-8"src="/godzmooc/Public/Home/js/jquery.js"></script>
		<meta name="description" content="">
		<title>GodZ用户中心</title>
	</head>
	
		<script type="text/javascript"charset="utf-8"src="/godzmooc/Public/Home/js/jquery.js"></script>
		<script type="text/javascript"charset="utf-8"src="/godzmooc/Public/Home/js/ajax.js"></script>

		<link rel="stylesheet" href="/godzmooc/Public/Home/css/login/global.css">
		<link rel="stylesheet" href="/godzmooc/Public/Home/css/login/skin.css">
		<link rel="stylesheet" href="/godzmooc/Public/Home/css/login/autoComplete.css">
		<link rel="stylesheet" href="/godzmooc/Public/Home/css/login/login.css">
	<body class="s-" style="padding-top: 0px;">
		<div class="g-doc" style="visibility: visible;">
			<div class="g-hd">
				<div class="g-in">
					<div class="m-logobar">
						<h1>
							<a href="/godzmooc/index.php">
								<em>GodZmooc用户中心</em>
								<img src="/godzmooc/Public/Home/imgs/login/logo.png" alt="GodZmooc用户中心" title="GodZmooc用户中心">
							</a>
						</h1>
						<i>|</i>
						<h2 class="f-ff1">登录</h2>
						<div class="notice"></div>
					</div>
				</div>
			</div>
			<div class="g-bd">
				<div class="g-in" style="position:relative; padding:46px 0;background:url('/godzmooc/Public/Home/imgs/login/bg.jpg');">
					
					<iframe id="advList" frameborder="0" scrolling="no" marginheight="0px" marginwidth="0px" style="display: block;width: 990px;height: 512px;position: absolute;bottom: 0px;left: 0px;" src="">
					</iframe>         
					
					<div class="m-tab m-tab-small">
						<div class="tabHd">
							<ul class="f-cbli">
								<li rel="#loginByAccount" class="z-on"><a href="javascript:void(0);">普通登录</a></li>
								<li rel="#loginByCode" style="position:relative; "><a href="javascript:void(0);">二维码登录</a><span class="u-new"></span></li>
							</ul>
						</div>
						<div class="tabBd">
							<div id="loginByAccount">
								<div id="checkAlert">
									<p class="u-tips " style="display:none;">
										<em>&nbsp;</em><span></span>
									</p>
								</div>
								<form id="fLogin" method="post" action="/godzmooc/index.php/Index/login" autocomplete="off" target="_self">
									<div class="m-ipt">
										<div class="u-ipt">
											<div class="iptctn">
												<input type="email" name="username" id="username" value="" myholder="帐号" placeholder="帐号">
												<span id="nu"></span>
											</div>
										</div>
									</div>
									<div class="m-ipt">
										<div class="u-ipt">
											<div class="iptctn">
												<input type="password" name="password" id="password" value="" maxlength="16" myholder="密码" placeholder="密码">
												<span id="pwd"></span>
											</div>
										</div>
									</div>
									<button type="submit" id="loginBtn" class="u-btn2">登录</button>
								</form>
							</div>
							<div id="loginByCode" class="f-dn">
								<form id="codeLoginForm" method="post" action="" autocomplete="off" target="_self">
									<input type="hidden" name="product" value="urs">
									<input type="hidden" name="noRedirect" value="1">
									<input type="hidden" id="ticket" name="ticket" value="">
									<div id="qrBox">
										<p class="qrMsg">
											使用 <a href="" target="_blank">GodZmooc邮箱大师APP</a> 扫一扫快速登录
										</p>
										<div class="u-tips4 f-dn">
											<em>&nbsp;</em><span class="f-ff1"></span>
										</div>
										<div id="loginQrCodeContainer">
											<img src="" id="loginQrCode">
											<div class="loginQrCodeCover" style="display:none;"></div>
											<div class="loginQrCodeInfor" style="display:none;">
												<p><strong>二维码已失效</strong><br>请刷新后重新扫描</p>
												<a href="javascript:void(0);" class="u-btn2 reflashOrBtn"><span>刷新</span></a>
											</div>
										</div>
									</div>
								</form>
							</div>
							
							<div class="loginLinks">
								<a href="" target="_blank">忘记密码？</a>|
								
								<a href="/godzmooc/index.php/Login/reg.html" >注册</a>|
								<a href="" target="_blank">关于GodZmooc邮箱帐号</a>
							</div>
							
						</div>
					</div>
					
				</div>
				
				<div class="ftnList">
					<ul class="g-in f-cb f-cbli"><!--
						--><li style="position:relative;">
							<a href="" class="u-tips2 u-tips2-ftn1" target="_blank">
								<em>&nbsp;</em>
								<span>用户中心公众版<br><i>帐号保护神器，安全达人必备</i></span>
							</a>
							<span class="u-new"></span>
						</li><!--
						--><li>
							<a href="" class="u-tips2 u-tips2-ftn0" target="_blank">
								<em>&nbsp;</em>
								<span>找回密码<br><i>多种方式快速找回密码</i></span>
							</a>
						</li><!--
						--><li>
							<a href="" class="u-tips2 u-tips2-ftn2" target="_blank">
								<em>&nbsp;</em>
								<span>锁定帐号<br><i>禁止登录，防止帐号被盗</i></span>
							</a>
						</li><!--
						--><li>
							<a href="" class="u-tips2 u-tips2-ftn3" target="_blank">
								<em>&nbsp;</em>
								<span>手机将军令<br><i>安全、实惠、免费、实用</i></span>
							</a>
						</li><!--
						--><li>
							<a href="" class="u-tips2 u-tips2-ftn4" target="_blank">
								<em>&nbsp;</em>
								<span>帐号修复<br><i>通过客服解决帐号问题</i></span>
							</a>
						</li><!--
					--></ul>
				</div>
			</div>
			<div class="g-ft">
				<div class="g-in">
					<div class="m-cp">
						<p>
							<a href="" target="_blank">About NetEase</a>-
							<a href="" target="_blank">公司简介</a>-
							<a href="" target="_blank">联系方式</a>-
							<a href="" target="_blank">OAuth2.0认证</a>-
							<a href="" target="_blank">招聘信息</a>-
							<a href="" target="_blank">客户服务</a>-
							<a href="" target="_blank">相关法律</a>-
							<a href="" target="_blank">网络营销</a>
						</p>
						<p>
							GodZmooc公司版权所有 ©1997-2015
						</p>
					</div>
				</div>
			</div>
			<div id="codeTrigger"></div>
		</div>
		<div id="autoCompleteList"></div>
	</body>
	<script type="text/javascript"charset="utf-8">
		var f=false;
		var t=false;
		$("#username").blur(function()
		{
			var val=this.value;
			if(!val)
			{
				$("#nu").css("color","red");
				$("#nu").html("请输入用户名");
				return f=false;
			}else
			{
				$("#nu").css("color","green");
				return f=true;
			}
		});
		$("#password").blur(function()
		{
			var val=this.value;
			if(!val)
			{
				$("#pwd").css("color","red");
				$("#pwd").html("请输入密码");
				return t=false;
			}else if(val.length < 9)
			{
				$("#pwd").css("color","red");
				$("#pwd").html("我估计有点短");
				return t=false;
			}else
			{
				$("#pwd").css("color","green");
				$("#pwd").html("密码格式正确");
				return t=true;
			}
		});
		
		$("form").submit(function(){
			$("#username").blur();
			$("#password").blur();
			if(t && f){
				return true;
			}
			return false;
		});
	</script>

	
</html>