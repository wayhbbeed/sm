<?php
//初始化
require_once '../sm.inc.php';
require '../util/security.php';

$data=dao_users::select(array("name","position"),"role");
$smarty->assign('data',$data);
$smarty->assign('active',"sys_users");
$smarty->assign('c_header',"用户管理-添加用户");

//显示设置
$smarty->display('pages/sys_users_add.tpl');