<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-23 16:59:57
         compiled from "D:\WWW\sm\app\templates\pages\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29342550fd60dd97016-19314107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51bb6c0c74eccd40c52ec8f15f318ca701ce8770' => 
    array (
      0 => 'D:\\WWW\\sm\\app\\templates\\pages\\main.tpl',
      1 => 1426666398,
      2 => 'file',
    ),
    '4386575760d87c0c385dce3e5a6a2a9050d83443' => 
    array (
      0 => 'D:\\WWW\\sm\\app\\templates\\layout\\layout_main.tpl',
      1 => 1426666398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29342550fd60dd97016-19314107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'm' => 0,
    'c_header' => 0,
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550fd60dec82e3_41351445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550fd60dec82e3_41351445')) {function content_550fd60dec82e3_41351445($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("config_tpl.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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

</head>
<body>
<!---->	
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
<!---->	

<!---->	         
<div id="sidebar">
	<a href="#" class="visible-phone"  style="font-size:14px;">
		<i class="icon-home"></i><span class="tip-bottom" title="点击打开">菜单</span>
	</a>
	<ul>
		<li id="main"><a href="../view/main.php"><i class="icon-home"></i> <span>首页</span></a></li>
	    <?php  $_smarty_tpl->tpl_vars['mod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mod']->_loop = false;
 $_from = $_SESSION['mod']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mod']->key => $_smarty_tpl->tpl_vars['mod']->value) {
$_smarty_tpl->tpl_vars['mod']->_loop = true;
?>
		<li id="<?php echo $_smarty_tpl->tpl_vars['mod']->value['name'];?>
" class="submenu">
			<a href="<?php echo $_smarty_tpl->tpl_vars['mod']->value['url'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['mod']->value['icon'];?>
"></i> <span><?php echo $_smarty_tpl->tpl_vars['mod']->value['title'];?>
</span></a>
			<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_SESSION['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['mod']->value['id']==$_smarty_tpl->tpl_vars['m']->value['pid']) {?>
			<ul>
				<li id="<?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['m']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
</a></li>
			</ul>
			<?php }?>
			<?php } ?>
		</li>
		<?php } ?>
	</ul>
</div>
<!---->	

<!---->		
<div id="content">

	<div id="content-header">
	    <?php if (!isset($_smarty_tpl->tpl_vars['c_header']->value)) {?>
		<h1>亲！该页面出错了！</h1>
		<?php } else { ?>
		<h1><?php echo $_smarty_tpl->tpl_vars['c_header']->value;?>
</h1>
		<?php }?>
	</div>

	<div id="breadcrumb">
		<a href="#" ><i class="icon-home"></i> 首页</a>
		<a href="#" class="current">控制台</a>
	</div>

	<div class="container-fluid">

<a class="btn" href="../control/control_users.php?uid=quit"><i class="icon-remove"></i>  退出系统</a>
<a class="btn" href="../control/control_users.php?uid=refresh"><i class="icon-heart"></i> 刷新权限</a>

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
					欢迎你! <span class="invoice-number"><strong><?php echo $_SESSION['se_name'];?>
</strong></span>
				</div>
			</div>
			<p class="amount-word">
				现在时间: <span><?php echo date("Y-m-d H:i:s");?>
