<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dia setmana PHP </title>
</head>
<body>

    <h1> DIA SETMANA ALEATORI </h1>

    <hr>

    <?php

    $dia; 
    $num_dia = rand (1, 7);
    echo "Número de dia: $num_dia" . "<br>";
   
/*
    if ($num_dia==1){
        $diasetmana= "Dilluns";
    } else if ($num_dia==2){
        $diasetmana= "Dimarts";
    }else if ($num_dia==3){
        $diasetmana= "Dimecres";
    }else if ($num_dia==4){
        $diasetmana=  "Dijous";
    }else if ($num_dia==5){
        $diasetmana= "Divendres";
    }else if ($num_dia==6){
        $diasetmana=  "Dissabte";
    }else if ($num_dia==7){
        $diasetmana= "Diumenge";
    }

   

    <p> Dia de la setmana: <?php echo $diasetmana ?> </p> */

    switch($num_dia){
        case 1: 
            $dia = "Dilluns";
            break;
        case 2:
            $dia = "Dimart";    
            break;
        case 3:
            $dia = "Dimecres";
            break;
        case 4:
            $dia = "Dijous";
            break;
        case 5:
            $dia = "Divendres";
            break;
        case 6: 
            $dia = "Dissabte";    
            break;
        case 7:
            $dia = "Diumenge";
            break;
    }

    

    ?>
    
    <p> Dia de la setmana: <?php echo $dia?> </p> 

</body>
</html>