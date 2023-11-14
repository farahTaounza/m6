<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cartas </title>
</head>
<body>


    <?php
       $carta = rand(1,10);
      
        /* echo "<h2> Ha sortit la carta : $carta </h2>";
        
        echo "<img src= \ "cartas/c$carta.svg\">";
        
        **/
    ?>

    
    <h2>Ha sortit la carta : <?php echo $carta ?> </h2>
    <img src="c<?php echo $carta?>.svg">
    

</body>
</html>