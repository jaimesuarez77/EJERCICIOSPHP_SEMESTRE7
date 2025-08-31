<?php
if($_POST){ 

    $base = $_POST['base'];
    $altura = $_POST['altura'];
    
    $area = $base * $altura / 2;
    
    echo "El area del rectangulo es: " . $area;
 
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
    <form action="areaRectangulo.php" method="post">
        Base:
        <input type="number" name="base" required>
        <br>
        <br>
        Altura:
        <input type="number" name="altura" required>
        <br>
        <br>
       <input type="submit" value="Enviar">
</body>
</html>