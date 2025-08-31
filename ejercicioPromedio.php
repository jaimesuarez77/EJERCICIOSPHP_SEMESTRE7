<?php

if($_POST){

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];

    $promedio = ($valor1 + $valor2 + $valor3 + $valor4) / 4;

    echo "La nota promedio es: $promedio";

    if($promedio >= 3.5) {
        echo " - Aprobado";
    } else {
        echo " - Reprobado";
    }
    exit;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">                                                      
    <meta name="viewport" content="width=device-width, initial-scale=1.0    ">
    <title>Ejercicio Promedio</title>
</head>
<body>                                            
    <form action="ejercicioPromedio.php" method="post"> 
        Nota 1 :
        
        <input type="text" id="" name="valor1" required>
        <br>
        <br>

        Nota 2:
        <input type="text" id="" name="valor2" required>
        <br>
        <br>

        Nota 3:
        <input type="text" id="" name="valor3" required>
        <br>
        <br>
        Nota 4:
        <input type="text" id="" name="valor4" required>
        <br>
        <br>    
        <input type="submit" value="Calcular Promedio"> 
    </form>
</body>
</html