<?php
if($_POST){ 

    $edad = $_POST['edad'];
    
    if($edad >= 18){
        echo "Eres mayor de edad puedes votar";
    } else {
        echo "Eres menor de edad";
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
    <form action ="comprobarEdad.php" method="post">    
        Edad:
        <input type="number" name="edad" required>
        <br>
        <br>
       <input type="submit" value="Comprobar">
</body>
</html>