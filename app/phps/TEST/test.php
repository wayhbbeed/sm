<?php
require_once '../sm.inc.php';

// print_r($filed);
// echo count($filed);
// $data="";
// foreach ($filed as $key => $value) {
// 	# code...
// 	// echo $key;
// 	$data.= $value;
// 	$data.=",";
// }
// echo rtrim($data, ",");

// die();
// $filed="name";
$filed=array("name","id","position");
$table="role";
$con="where id =1";
$mod=dao_users::select($filed,$table,$con);

var_dump($mod);
// echo "string";