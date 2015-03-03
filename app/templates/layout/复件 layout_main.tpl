{config_load file="config_tpl.conf"}
<!DOCTYPE html>
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
{block name=head_css}{/block}
</head>
<body>
<!--{*navbar begin*}-->	
<div id="header"  >
	<h1><a> 图片在css/unicorn.main.css</a></h1>
</div>
<div id="search">
	<a class="btn btn-mini" id="tori"><i class="icon-arrow-left"></i></a>
</div>
<div id="user-nav" class="navbar navbar-inverse">
	<ul class="nav btn-group">
		<li class="btn-info">
			<a title="#" href="{#_CONTROL#}/controlUsers.php?uid=quit"><i class="icon icon-share"></i> 
			<span class='text' style="color:#FFF;font-size:12px;">退出</span></a>
		</li>
	</ul>
</div>
<!--{*navbar end*}-->	

<!--{*sidebar end*}-->	         
<div id="sidebar">
	<a href="#" class="visible-phone" style="font-size:14px;"><i class="icon icon-home"></i>菜单目录</a>
	<ul>
		<li id="main"><a href="main.php"><i class="icon icon-home"></i> <span>首页</span></a></li>
		<li class="submenu" id="computer">
			<a href="#"><i class="icon icon-th-list"></i> <span>计算机信息修改</span></a>
			{if $smarty.session.menus ne null}
			<ul id="list">
				{foreach $smarty.session.menus as $m}
				<li><a href="{#_VIEW#}/{$m.url}">{$m.title}</a></li>
				{/foreach}
			</ul>
			{/if}
		</li>
		<li id="custom" class="submenu">
			<a href="#"><i class="icon icon-user"></i> <span>客户管理</span></a>
		</li>
		<li id="system" class="submenu">
			<a href="#"><i class="icon icon-tint"></i> <span>系统管理</span></a>
			{if $smarty.session.menus ne null}
			<ul id="list">
				{foreach $smarty.session.menus as $m}
				<li id="{$m.name}"><a href="{#_VIEW#}/{$m.url}">{$m.title}</a></li>
				{/foreach}
			</ul>
			{/if}
		</li>
		<li id="config" class="submenu">
			<a href="#"><i class="icon icon-th-large"></i> <span>个人设置</span></a>
		</li>
	</ul>
</div>
<!--{*sidebar end*}-->	

<!--{*content begin*}-->		
<div id="content">

	<div id="content-header">
	    {if !isset($c_header)}
		<h1>亲！该页面出错了！</h1>
		{else}
		<h1>{$c_header}</h1>
		{/if}
	</div>
	<div class="container-fluid">

{block name=content}{/block}

<div class="row-fluid">
	<div id="footer" class="span12">
		{if isset($smarty.session.se_name)}
		用户：{$smarty.session.se_name}
		{*&nbsp;&nbsp;&nbsp;&nbsp;
		部门：{$smarty.session.auth[0].rolename}*}
		{else}
		请登录
		{/if}
	</div>
</div>
	</div>
</div>
<!--{*content end*}-->		

<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/jquery.ui.custom.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/jquery.uniform.js"></script>
<script src="../public/js/unicorn.js"></script>
{block name=footer_js}{/block}
<script language="javascript" >
$(function(){
	$("#{$active}").addClass('active');
	$("#{$active}").parent().parent().addClass('open active');
});
</script>
</body>
</html>
