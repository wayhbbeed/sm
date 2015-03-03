<?php
//初始化
require '../sm.inc.php';
require 'dao.php';

//基本操作
$active="xiangqing";
$conten_header="计算机信息系统修改-详细情况";


$smarty->assign('active',$active);
$smarty->assign('c_header',$conten_header);

$smarty->assign('rows',select(1));

//显示设置
$smarty->display('xiangqing.tpl');