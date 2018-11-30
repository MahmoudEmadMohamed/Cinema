<?php 
include "../Config/database.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $category=$_POST['category'];
    $date=$_POST['date'];
    $stime=$_POST['stime'];
    $etime=$_POST['etime'];
    $room=$_POST['room'];
    $price=$_POST['price'];
    $imagename=$_FILES["image"]["name"]; 
    $query="select * from rooms where room_id =:room_id ;";
    $sth = $pdo->prepare($query);
    $sth->execute(array(':room_id' => $room));
    $red = $sth->fetch();
    $avseats= $red[2];
    $insert="insert into movies(name , category , date , stime , etime , room_id , image ,avseats , price) values 
    ('$name','$category','$date','$stime','$etime','$room' ,'$imagename','$avseats','$price') ";
    if($pdo->exec($insert)){
        echo "Movie is added";
    }else
    {
     echo "Movie can't added";   
    }
    

}
?>
<DOCTYPE HTML>
    <html>
        <head>
            <title>CINEMA BEEOR</title>
            <link rel="stylesheet" type="text/css" href="CSS/add.css">
        </head>
        <body>
            <form action="add.php" method="post" enctype="multipart/form-data">
                <table>    
                    <div><tr><th><label for="name">Movie Name</label></th>
                    <th><input type="text" name="name" required></th></tr></div>
                <div><tr><th><label for="category">Movie Category</label></th>
                    <th><input type="text" name="category" required></th></tr></div>
                <div><tr><th><label for="date">Movie Date</label></th>
                   <th> <input type="date" name="date" required></th></tr></div>
                <div><tr><th><label for="stime">Movie StartTime</label></th>
                   <th> <input type="time" name="stime" required></th></tr></div>
                <div><tr><th><label for="etime">Movie EndTime</label></th>
                   <th> <input type="time" name="etime" required></th></tr></div>
                <div><tr><th><label for="room">Movie Room_Id</label></th>
                   <th> <input type="text" name="room" required></th></tr></div>
                <div><tr><th><label for="image">Movie Image</label></th>
                   <th> <input type="file" name="image" required></th></tr></div>
                <div><tr><th><label for="price">Movie Price</label></th>
                   <th> <input type="text" name="price" required></th></tr></div>
                </table>
                <button type="submit" name="submit">ADD</button>
            </form>
        </body>
    </html>
</DOCTYPE>