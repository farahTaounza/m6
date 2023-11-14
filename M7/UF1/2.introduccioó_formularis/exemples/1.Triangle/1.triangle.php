<?php
    /*Creen la variable error  */

    $error;

    /* Recull la informació enviada pel formulari */

    /* Abans d'agafar el valor de la base comprovem que existeix */
    if (!isset($_REQUEST['base'])){
        $error.= "ERROR: No s'envia valor per a la base . <br>";
    } else{
        /* Agafem el valor */
        $base = $_REQUEST["base"];
    }

    /* Abans d'agafar el valor de la base comprovem que existeix */
    if (!isset($_REQUEST['alcada'])){
        error.= "ERROR: No s'envia valor per a l'alçada . <br>";
    } else{
        /* Agafem el valor */
        $alcada = $_REQUEST["alcada"];
    }

    /* Calcular */
    $area = ($base * $alcada)/2;
    

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 1.triangle PHP </title>
</head>

    <?php 
        if (empty($error)){
            echo $error;
        } else{
            $area = ($base * $alcada) / 2;
        }
    ?>

    
    <p> Base: <?php echo $base ?> </p>
    <p> Alçada: <?php echo $alcada ?> </p>
    <hr>
    <p> Valor d'àrea <?php echo $area ?> </p>

<body>
    
</body>
</html>