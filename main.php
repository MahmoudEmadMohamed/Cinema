<DOCTYPE HTML><html>
    <head>
        <title>CINEMA BEEOR</title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css">  
    </head>
    <body>
        <h1>CINEMA BEEOR</h1>
        <?php
include "Config/database.php";
$select="select * from movies";
$stmt = $pdo->query("SELECT * FROM movies");
while ($row = $stmt->fetch()) { 
         echo "<div class='flowingdown'>"
           ."<div class='hvrbox'>"
          ."<img src='IMAGES/$row[7]' >" ;  ?>      
         <?php echo "<div class='hvrbox-layer_top'><div class='hvrbox-text'> "
            ."<p>$row[1]</p>".
              "<p>$row[2]</p>".
              "<p>$row[3]</p>".
              "<p>$row[4]-$row[5]</p>".
              "<p>$row[9]$</p>"
              ."<form action='payment.php' method='post'><button type='submit' name='ticket' value='$row[0]'>Ticket</button></form>"
         ."</div> </div>
            </div>
        </div>";} ?>

        </body>
    </html>
</DOCTYPE>
