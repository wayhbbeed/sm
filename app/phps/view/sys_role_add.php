<?php
//初始化
require_once '../sm.inc.php';
require '../util/security.php';

$active="sys_role";
$content_header="用户角色-添加角色";
$smarty->assign('active',$active);
$smarty->assign('c_header',$content_header);

//显示设置
$smarty->display('pages/sys_role_add.tpl');