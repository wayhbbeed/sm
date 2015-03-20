<?php
//初始化
require_once '../sm.inc.php';
require '../util/security.php';

$active="sys_role";
$content_header="角色管理";
$smarty->assign('active',$active);
$smarty->assign('c_header',$content_header);
$smarty->assign('data',dao_users::getall("role"));

//显示设置
$smarty->display('pages/sys_role.tpl');