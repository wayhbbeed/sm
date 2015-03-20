<?php
//初始化
require_once '../sm.inc.php';
require '../util/security.php';

$active="sys_users";
$content_header="用户管理";
$smarty->assign('active',$active);
$smarty->assign('c_header',$content_header);
//初始化查询信息
$smarty->assign('data',dao_users::getall("view_users"));

//显示设置
$smarty->display('pages/sys_users.tpl');