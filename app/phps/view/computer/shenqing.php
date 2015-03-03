<?php
//初始化
require_once '../../sm.inc.php';
require '../../control/security.php';

$active="com_shenqing";

$se_name=$_SESSION['se_name'];
$no=date('ymd').substr(microtime(),2,4);
// $active="shenqing";
$conten_header="计算机信息系统修改-申请单";

$smarty->assign('thedate',$no);
$smarty->assign('active',$active);
$smarty->assign('c_header',$conten_header);


//显示设置
$smarty->display('pages/computer/shenqing.tpl');