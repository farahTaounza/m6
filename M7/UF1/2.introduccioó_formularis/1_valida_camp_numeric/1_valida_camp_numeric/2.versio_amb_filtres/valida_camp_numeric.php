<?php 
    #######################################################################
    # 
    # Pàgina PHP que rep base i alçada un valor numèric del formulari form_camp_numeric.html
    # i comprova que:
    #   - hi hagi un valor a la petició: isset()
    #   - que no sigui buit: empty()
    #   - que sigui un valor enter: is_numeric()
    # 
    #######################################################################

    # Incialitza el missatge d'error
    $error = "";
    
    # Comprova si s'ha enviat un numero a la petició
    if (!isset($_REQUEST["numero"])) {
        $error .= "No s'ha enviat cap número";
    } else {
        # Hi ha un número a la petició
        # Obté el valor del número
        $numero = $_REQUEST['numero'];
        
        # Comprova que no sigui buit
        if (empty($numero)) {
            $error .= "El valor del número és buit";
        } else {
            # Comprova que sigui un valor enter
            if (!is_numeric($numero)) {
                $error .= "NUMERO no té un valor enter";
            } else {
                # Tot OK
                # ??
            }                
        }        
    }
    
    # Decideix en funció de l'error si les comprovacions són correcte o no
    if (empty($error)) {
        # Error BUIT -> tot OK
        echo "<h2>Número: $numero</h2>";
    } else {
        # Error no BUIT -> Hi ha hagut un error
        echo "<h2>ERROR: $error";
    }
    
    
    #if (is_int(13)) {
    #    echo "<br>numero 13 ";        
    #}
    
    #if (is_int("13")) {
   #     echo "<br>numero \"13 \"";        
   # }

    
?>