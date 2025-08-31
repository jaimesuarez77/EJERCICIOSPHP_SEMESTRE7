<?php
if($_POST){ 

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    

    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "Email: " . $email . "<br>";
  
 
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
    <form action="registro.php" method="post">
        Nombre:
        <input type="text" name="nombre" required>
        <br>
        <br>
        Apellido:
        <input type="text" name="apellido" required>
        <br>
        <br>
        Email:
        <input type="email" name="email" required>
        <br>
        <br>
       <input type="submit" value="Registrarse">
</body>
</html>