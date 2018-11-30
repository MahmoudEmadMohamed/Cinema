<?php 
	include('database.php');
	$create_tbl = "CREATE TABLE IF NOT EXISTS movies(
	movie_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(100) NOT NULL,
	category varchar(250) NOT NULL,
    date varchar(250) NOT NULL,
    stime varchar(250) NOT NULL,
    etime varchar(250) NOT NULL,
    room_id int(11) NOT NULL,
    image varchar(250) NOT NULL,
    avseats int(11) NOT NULL,
	price int(11) NOT NULL);";
    $pdo->exec($create_tbl);
   $create_tbl2 = "CREATE TABLE IF NOT EXISTS rooms(
	room_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(100) NOT NULL,
    noseats int(11) NOT NULL);";
	$pdo->exec($create_tbl2);
$insert="insert into rooms(room_id,name,noseats) values ('1', 'BigWhole','100')
, ('2', 'magicRoom','60'),
('3','privateRoom','20');";
 $pdo->exec($insert);
?>
