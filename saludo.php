<?php

if($_GET){ 

    $nombre = $_GET['nombre'];
    
    echo "Hola, " . $nombre . "! Bienvenido a nuestro sitio web.";
  
 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">                                                      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <form action="saludo.php" method="get">
        Nombre:
        <input type="text" name="nombre" required>
        <br>
        <br>
       <input type="submit" value="Enviar">


</body>
</html>