</span>
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
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-play-circle"></i>
								</span>
								<h5>Available icons</h5>
								<span class="label">140</span>
							</div>
							<div class="widget-content">
								<div class="row-fluid">
									<div class="span3">
									  <ul style="list-style:none;">
										<li><i class="icon-glass"></i> icon-glass</li>
										<li><i class="icon-music"></i> icon-music</li>
										<li><i class="icon-search"></i> icon-search</li>
										<li><i class="icon-envelope"></i> icon-envelope</li>
										<li><i class="icon-heart"></i> icon-heart</li>
										<li><i class="icon-star"></i> icon-star</li>
										<li><i class="icon-star-empty"></i> icon-star-empty</li>
										<li><i class="icon-user"></i> icon-user</li>
										<li><i class="icon-film"></i> icon-film</li>
										<li><i class="icon-th-large"></i> icon-th-large</li>
										<li><i class="icon-th"></i> icon-th</li>
										<li><i class="icon-th-list"></i> icon-th-list</li>
										<li><i class="icon-ok"></i> icon-ok</li>
										<li><i class="icon-remove"></i> icon-remove</li>
										<li><i class="icon-zoom-in"></i> icon-zoom-in</li>
										<li><i class="icon-zoom-out"></i> icon-zoom-out</li>
										<li><i class="icon-off"></i> icon-off</li>
										<li><i class="icon-signal"></i> icon-signal</li>
										<li><i class="icon-cog"></i> icon-cog</li>
										<li><i class="icon-trash"></i> icon-trash</li>
										<li><i class="icon-home"></i> icon-home</li>
										<li><i class="icon-file"></i> icon-file</li>
										<li><i class="icon-time"></i> icon-time</li>
										<li><i class="icon-road"></i> icon-road</li>
										<li><i class="icon-download-alt"></i> icon-download-alt</li>
										<li><i class="icon-download"></i> icon-download</li>
										<li><i class="icon-upload"></i> icon-upload</li>
										<li><i class="icon-inbox"></i> icon-inbox</li>
										<li><i class="icon-play-circle"></i> icon-play-circle</li>
										<li><i class="icon-repeat"></i> icon-repeat</li>
										<li><i class="icon-refresh"></i> icon-refresh</li>
										<li><i class="icon-list-alt"></i> icon-list-alt</li>
										<li><i class="icon-lock"></i> icon-lock</li>
										<li><i class="icon-flag"></i> icon-flag</li>
										<li><i class="icon-headphones"></i> icon-headphones</li>
									  </ul>
									</div>
									<div class="span3">
									  <ul style="list-style:none;">
										<li><i class="icon-volume-off"></i> icon-volume-off</li>
										<li><i class="icon-volume-down"></i> icon-volume-down</li>
										<li><i class="icon-volume-up"></i> icon-volume-up</li>
										<li><i class="icon-qrcode"></i> icon-qrcode</li>
										<li><i class="icon-barcode"></i> icon-barcode</li>
										<li><i class="icon-tag"></i> icon-tag</li>
										<li><i class="icon-tags"></i> icon-tags</li>
										<li><i class="icon-book"></i> icon-book</li>
										<li><i class="icon-bookmark"></i> icon-bookmark</li>
										<li><i class="icon-print"></i> icon-print</li>
										<li><i class="icon-camera"></i> icon-camera</li>
										<li><i class="icon-font"></i> icon-font</li>
										<li><i class="icon-bold"></i> icon-bold</li>
										<li><i class="icon-italic"></i> icon-italic</li>
										<li><i class="icon-text-height"></i> icon-text-height</li>
										<li><i class="icon-text-width"></i> icon-text-width</li>
										<li><i class="icon-align-left"></i> icon-align-left</li>
										<li><i class="icon-align-center"></i> icon-align-center</li>
										<li><i class="icon-align-right"></i> icon-align-right</li>
										<li><i class="icon-align-justify"></i> icon-align-justify</li>
										<li><i class="icon-list"></i> icon-list</li>
										<li><i class="icon-indent-left"></i> icon-indent-left</li>
										<li><i class="icon-indent-right"></i> icon-indent-right</li>
										<li><i class="icon-facetime-video"></i> icon-facetime-video</li>
										<li><i class="icon-picture"></i> icon-picture</li>
										<li><i class="icon-pencil"></i> icon-pencil</li>
										<li><i class="icon-map-marker"></i> icon-map-marker</li>
										<li><i class="icon-adjust"></i> icon-adjust</li>
										<li><i class="icon-tint"></i> icon-tint</li>
										<li><i class="icon-edit"></i> icon-edit</li>
										<li><i class="icon-share"></i> icon-share</li>
										<li><i class="icon-check"></i> icon-check</li>
										<li><i class="icon-move"></i> icon-move</li>
										<li><i class="icon-step-backward"></i> icon-step-backward</li>
										<li><i class="icon-fast-backward"></i> icon-fast-backward</li>
									  </ul>
									</div>
									<div class="span3">
									  <ul style="list-style:none;">
										<li><i class="icon-backward"></i> icon-backward</li>
										<li><i class="icon-play"></i> icon-play</li>
										<li><i class="icon-pause"></i> icon-pause</li>
										<li><i class="icon-stop"></i> icon-stop</li>
										<li><i class="icon-forward"></i> icon-forward</li>
										<li><i class="icon-fast-forward"></i> icon-fast-forward</li>
										<li><i class="icon-step-forward"></i> icon-step-forward</li>
										<li><i class="icon-eject"></i> icon-eject</li>
										<li><i class="icon-chevron-left"></i> icon-chevron-left</li>
										<li><i class="icon-chevron-right"></i> icon-chevron-right</li>
										<li><i class="icon-plus-sign"></i> icon-plus-sign</li>
										<li><i class="icon-minus-sign"></i> icon-minus-sign</li>
										<li><i class="icon-remove-sign"></i> icon-remove-sign</li>
										<li><i class="icon-ok-sign"></i> icon-ok-sign</li>
										<li><i class="icon-question-sign"></i> icon-question-sign</li>
										<li><i class="icon-info-sign"></i> icon-info-sign</li>
										<li><i class="icon-screenshot"></i> icon-screenshot</li>
										<li><i class="icon-remove-circle"></i> icon-remove-circle</li>
										<li><i class="icon-ok-circle"></i> icon-ok-circle</li>
										<li><i class="icon-ban-circle"></i> icon-ban-circle</li>
										<li><i class="icon-arrow-left"></i> icon-arrow-left</li>
										<li><i class="icon-arrow-right"></i> icon-arrow-right</li>
										<li><i class="icon-arrow-up"></i> icon-arrow-up</li>
										<li><i class="icon-arrow-down"></i> icon-arrow-down</li>
										<li><i class="icon-share-alt"></i> icon-share-alt</li>
										<li><i class="icon-resize-full"></i> icon-resize-full</li>
										<li><i class="icon-resize-small"></i> icon-resize-small</li>
										<li><i class="icon-plus"></i> icon-plus</li>
										<li><i class="icon-minus"></i> icon-minus</li>
										<li><i class="icon-asterisk"></i> icon-asterisk</li>
										<li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
										<li><i class="icon-gift"></i> icon-gift</li>
										<li><i class="icon-leaf"></i> icon-leaf</li>
										<li><i class="icon-fire"></i> icon-fire</li>
										<li><i class="icon-eye-open"></i> icon-eye-open</li>
									  </ul>
									</div>
									<div class="span3">
									  <ul style="list-style:none;">
										<li><i class="icon-eye-close"></i> icon-eye-close</li>
										<li><i class="icon-warning-sign"></i> icon-warning-sign</li>
										<li><i class="icon-plane"></i> icon-plane</li>
										<li><i class="icon-calendar"></i> icon-calendar</li>
										<li><i class="icon-random"></i> icon-random</li>
										<li><i class="icon-comment"></i> icon-comment</li>
										<li><i class="icon-magnet"></i> icon-magnet</li>
										<li><i class="icon-chevron-up"></i> icon-chevron-up</li>
										<li><i class="icon-chevron-down"></i> icon-chevron-down</li>
										<li><i class="icon-retweet"></i> icon-retweet</li>
										<li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
										<li><i class="icon-folder-close"></i> icon-folder-close</li>
										<li><i class="icon-folder-open"></i> icon-folder-open</li>
										<li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
										<li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
										<li><i class="icon-hdd"></i> icon-hdd</li>
										<li><i class="icon-bullhorn"></i> icon-bullhorn</li>
										<li><i class="icon-bell"></i> icon-bell</li>
										<li><i class="icon-certificate"></i> icon-certificate</li>
										<li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
										<li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
										<li><i class="icon-hand-right"></i> icon-hand-right</li>
										<li><i class="icon-hand-left"></i> icon-hand-left</li>
										<li><i class="icon-hand-up"></i> icon-hand-up</li>
										<li><i class="icon-hand-down"></i> icon-hand-down</li>
										<li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
										<li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
										<li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
										<li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
										<li><i class="icon-globe"></i> icon-globe</li>
										<li><i class="icon-wrench"></i> icon-wrench</li>
										<li><i class="icon-tasks"></i> icon-tasks</li>
										<li><i class="icon-filter"></i> icon-filter</li>
										<li><i class="icon-briefcase"></i> icon-briefcase</li>
										<li><i class="icon-fullscreen"></i> icon-fullscreen</li>
									  </ul>
									</div>
								  </div>
							</div>
						</div>
					</div>
				</div>

<div class="row-fluid">
	<div id="footer" class="span12">
		<?php if (isset($_SESSION['se_name'])) {?>
		用户：<?php echo $_SESSION['se_name'];?>

		
		<?php } else { ?>
		请登录
		<?php }?>
	</div>
</div>
	</div>
</div>
<!---->		

<?php echo '<script'; ?>
 src="../public/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/js/jquery.ui.custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/js/jquery.uniform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/js/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/js/unicorn.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 language="javascript" >
$(function(){
	if ($(window).width() > 480) { 
		$("#<?php echo $_smarty_tpl->tpl_vars['active']->value;?>
").addClass('active');
	    $("#<?php echo $_smarty_tpl->tpl_vars['active']->value;?>
").parent().parent().addClass('open active');
	}else{
		// alert('480');
	};
	
});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
