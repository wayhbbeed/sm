<?php 
	/**
	 * @Tony W  select insert delete update
	 */
	class db_ms{

		public static function conn(){
			$server ="LPP-20140312390\s2008";  //服务器IP地址,如果是本地，可以写成localhost，本例是多个实例
			$uid ="sa";  //用户名
			$pwd ="sql2008"; //密码
			$database ="DD";  //数据库名称
			//进行数据库连接
			$conn =mssql_connect($server,$uid,$pwd) or die ("connect failed");
			$s=mssql_select_db($database,$conn);
			return $s; 
		}
		/**
		 * WHILE条件查询，返回数组
		 */
		public static function select_ms_query(){
            self::conn();
            //执行查询语句
			$sql ="select * from medReport where mr_id =?";
			$rs =mssql_query($sql,100);
			  
			//打印输出查询结果
			while($list=mssql_fetch_array($rs))
			{
			       print_r($list);
			       // echo "<br>";
			}
        }
            
      

//class end
}
db_ms::select_ms_query();