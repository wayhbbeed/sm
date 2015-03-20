<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-20 15:02:50
         compiled from "D:\WWW\sm\app\templates\pages\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19383550bc61add40a1-79830151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a005901ecbe53e1ab7e9763170144fd15cbd526' => 
    array (
      0 => 'D:\\WWW\\sm\\app\\templates\\pages\\login.tpl',
      1 => 1426666398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19383550bc61add40a1-79830151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550bc61ae4e1c0_97123526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550bc61ae4e1c0_97123526')) {function content_550bc61ae4e1c0_97123526($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("config_tpl.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>联成迅康</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="../public/css/unicorn.login.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
        <div id="logo" class="hidden-desktop">
            <img src="../public/img/logo.png" alt="" />
        </div>
        <div id='content'>
        <div id='pic' class="visible-desktop"><img src="../public/img/login2.jpg" alt="" /></div>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="../control/control_users.php?uid=login" method="post"/>
				<p>用户登录</p>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="用户名" name="username" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="密码" name="password" required/>
                        </div>
                    </div>
                </div>
                 <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-heart"></i></span><input type="text" placeholder="验证码" name="spam"/>
                        </div>
                    </div>
                </div>
                 <div class="control-group">
                    <div class="controls">
                             <img src="../util/spam.php" id="img"/> 
                             <a href="" class="btn-mini">看不清</a>
                    </div>
                </div>
                
                <div class="form-actions" style="height:250px;margin:0px;">
                    <span class="pull-left"><a href="#" class="flip-link" id="to-recover">无法登录?忘记密码?</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-danger" value="登录" /></span>
                </div>
            </form>
<!---->
            <form id="recoverform" action="#" class="form-vertical" />
                <p>请联系系统管理员:QQ343705610</p>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt; 返回登录</a></span>
                    
                </div>
            </form>

        </div>
        </div>
        <?php echo '<script'; ?>
 src="../public/js/jquery.min.js"><?php echo '</script'; ?>
>  
        <?php echo '<script'; ?>
 src="../public/js/unicorn.login.js"><?php echo '</script'; ?>
> 
    </body>
</html>
<?php }} ?>
