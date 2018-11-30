<?php
include_once('constants.php');
     $RDBMType = DB_TYPE;  
     $username = DB_USER;
     $password = DB_PASS;
     $dbhost = DB_HOST;
     $database =DB_DATABASE;

   try{
        //Connection string
   	$pdo = new PDO($RDBMType . ":host=" . $dbhost . ";dbname=" . $database, $username,
   	$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
       }
    catch(PDOException $e){
             echo "Connection failed: " . $e->getMessage();
    }
?>

