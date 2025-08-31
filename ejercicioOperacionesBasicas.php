<?php



if($_POST){

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $suma = $valor1 + $valor2;
    $resta = $valor1 - $valor2;
    $multiplicacion = $valor1 * $valor2;
    if($valor2 != 0){
        $division = $valor1 / $valor2;
        echo "La suma es: $suma <br> La resta es: $resta <br> La multiplicación es: $multiplicacion <br> La división es: $division";
    } else {
        echo "La suma es: $suma <br> La resta es: $resta <br> La multiplicación es: $multiplicacion <br> No se puede dividir por cero.";
    }
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0    ">
    <title>Ejercicio 2</title>
</head>
<body>                                              
    <form action="ejercicio2.php" method="post">

        Numero 1:
        
        <input type="text" id="" name="valor1" required>
        <br>
        <br>

        Numero 2:
        <input type="text" id="" name="valor2" required>
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>