<?php
include('constants.php');
function createDB($name){
	try {
		$db = new PDO("mysql:host=".DB_HOST, DB_USER, DB_PASS);
		$db->exec("create database if not exists $name");
	} catch (Exception $e) {
		die("DB Error: ".$e->getMessage());
	}
}
createDB('Cinema'); 


?>
