<?php
require '../sm.inc.php';

$server ="LPP-20140312390\s2008";  //服务器IP地址,如果是本地，可以写成localhost，本例是多个实例
$uid ="sa";  //用户名
$pwd ="sql2008"; //密码
$database ="CDTXYYBJP";  //数据库名称
//进行数据库连接
$conn =mssql_connect($server,$uid,$pwd) or die ("connect failed");
mssql_select_db($database,$conn);
 
//执行查询语句
$query ="select TOP 10 * from medreport";
$row =mssql_query($query);
  
//打印输出查询结果
while($list=mssql_fetch_row($row))
{
       print_r($list[6].'<br/>');
       // echo "<br>";
}


