<?php
//初始化
require '../sm.inc.php';

//基本操作

$active="renwu";
$conten_header="计算机信息系统修改-任务查询";

$all_task=null;

$smarty->assign('active',$active);
$smarty->assign('c_header',$conten_header);
$smarty->assign('all_task',$all_task);

//显示设置
$smarty->display('renwu.tpl');