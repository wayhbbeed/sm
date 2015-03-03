<?php

if(!isset($_SESSION['se_name']))
{
	$jumpUrl='../view/login.php';
	$smarty->assign('singer',_SIN_ERROR);
	$smarty->assign('message',_ERR_ACCESS);
	$smarty->assign('jumpUrl',$jumpUrl);
	$smarty->display('pages/dispatch_jump.tpl');
	die(); 
}

