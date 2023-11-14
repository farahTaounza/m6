<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuari</title>
    </head>
    <body>
        <?php
            # ELIMINA etiquetes html i javascript, codifica ' i ".
            # No elimina espais en blanc sobrers ni comprova que sigui buit.
            $usuari = filter_input(INPUT_GET, "usuari", FILTER_SANITIZE_STRING);
           
            # Eliminem espais en blanc sobrers del principi i del final
            $usuari = trim($usuari);
            
            # Comprova que no sigui buit abans d'escriure
            if (empty($usuari)) {
                echo "<p>USUARI no té valor</p>";                
            } else {
                echo "<p>|$usuari|</p>";
            }
                        
        ?>        

        <?php $usuari=$_REQUEST[$usuari] echo $usuari; ?>
        <hr>
        <input type="text" value="<?php echo $usuari?>">
    </body>
</html>


