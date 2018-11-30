<DOCTYPE HTML><html>
    <head>
        <title>CINEMA BEEOR</title>
        <link rel="stylesheet" type="text/css" href="CSS/ticket.css">  
    </head>
    <body>
<?php
include "Config/database.php";
if(isset($_POST['submit'])){
   $movie_id=$_POST['movie_id'];
   $username=$_POST['name'];
   $numofticket=$_POST['noticket'];
$stmt = $pdo->query("SELECT * FROM movies WHERE movie_id= $movie_id");   
while ($row = $stmt->fetch()) { 
    if($row[8]>$numofticket){
        $stmt2=$pdo->query("select * from rooms where room_id =$row[6] ");
        $room=$stmt2->fetch();
        $sartticket=($room[2]-$row[8])+1;
        $newavseats=$row[8]-$numofticket;
      $update= $pdo->query("UPDATE movies SET avseats='$newavseats' WHERE movie_id='$movie_id'"); 
        for( $i=$sartticket ;$i<($numofticket+$sartticket);$i++){
            echo "<h1>Ticket</h1><div class='all'>
                  <p>Name : $username</p>
                  <p>Movie : $row[1]</p>
                  <p>Seat : $i</p>
                  <p>Date : $row[3]</p>
                  <p>StartTime : $row[4]</p>
                 <p>EndTime : $row[5]</p>
                 <p>Price : $row[9]</p>
                 <img src='IMAGES/backgrounds/download.jpg'>
                        </div>";
                  
        }
        
    }else
    {
        echo "Only $row[8] Tickets avaliable";
    }
}}
?>
           </body>
    </html>
</DOCTYPE>
