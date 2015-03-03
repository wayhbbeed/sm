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

<!--{*sidebar end*}-->	         
<div id="sidebar">
	<a href="#" class="visible-phone" style="font-size:14px;"><i class="icon-home"></i>菜单目录</a>
	<ul>
	    {foreach $smarty.session.mod as $mod}
		<li id="main" class="submenu">
			<a href="{#_VIEW#}/{$mod.url}"><i class="{$mod.icon}"></i> <span>{$mod.title}</span></a>
			{foreach $smarty.session.menus as $m}
			{if $mod.id eq $m.pid}
			<ul id="list">
				<li><a href="{#_VIEW#}/{$m.url}">{$m.id}{$m.title}</a></li>
			</ul>
			{/if}
			{/foreach}
		</li>
		{/foreach}
	</ul>
</div>
<!--{*sidebar end*}-->	



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
