<?php
//初始化
require_once '../sm.inc.php';
require '../util/security.php';

$smarty->assign('active',"sys_perm");
$smarty->assign('c_header',"用户管理-权限添加");

//显示设置
$smarty->display('pages/sys_perm_add.tpl');