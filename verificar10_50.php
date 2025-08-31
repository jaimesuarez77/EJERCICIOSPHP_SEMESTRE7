<?php
if($_POST){ 

    $num = $_POST['num'];
    
    if($num >= 10 && $num <= 50){
        echo "El numero " . $num . " esta entre 10 y 50.";
    } else {
        echo "El numero " . $num . " no esta entre 10 y 50.";
    }
 
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verificar10_50.php" method="post">
        Numero:
        <input type="number" name="num" required>
        <br>
        <br>
       <input type="submit" value="Enviar">
    </form>
    
</body>
</html>