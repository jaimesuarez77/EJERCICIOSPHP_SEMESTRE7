<?php
if($_POST){ 

    $num = $_POST['num'];
    
    if($num > 100){
        echo "El numero es mayor a 100";
    } elseif($num < 100){
        echo "El numero es menor a 100";
    } else {
        echo "El numero es igual a 100";
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
    <form action="validar100" method="post">    
        Numero:
        <input type="number" name="num" required>
        <br>
        <br>
       <input type="submit" value="Enviar">
    </form>
    
</body>
</html>