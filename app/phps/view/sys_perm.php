<?php
//初始化
require_once '../sm.inc.php';
require '../util/security.php';

$active="sys_perm";
$content_header="权限管理";
$smarty->assign('active',$active);
$smarty->assign('c_header',$content_header);
$smarty->assign('data',dao_users::getall("perm"));

//显示设置
$smarty->display('pages/sys_perm.tpl');