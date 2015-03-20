<?php
require_once '../sm.inc.php';
$mod=dao_users::getall('users');

echo "<pre>";
var_dump($mod);

// echo "string";