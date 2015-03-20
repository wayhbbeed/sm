
<?php
//初始化
require_once '../sm.inc.php';

// extract(var_array);
$uid=$_REQUEST['uid'];
//根据条件控制
switch ($uid)
{
//申请页面
case "login":
		//获取表单
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		// $spam=$_REQUEST['spam'];
		// $spamc=$_SESSION['spamc'];
		$passw=dao_users::checkpass($username);

		// if($password!='' & $spam==$spamc){//开启验证码
		if($password!=''){
			if($passw==$password){
				// store session data
				$_SESSION['se_name']=$username;
				//获取模块菜单权限等
				$mod=dao_users::getmod($username);
				$menus=dao_users::getmenus($username);
				$button=dao_users::getbutton($username);
				$group=dao_users::getgroup($username);
				$_SESSION['mod']=$mod;
				$_SESSION['menus']=$menus;
				$_SESSION['button']=$button;
				$_SESSION['group']=$group;
				//进行跳转
				$jumpUrl='../view/main.php';
				$smarty->assign('singer',_SIN_SUCCESS);
				$smarty->assign('message',_SUC_LOGIN);
				$smarty->assign('jumpUrl',$jumpUrl);
				$smarty->display('pages/dispatch_jump.tpl');
				//确保重定向后，后续代码不会被执行 
				// exit;
			 
			}else{
				//密码错误
				$jumpUrl='../view/login.php';
				$smarty->assign('singer',_SIN_ERROR);
				$smarty->assign('message',_ERR_LOGIN);
				$smarty->assign('jumpUrl',$jumpUrl);
				$smarty->display('pages/dispatch_jump.tpl'); 
				
			}
		}else{
			    //验证码错误或密码为空
		        $jumpUrl='../view/login.php';
				$smarty->assign('singer',_SIN_ERROR);
				$smarty->assign('message',_ERR_LOGIN_SPAM);
				$smarty->assign('jumpUrl',$jumpUrl);
				$smarty->display('pages/dispatch_jump.tpl');
				
		}
	        	
break;

//退出请求
case "quit":
        // unset($_SESSION['auth']);
		session_destroy();
		
		$jumpUrl='../view/login.php';
		$smarty->assign('singer',_SIN_SUCCESS);
		$smarty->assign('message',_SUC_LOGOUT);
		$smarty->assign('jumpUrl',$jumpUrl);
		$smarty->display('pages/dispatch_jump.tpl');    	
break;

//立刻刷新权限
case "refresh":
		$username=$_SESSION['se_name'];
		$mod=dao_users::getmod($username);
		$menus=dao_users::getmenus($username);
		$button=dao_users::getbutton($username);
		$group=dao_users::getgroup($username);
		$_SESSION['mod']=$mod;
		$_SESSION['menus']=$menus;
		$_SESSION['button']=$button;
		$_SESSION['group']=$group;  
		//重新跳转
		header('location:../view/main.php');
break;

/**
 * 
 +用户
 */
//查询所有用户
case "allusers":
		$allusers=dao_users::getall("view_users");
		$active="sys_users";
        $content_header="用户管理";
        $smarty->assign('active',$active);
		$smarty->assign('c_header',$content_header);
		$smarty->assign('data',$allusers);
		$smarty->display('pages/sys_users.tpl');
break;

//添加用户
case "addusers":
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$live=$_REQUEST['live'];
		
		$checkusers=dao_users::checkusers($username);
		$check=$checkusers?$checkusers:0;
		// echo $check;
		if ($check===0) {
			$afteradd=dao_users::adduser($username,$password,$live);
			//进行跳转
			SUCCESS_COM($smarty,'../view/sys_users_add.php');
		} else {
			//错误跳转
			ERROR_COM($smarty,'../view/sys_users_add.php');
		}
break;

//更新用户状态
case "changlive":
		$id=$_GET['id'];
		$live=$_GET['live'];
		$changlive=dao_users::changlive("users",$live,$id);
		if ($changlive) {
			//进行跳转
			SUCCESS_COM($smarty,'../control/control_users.php?uid=allusers');
		} else {
			//错误跳转
			ERROR_COM($smarty,'../control/control_users.php?uid=allusers');
		}
		
break;

/**
 * 
 +角色
 */
//查询所有角色
case "allrole":
		$allrole=dao_users::getall("role");
		$active="sys_role";
        $content_header="角色管理";
        $smarty->assign('active',$active);
		$smarty->assign('c_header',$content_header);
		$smarty->assign('data',$allrole);
		$smarty->display('pages/sys_role.tpl');
break;

//添加角色
case "allrole":
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$live=$_REQUEST['live'];
		
		$checkusers=dao_users::checkrole($username);
		$check=$checkusers?$checkusers:0;
		// echo $check;
		if ($check===0) {
			$afteradd=dao_users::adduser($username,$password,$live);
			//进行跳转
			SUCCESS_COM($smarty,'../view/sys_users_add.php');
		} else {
			//错误跳转
			ERROR_COM($smarty,'../view/sys_users_add.php');
		}
break;

//更新角色状态
case "changliverole":
		$id=$_GET['id'];
		$live=$_GET['live'];
		$table="role";
		$changlive=dao_users::changlive($table,$live,$id);
		if ($changlive) {
			//进行跳转
			SUCCESS_COM($smarty,'../control/control_role.php?uid=allusers');
		} else {
			//错误跳转
			ERROR_COM($smarty,'../control/control_role.php?uid=allusers');
		}
		
break;

/**
 * 
 +权限
 */
//查询所有权限
case "allperm":
		$all=dao_users::getall("perm");
        $smarty->assign('active',"sys_perm");
		$smarty->assign('c_header',"权限管理");
		$smarty->assign('data',$all);
		$smarty->display('pages/sys_perm.tpl');
break;

//添加权限
case "allrole":
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$live=$_REQUEST['live'];
		
		$checkusers=dao_users::checkrole($username);
		$check=$checkusers?$checkusers:0;
		// echo $check;
		if ($check===0) {
			$afteradd=dao_users::adduser($username,$password,$live);
			//进行跳转
			SUCCESS_COM($smarty,'../view/sys_users_add.php');
		} else {
			//错误跳转
			ERROR_COM($smarty,'../view/sys_users_add.php');
		}
break;

//更新权限状态
case "changliverole":
		$id=$_GET['id'];
		$live=$_GET['live'];
		$changlive=dao_users::changlive("role",$live,$id);
		if ($changlive) {
			//进行跳转
			SUCCESS_COM($smarty,'../control/control_role.php?uid=allusers');
		} else {
			//错误跳转
			ERROR_COM($smarty,'../control/control_role.php?uid=allusers');
		}
		
break;


default:
    echo "错误页面";
break;

}

//显示设置
// $smarty->display('shenqing.tpl');