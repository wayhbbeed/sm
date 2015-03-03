<?php 
	/**
	 * @Tony W  select insert delete update
	 */
	class db{

		public static function conn(){
			$dbh = new PDO('mysql:host=localhost;dbname=appli', 'root', ''); 
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            $dbh->exec('set names utf8'); 
			return $dbh;
		}
		/**
		 * WHILE条件查询，返回数组
		 */
		public static function select_query($sql,$values){
            $dbh=self::conn();
            /*查询*/  
            $stmt = $dbh->prepare($sql);    
            $stmt->execute($values);    

            $arr = array();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {       
                   $arr[]=$row ;      
            };   
            return $arr;
            // 现在运行完成，在此关闭连接
            $stmt=null;
            $dbh = null;
            }  
        /**
         * foreach 查询单个值
         */
		public static function select_single($sql,$values){
		            $dbh=self::conn();
		            /*查询*/  
		            $stmt = $dbh->prepare($sql);    
		            $stmt->execute($values);    
                    $single=null;
					foreach($stmt as $rows){
					     $single=$rows[0];
					}
					return $single;
		           
		            // 现在运行完成，在此关闭连接
		            $stmt=null;
		            $dbh = null;
		           }
		 //插入
		public static function insert($sql,$values){
		            $dbh=self::conn();
		            /*插入*/  
		            $stmt = $dbh->prepare($sql);    
		            $stmt->execute($values);    
		            $lastid=$dbh->lastinsertid(); 
					return $lastid;
		            // 现在运行完成，在此关闭连接
		            $stmt=null;
		            $dbh = null;
		}
		//更新
		public static function update($sql,$values){
		            $dbh=self::conn();
		            /*更新*/  
		            $stmt = $dbh->prepare($sql);    
		            $stmt->execute($values);    
		            $count=$stmt->rowCount();
					return $count;
		            // 现在运行完成，在此关闭连接
		            $stmt=null;
		            $dbh = null;
		}

//class end
}