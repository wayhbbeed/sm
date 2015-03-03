<?php
//初始化
require '../sm.inc.php';
require '../util/security.php';

// p($_REQUEST);

$active="main";
$conten_header="欢迎来到首页";

$smarty->assign('active',$active);
$smarty->assign('c_header',$conten_header);

//显示设置
$smarty->display('pages/main.tpl');