<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-20 17:08:16
         compiled from "D:\WWW\sm\app\templates\pages\sys_users_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12942550be38053ec67-23419966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd30fd17e47261d3e613b279fb7f666a651fee087' => 
    array (
      0 => 'D:\\WWW\\sm\\app\\templates\\pages\\sys_users_add.tpl',
      1 => 1426756474,
      2 => 'file',
    ),
    '4386575760d87c0c385dce3e5a6a2a9050d83443' => 
    array (
      0 => 'D:\\WWW\\sm\\app\\templates\\layout\\layout_main.tpl',
      1 => 1426666398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12942550be38053ec67-23419966',
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
  'unifunc' => 'content_550be3806acfc4_84325595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550be3806acfc4_84325595')) {function content_550be3806acfc4_84325595($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("config_tpl.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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

<div class="row-fluid">
<div class="span6">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-user"></i>
			</span>
			<h5>添加用户</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" method="post" action="../control/control_users.php?uid=addusers" id="shenqingform">
			
				 <div class="control-group">
					<label class="control-label" >用户名</label>
				    <div class="controls">
						<input type="text" name="username"  />
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >密码</label>
					<div class="controls">
						<input type="text" name="password" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >状态</label>
					<div class="controls">
						<input type="text" name="live" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >所属角色</label>
					<div class="controls">
						<input type="text" name="live" />
					</div>
				</div>
				
				<div class="form-actions">
					<input type="submit" value="保存" class="btn btn-primary"/>
					<input type="reset" value="取消" class="btn btn-danger" />
				</div>
				
			   </form>
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
