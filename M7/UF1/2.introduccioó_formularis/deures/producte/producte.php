<?php
    
    $marca = $_REQUEST["marca"];
    $preu = $_REQUEST["preu"];
    $preuambiva = $_REQUEST["preuiva"];
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

h1{
            background-color: rgb(129, 201, 177);
            color: rgb(31, 31, 146);
            border: 1px;
            padding: 10px;
            border-radius: 1cqmax;
        }

        body{
            margin: 20px;
        }

        p{
            background-color: rgb(216, 209, 209);
            border-radius: 1cqmax;
            padding-left: 10px;
            padding-bottom: 15px;
            padding: 20px;
            font-size: larger;
            
        }

        #button{
            font-size: larger;
            padding: 10px;
        }

        #button:hover{
            background-color: rgb(113, 188, 113);
            font-size: 20px;
            transition: ease-in-out;
        }

        select{
            font-size: larger;
        }

        input{
            font-size: larger; 
        }

        label{
            font-size: larger; 
        }


        h2{
            background-color: rgb(248, 172, 160);
            border: 1px;
            padding: 10px;
            border-radius: 1cqmax;
        }

       
        
    </style>
    <title> Producte PHP </title>
</head>

<body>

    <?php
        /* Calcular */
        $preufinal= $preu * ($preuambiva/100) + $preu;
    ?>


    <h1> Resultats del formulari: </h1>

    <form action="producte.php" method="get">
    
    <p>
                <label for="marca"> Selecciona la marca * <br> <br> </label>
                <select style="padding: 7px;" name="marca" id="tipus_IVA">
                    <option value="Seat" <?php if ($marca=== 'Seat') echo 'selected'; ?>> Seat </option> 
                    <option value="Audi" <?php if ($marca === 'Audi') echo 'selected'; ?> > Audi </option>
                    <option value="Volswagen" <?php if ($marca === 'Volswagen') echo 'selected'; ?>> Volswagen </option>
                    <option value="Volvo" <?php if ($marca === 'Volvo') echo 'selected'; ?> > Volvo </option>
                    <option value="Peugeot" <?php if ($marca === 'Peugeot') echo 'selected'; ?> > Peugeot </option>
                    <option value="Citroen" <?php if ($marca === 'Citroen') echo 'selected'; ?> > Citroen </option>
                    <option value="Cupra" <?php if ($marca === 'Cupra') echo 'selected'; ?> > Cupra </option>
                </select><br>
            </p>
    
            <p>
                <label for="preu"> Preu sense IVA * <br> <br> </label>
                <input style="padding: 7px;" type="number" name="preu" id="preu" placeholder="Preu sense iva" autofocus required value="<?php echo htmlspecialchars($preu); ?>"> 
            </p>
    
            <section>
                <p>
                    <label for="preuiva"> Tipus d'IVA * <br> </label> <br>
                    <input type="radio" name="preuiva" id="iva4%" value="4" <?php if ($preuambiva === '4') echo 'checked'; ?>>
                    <label for="iva4%"> 4% </label> <br>
                    <input type="radio" name="preuiva" id="iva8%" value="8" <?php if ($preuambiva === '8') echo 'checked'; ?>>
                    <label for="iva8%"> 8% </label> <br> 
                    <input type="radio" name="preuiva" id="iva21%" value="21" <?php if ($preuambiva === '21') echo 'checked'; ?>> 
                    <label for="iva21%"> 21% </label>
                </p>
            </section>
    
    <h2> Preu final  <?php echo $preufinal?> € </h2>
</body>
</html>