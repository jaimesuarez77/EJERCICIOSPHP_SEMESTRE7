<?php
if($_POST){ 

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    

    echo "Usuario: " . $usuario . "<br>";
    echo "Contraseña: " . $contrasena . "<br>";
  
 
    if(isset($_POST['verificar_contrasena'])){
        $verificar_contrasena = $_POST['verificar_contrasena'];
        if($contrasena === $verificar_contrasena){
            echo "Las contraseñas coinciden.";
        } else {
            echo "Las contraseñas no coinciden.";
        }
}}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        Usuario:
        <input type="text" name="usuario" required>
        <br>
        <br>
        Contraseña:
        <input type="password" name="contrasena" required>
        <br>
        <br>
        Verificar contraseña:
        <input type="password" name="verificar_contrasena" required>
        <br>
        <br>    
        
       <input type="submit" value="Verificar">
    </form>
</body>
</html>