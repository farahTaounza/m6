<?php
    #######################################################################
    # 
    # Pàgina PHP que rep un valor numèric del formulari form_camp_numeric.html
    # i comprova que:
    #   - hi hagi un valor a la petició: isset()
    #   - que no sigui buit: empty()
    #   - que sigui un valor enter: is_int()
    # 
    #######################################################################
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php                    
                
            # SEGONA VERSIÓ: TRACTANT CADA ERROR PER SEPARAT
            $numero = filter_input(INPUT_GET, "numero", FILTER_VALIDATE_INT);
             
            if ($base===false) {
                echo "Número no és un valor enter !<br>";                
            } else if(is_null($numero)) {
                echo "No s'envia valor per a Número !<br>";
            }
            else {
                echo "valor de la base: $numero <br>";
            }
        
        ?>
        <hr>
        
        <?php
            # SEGONA VERSIÓ
            # Afegim opció que no sigui negatiu i no distingim entre errors
            
            # $options=array('options'=>array('default'=>5, 'min_range'=>0, 'max_range'=>9));
            $options=array('options'=>array('min_range'=>0));
            
            $base = filter_input(INPUT_GET, "base", FILTER_VALIDATE_INT, $options);
            
            # Comprova que no hi hagi error
            $error = "";
            if ($base===false || is_null($base)) {
                $error .= "Valor de la base incorrecte";
            }
            
            
            if (empty($error)) {
                echo "Valor de la base: $base";
            } else {
                echo "ERROR: $error<br>";
            }
            
        ?>
        
        <p> <a href="filter_input.html">Filter_input</a> </p>
    </body>
</html>
