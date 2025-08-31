
<?php

if($_POST){


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];

    echo "Hola, $nombre $apellido. Tienes $edad años. Tu correo es $correo.";
    exit;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
     <form action="ejercicio1.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"  pattern="[A-Z a-z]{3,40}" required>
        <br>
         <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
          <br>
        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
