<?php /*%%SmartyHeaderCode:1830754b7cbc8cdfe67-55632774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37d48e9e6c0bd3cb0d8972cf7c1fcbeab5b389e8' => 
    array (
      0 => 'D:\\WWW\\sm0115\\app\\templates\\pages\\main\\main.tpl',
      1 => 1421205978,
      2 => 'file',
    ),
    'd0a7c2b0a311f0a796304628f196866386cf4763' => 
    array (
      0 => 'D:\\WWW\\sm0115\\app\\templates\\layout\\layout_main.tpl',
      1 => 1421331212,
      2 => 'file',
    ),
    '23c8104dc9eeccdb162c3b20c0cc2c4cfaeac93b' => 
    array (
      0 => 'D:\\WWW\\sm0115\\app\\configs\\config_tpl.conf',
      1 => 1421205584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830754b7cbc8cdfe67-55632774',
  'variables' => 
  array (
    'mod' => 0,
    'm' => 0,
    'c_header' => 0,
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b7cbc8e4e1c1_02325734',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b7cbc8e4e1c1_02325734')) {function content_54b7cbc8e4e1c1_02325734($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<title>联成迅康</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../public/css/bootstrap.min.css" />
<link rel="stylesheet" href="../public/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../public/css/uniform.css" />
<link rel="stylesheet" href="../public/css/unicorn.main.css" />
<link rel="stylesheet" href="../public/css/unicorn.blue.css" class="skin-color" />	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<!---->	
<div id="header"  >
	<h1><a> 图片在css/unicorn.main.css</a></h1>
</div>
<div id="search">
	<a class="btn btn-mini" id="tori"><i class="icon-arrow-left"></i></a>
</div>
<div id="user-nav" class="navbar navbar-inverse">
	<ul class="nav btn-group">
		<li class="btn-info">
			<a title="#" href="../../control/controlUsers.php?uid=quit"><i class="icon icon-share"></i> 
			<span class='text' style="color:#FFF;font-size:12px;">退出</span></a>
		</li>
	</ul>
</div>
<!---->	

<!---->	         
<div id="sidebar">
	<a href="#" class="visible-phone" style="font-size:14px;"><i class="icon-home"></i>菜单目录</a>
	<ul>
		<li id="main"><a href="../../view/main/main.php"><i class="icon-home"></i> <span>首页</span></a></li>
	    		<li id="computer" class="submenu">
			<a href="../../view/#"><i class="icon-th-large"></i> <span>计算机信息系统修改</span></a>
									<ul>
				<li id="com_shenqing"><a href="../../view/computer/shenqing.php">填写申请单</a></li>
			</ul>
												<ul>
				<li id="com_renwu"><a href="../../view/computer/renwu.php">任务查询</a></li>
			</ul>
														</li>
				<li id="system" class="submenu">
			<a href="../../view/#"><i class="icon-tint"></i> <span>系统管理</span></a>
																					<ul>
				<li id="sys_users"><a href="../../view/system/">用户管理</a></li>
			</ul>
								</li>
			</ul>
</div>
<!---->	

<!---->		
<div id="content">

	<div id="content-header">
	    		<h1>欢迎来到首页</h1>
			</div>
	<div class="container-fluid">


<a class="btn" href="../../control/controlUsers.php?uid=quit"><i class="icon-remove"></i>  退出系统</a>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
	<div class="widget-title">
		<span class="icon">
			<i class="icon-user"></i>
		</span>
		<h5>我的信息</h5>
	</div>
	<div class="widget-content">
		<div class="invoice-content">
			<div class="invoice-head">
				<div class="invoice-meta">
					欢迎你! <span class="invoice-number"><strong>吴丽霞</strong></span>
				</div>
			</div>
			<p class="amount-word">
				现在时间: <span>2015-01-15 22:16:40</span>
			</p>
			<h5>需知：</h5>
			<p>
				进入系统请保护好自己的密码，规范操作，若有疑问请咨询系统管理员。
			</p>
			<p class="help-block">
				<strong>提示:</strong> 系统会不定期自动升级完善，若遇到升级提示，请暂时不要使用系统功能，等待升级提示消失再使用。
			</p>
		</div>
	</div>
</div>
</div>
</div>


<div class="row-fluid">
	<div id="footer" class="span12">
				用户：吴丽霞
		
			</div>
</div>
	</div>
</div>
<!---->		

<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/jquery.ui.custom.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/jquery.uniform.js"></script>
<script src="../public/js/unicorn.js"></script>

<script language="javascript" >
$(function(){
	if ($(window).width() > 480) { 
		$("#main").addClass('active');
	    $("#main").parent().parent().addClass('open active');
	}else{
		// alert('480');
	};
	
});
</script>
</body>
</html>
<?php }} ?>
