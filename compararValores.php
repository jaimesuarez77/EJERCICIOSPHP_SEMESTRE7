<?php
if($_POST){ 

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    
    if($valor1 > $valor2){
        echo "El valor 1 es mayor que el valor 2";
    } elseif($valor1 < $valor2){
        echo "El valor 1 es menor que el valor 2";
    } else {
        echo "Ambos valores son iguales";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compararValores</title>
</head>
<body>
    <form action ="compararValores.php" method="post">    
        Valor 1:
        <input type="number" name="valor1" required>
        <br>
        <br>
        Valor 2:
        <input type="number" name="valor2" required>
       <input type="submit" value="Comparar">   
</body>
</html>