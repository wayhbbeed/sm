<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-20 15:02:57
         compiled from "D:\WWW\sm\app\templates\pages\dispatch_jump.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27901550bc6216acfc6-30409684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c0cc64c65dbbd03e7d69afb63bf5a7cb0ad324' => 
    array (
      0 => 'D:\\WWW\\sm\\app\\templates\\pages\\dispatch_jump.tpl',
      1 => 1426666398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27901550bc6216acfc6-30409684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'singer' => 0,
    'message' => 0,
    'jumpUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550bc6217270e6_71957308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550bc6217270e6_71957308')) {function content_550bc6217270e6_71957308($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background-color: #2D335B; font-family: '微软雅黑'; color: #fff; font-size: 16px; }
.system-message{ padding: 24px 48px; }
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #fff;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
<div class="system-message">

<?php if ($_smarty_tpl->tpl_vars['singer']->value=='success') {?>
<h1>:)</h1>
<p class="success"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php } else { ?>
<h1>:(</h1>
<p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>

<p class="detail"></p>
<p class="jump">
页面自动 <a id="href" href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">跳转</a> 等待时间： <b id="wait">1</b>
</p>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
