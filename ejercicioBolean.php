<?php
if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if($valorA === $valorB){
        echo "Los valores son iguales.";
    } else {
        echo "Los valores son diferentes.";
    }
    exit;
}




?>
<doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">                  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Boolean</title>
</head>
<body>
    <form action="ejercicioBolean.php" method="post">
        ValorA:
        <input type="text" id="" name="valorA" required>
        <br>
        <br>
        ValorB:
        <input type="text" id="" name="valorB" required>
        <br>
        <br>
        <input type="submit" value="Verificar"> 

        
    </form>
</body>
</html> 