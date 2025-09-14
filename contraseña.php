<?php
$password = "admin123";
$password_ingresado = $_POST['password'];
if($_POST){
    if($password == $password_ingresado){
        echo "Contraseña correcta";
    } else {
        echo "contraseña incorrecta";
    }
    }

    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseña</title>   
</head>
<body>
    <form action="contraseña.php" method="post">    
        Contraseña:
        <input type="password" name="password" required>
        <br>
        <br>                    
         <input type="submit" value="Enviar">   
    </form>
</body>
</html> 