<?php

//创建连接
function con() {
            $dbh = new PDO('mysql:host=localhost;dbname=appli', 'root', ''); 
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            $dbh->exec('set names utf8'); 
			return $dbh;
}
//查询自增编号的任务页面
function select($appid){
try{
            $dbh=con();
            /*查询*/  
            $stmt = $dbh->prepare('SELECT * FROM approve where appid = ?');    
            $stmt->execute(array($appid));    
            $arr = array();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {       
                   $arr[]=$row ;      
            }; 
            return $arr;
             
            // 现在运行完成，在此关闭连接
            $dbh = null;
            }catch(PDOException $e){  
			
            print"Error!:".$e->getMessage()."<br/>";  
            die();  
            }  
}
//查询是否已存在的单据编号
function select_appno($appno){
try{
            $dbh=con();
            /*查询*/  
            $stmt = $dbh->prepare('SELECT count(*) FROM approve where appno = ?');    
            $stmt->execute(array($appno));   
			foreach ($stmt as $cc){
				$total=$cc[0];
			}
            return $total;
             
            // 现在运行完成，在此关闭连接
            $dbh = null;
            }catch(PDOException $e){  
			echo 'nonono';
            // print"Error!:".$e->getMessage()."<br/>";  
            die();  
            }  
}
//查询所有任务
function select_all(){
try{
            $dbh=con();
            /*查询*/  
            $stmt = $dbh->prepare('SELECT * FROM approve');    
            $stmt->execute();    
            $arr = array();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {       
                   $arr[]=$row ;      
            };  
            return $arr;
             
            // 现在运行完成，在此关闭连接
            $dbh = null;
            }catch(PDOException $e){  
            print"Error!:".$e->getMessage()."<br/>";  
            die();  
            }  
}

//条件查询
function select_query($sql,$values){
try{
            $dbh=con();
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
            $dbh = null;
            }catch(PDOException $e){  
            print"Error!:".$e->getMessage()."<br/>";  
            die();  
            }  
}

//所有插入操作
function insert($sql,$values){
try{
            $dbh=con();
            /*插入*/  
            $stmt = $dbh->prepare($sql);    
            $stmt->execute($values);    
            $lastid=$dbh->lastinsertid(); 
			return $lastid;
            // 现在运行完成，在此关闭连接
            $dbh = null;
            }catch(PDOException $e){  
            print"Error!:".$e->getMessage()."<br/>";  
            die();  
            }  
}

//更新
function update($sql,$values){
try{
            $dbh=con();
            /*插入*/  
            $stmt = $dbh->prepare($sql);    
            $stmt->execute($values);    
            $count=$stmt->rowCount();
			return $count;
            // 现在运行完成，在此关闭连接
            $dbh = null;
            }catch(PDOException $e){  
            print"Error!:".$e->getMessage()."<br/>";  
            die();  
            }  
}

?>