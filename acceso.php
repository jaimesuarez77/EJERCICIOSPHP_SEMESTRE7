<?php
if($_POST){ 

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    if($usuario == "admin" && $contrasena == "1234"){
        echo "Acceso concedido.";
    } else {
        echo "Acceso denegado.";
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
    <form action="acceso.php" method="post">
        Usuario:
        <input type="text" name="usuario" required>
        <br>
        <br>
        Contraseña:
        <input type="password" name="contrasena" required>
        <br>
        <br>
       <input type="submit" value="Enviar">
    </form>
    
</body>
</html>