<?php 

if(isset($_POST['ticket'])){

?>
<DOCTYPE HTML>
    <html>
        <head>
            <title>CINEMA BEEOR</title>
            <link rel="stylesheet" type="text/css" href="CSS/payment.css">
        </head>
        <body>
            <form action="ticket.php" method="post" enctype="multipart/form-data">
                <table>    
                    <div><tr><th><label for="name">Name</label></th>
                    <th><input type="text" name="name" required></th></tr></div>
                <div><tr><th><label for="card">Card Number</label></th>
                   <th> <input type="text" name="card" required></th></tr></div>
                <div><tr><th><label for="noticket">Number of Tickets</label></th>
                   <th> <input type="text" name="noticket" required></th></tr></div>
                </table>
                <input type="hidden" name="movie_id" value="<?php echo $_POST['ticket']; } ?>">
                <button type="submit" name="submit">Submit</button>
            </form>
        </body>
    </html>
</DOCTYPE>