<?php
if($_POST){ 

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if($num1 > $num2){
        echo "El numero mayor es: " . $num1;
    } elseif($num2 > $num1){
        echo "El numero mayor es: " . $num2;
    } else {
        echo "Ambos numeros son iguales.";
    }
 
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar dos numeros</title>
</head>
<body>
    <form action="comparar.php" method="post">
        Numero 1:
        <input type="number" name="num1" required>
        <br>
        <br>
        Numero 2:
        <input type="number" name="num2" required>
        <br>
        <br>
       <input type="submit" value="Enviar">
    </form>
</body>
</html>