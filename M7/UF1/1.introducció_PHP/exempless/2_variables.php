<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title> 2 variables php </title>
</head>

<body>
        <?php
        define ("COLOR", "VERD") ;
        define ("NUMERO", 26);
        $nom ="Pepe";
        $numero =25;
        ?>
        <p>Valor de nom: <?php echo $nom ?> </p>
        <p>Valor de $nom: <?php echo $nom ?> </p>
        <p>Tipus de $nom: <?php echo gettype($nom) ?> </p>
        <hr>
        <p>valor de $numero: <?php echo $numero ?> </p>
        <p>Tipus de $numero: <?php echo gettype($numero) ?> </p>
        <hr>
        <p>Color: <?php echo COLOR ?> </p>
        <p>Numero: <?php echo NUMERO ?> </p>
</body>

</html>

