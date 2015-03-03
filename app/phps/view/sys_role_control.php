<?php
//初始化
require_once '../sm.inc.php';
require '../util/security.php';

// p($_SESSION);
$smarty->assign('data_mod',dao_users::getperm("",1));
$smarty->assign('data_menu',dao_users::getperm("",2));
$smarty->assign('active',"sys_role");
$smarty->assign('c_header',"修改权限");
$smarty->assign('roleid',$_GET['roleid']);

//显示设置
$smarty->display('pages/sys_role_control.tpl');