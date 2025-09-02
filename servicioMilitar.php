<?php
if($_POST){ 

    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    
    if($edad >= 18 && $genero == 'masculino'){
        echo "Debes realizar el servicio militar";
    } else {
        echo "No debes realizar el servicio militar";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio Militar</title>
</head>
<body>
    <form action ="servicioMilitar.php" method="post">    
        Edad:
        <input type="number" name="edad" required>
        <br>
        <br>
        Género:
         <select name="genero" required>
            <option value="">Seleccione un género</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
       <input type="submit" value="Comprobar">
</body>
</html>