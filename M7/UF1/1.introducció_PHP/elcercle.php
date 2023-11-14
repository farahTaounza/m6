<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> El Cercle </title>
</head>
<body>
   
    

    <?php

    # Genera el radi aleatori entre 50 i 100
    $radi = rand (50,100);
    
    # Genera color aleatori entre 1 i 3
    $numColor = rand(1,3);

    #Declara la variable color i li assigna valor en funció del número de color

    $color = "";


    if ($numColor == 1){
        $color = "red";
    } else if ($numColor ==2){
        $color = "green";
    } else {
        $color = "blue";
    }

   
    ?>

    <h1> El Cercle </h1>
    <hr>
    <h2> Radi: <?php echo $radi ?> </h2>
    <h2> Color: <?php echo $color ?> </h2>
 

    <svg width="200" height="200">
        <circle cx="100" cy="100" r= <?php echo $radi ?> stroke="black"
            stroke-width="2" fill= <?php echo $color ?> >
    </svg>
   
   

</body>
</html>