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
<link rel="stylesheet" href="../public/css/select2.css" />
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
	<a class="btn btn-mini" href="../control/control_users.php?uid=refresh"><i class="icon-refresh"></i></a>
</div>
<div id="user-nav" class="navbar navbar-inverse">
	<ul class="nav btn-group">
		
		<li class="btn-mini">
			<a title="#" href="../control/control_users.php?uid=quit"><i class="icon-share"></i> 
			<span class='text' >退出</span></a>
		</li>
	</ul>
</div>
<!--{*navbar end*}-->	

<!--{*sidebar end*}-->	         
<div id="sidebar">
	<a href="#" class="visible-phone"  style="font-size:14px;">
		<i class="icon-home"></i><span class="tip-bottom" title="点击打开">菜单</span>
	</a>
	<ul>
		<li id="main"><a href="../view/main.php"><i class="icon-home"></i> <span>首页</span></a></li>
	    {foreach $smarty.session.mod as $mod}
		<li id="{$mod.name}" class="submenu">
			<a href="{$mod.url}"><i class="{$mod.icon}"></i> <span>{$mod.title}</span></a>
			{foreach $smarty.session.menus as $m}
			{if $mod.id eq $m.pid}
			<ul>
				<li id="{$m.name}"><a href="{$m.url}">{$m.title}</a></li>
			</ul>
			{/if}
			{/foreach}
		</li>
		{/foreach}
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

	<div id="breadcrumb">
		<a href="#" ><i class="icon-home"></i> 首页</a>
		<a href="#" class="current">控制台</a>
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
<script src="../public/js/select2.min.js"></script>
<script src="../public/js/unicorn.js"></script>

{block name=footer_js}{/block}
<script language="javascript" >
$(function(){
	if ($(window).width() > 480) { 
		$("#{$active}").addClass('active');
	    $("#{$active}").parent().parent().addClass('open active');
	}else{
		// alert('480');
	};
	
});
</script>
</body>
</html>
