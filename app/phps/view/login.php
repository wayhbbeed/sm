<?php
//初始化
require '../sm.inc.php'; 

//获取登陆人员
$users=dao_users::getusers();
$smarty->assign('users',$users);

//显示设置
$smarty->display('pages/login.tpl');