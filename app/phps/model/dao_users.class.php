<?php

class dao_users extends db{
	 //获取登陆人员
	 public static function getusers(){
	 	$sql="select username from users where live=?";
		$values=array(1);
		$users=parent::select_query($sql,$values);
		return $users;
	 }

      //检查密码
      public static function checkpass($username){
            $sql='select password from users where username=?';
            $values=array($username);
            $passw=parent::select_single($sql,$values);
            return $passw;
      }
/**
 * 
 +获取权限
 */
      //获取模块
      public static function getmod($username){
      		$sql="SELECT "
				 ."perm.id,perm.pid,perm.type,perm.info,perm.name,perm.url,perm.title,perm.icon "
				 ."FROM "
				 ."users " 
				 ."INNER JOIN users_role ON users_role.users_id = users.id "
				 ."INNER JOIN role ON users_role.role_id = role.id "
				 ."INNER JOIN role_perm ON role_perm.role_id = role.id "
				 ."INNER JOIN perm ON role_perm.perm_id = perm.id "
				 ."WHERE users.username = ? "
				 ."AND (perm.type=1)";     
			$values=array($username);
			$mod=parent::select_query($sql,$values);
			return $mod;
      }

      //获取菜单
      public static function getmenus($username){
      		$sql="SELECT "
				 ."perm.id,perm.pid,perm.type,perm.info,perm.name,perm.url,perm.title,perm.icon "
				 ."FROM "
				 ."users "
				 ."INNER JOIN users_role ON users_role.users_id = users.id "
				 ."INNER JOIN role ON users_role.role_id = role.id "
				 ."INNER JOIN role_perm ON role_perm.role_id = role.id "
				 ."INNER JOIN perm ON role_perm.perm_id = perm.id "
				 ."WHERE users.username = ? "
				 ."AND (perm.type=2)";     
			$values=array($username);
			$menus=parent::select_query($sql,$values);
			return $menus;
      }

      //获取按钮
      public static function getbutton($username){
      		$sql="SELECT "
				 ."perm.id,perm.pid,perm.type,perm.info,perm.name,perm.url,perm.title,perm.icon "
				 ."FROM "
				 ."users "
				 ."INNER JOIN users_role ON users_role.users_id = users.id "
				 ."INNER JOIN role ON users_role.role_id = role.id "
				 ."INNER JOIN role_perm ON role_perm.role_id = role.id "
				 ."INNER JOIN perm ON role_perm.perm_id = perm.id "
				 ."WHERE users.username = ? "
				 ."AND (perm.type=4)";     
			$values=array($username);
			$button=parent::select_query($sql,$values);
			return $button;
      }
      //获取所在部门
      public static function getgroup($username){
      		$sql="SELECT "
				 ."role.name "
				 ."FROM "
				 ."users "
				 ."INNER JOIN users_role ON users_role.users_id = users.id "
				 ."INNER JOIN role ON users_role.role_id = role.id "
				 ."WHERE users.username = ? ";
			$values=array($username);
			$group=parent::select_single($sql,$values);
			return $group;
      }
      //通用获取权限方法(所有内容)
      public static function getperm($username='',$type=0){
          $sql="SELECT "
         ."perm.id,perm.pid,perm.type,perm.info,perm.name,perm.url,perm.title,perm.icon "
         .",role.name rolename,role.position "
         ."FROM "
         ."users "
         ."INNER JOIN users_role ON users_role.users_id = users.id "
         ."INNER JOIN role ON users_role.role_id = role.id "
         ."INNER JOIN role_perm ON role_perm.role_id = role.id "
         ."INNER JOIN perm ON role_perm.perm_id = perm.id "
         ."WHERE users.username like CONCAT(?,'%') "
         ."AND (perm.type like CONCAT(?,'%')) ";     
          $values=array($username,$type);
          $mod=parent::select_query($sql,$values);
          return $mod;
      }
       //通用获取权限方法(指定内容)
      public static function getperms($data,$username='',$type=0){
          $sql="SELECT "
         .$data 
         ." FROM "
         ." users "
         ." INNER JOIN users_role ON users_role.users_id = users.id "
         ." INNER JOIN role ON users_role.role_id = role.id "
         ." INNER JOIN role_perm ON role_perm.role_id = role.id "
         ." INNER JOIN perm ON role_perm.perm_id = perm.id "
         ." WHERE users.username like CONCAT(?,'%') "
         ." AND (perm.type like CONCAT(?,'%')) ";     
          $values=array($username,$type);
          $mod=parent::select_query($sql,$values);
          return $mod;
      }
      /**
       * 
       +系统模块公用
       */
      //更新状态
      public static function changlive($table,$live,$id){
      	    $sql="UPDATE ".$table." SET live = ? WHERE id=?";
			      $values=array($live,$id);
			return parent::update($sql,$values);
      }
       //查询所有
      public static function getall($table){
      		$sql="SELECT * FROM  ".$table;
			    $values=array();
			return parent::select_query($sql,$values);
      }
      //通用查询方法
      public static function select($filed,$table,$con=""){
          if (is_array($filed)) {
              $data="";
              foreach ($filed as $key => $value) {
                 $data.=$value;
                 $data.=",";
              }
              // $check=$checkusers?$checkusers:0;
              $cons=$con?$con:"";
              $sql=" SELECT ".rtrim($data, ",")." FROM  ".$table." ".$cons;
              // echo $sql.'<br>';
              $values=array();
              return parent::select_query($sql,$values);
          } else {
              throw new Exception('filed is NOT ARRAY()'); 
              return false;
          }
   
      }

      /**
        * 
         +用户操作相关
        */ 
      //增加用户
      public static function adduser($username,$password,$live){
      	    $sql="insert into users(username,password,live) values(?,?,?)";
			$values=array($username,$password,$live);
			return parent::insert($sql,$values);
      }
      //检查用户是否存在
      public static function checkusers($username){
      	    $sql="select id from users where username=?";
			$values=array($username);
			return parent::select_single($sql,$values);
      }
      /**
       * 
       +角色操作相关
       */
      //增加角色
      public static function addrole($username,$password,$live){
      	    $sql="insert into users(username,password,live) values(?,?,?)";
			      $values=array($username,$password,$live);
			      return parent::insert($sql,$values);
      }
      //检查角色是否存在
      public static function checkrole($username){
      	    $sql="select id from role where name=?";
    			  $values=array($username);
    			  return parent::select_single($sql,$values);
      }
      /**
       * 
       +权限操作相关
       */
      //增加角色
      public static function addperm($username,$password,$live){
      	    $sql="insert into users(username,password,live) values(?,?,?)";
			$values=array($username,$password,$live);
			return parent::insert($sql,$values);
      }
      //检查角色是否存在
      public static function checkperm($username){
      	    $sql="select id from users where username=?";
			$values=array($username);
			return parent::select_single($sql,$values);
      }

//EDN CLASS
} 


