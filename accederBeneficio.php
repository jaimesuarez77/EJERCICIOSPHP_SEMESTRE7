<?php
if($_POST){ 

    $edad = $_POST['edad'];
    $rol = $_POST['rol'];
    
    if($edad >= 18 && $rol == 'estudiante'){
        echo "Puedes acceder al beneficio";
    } else {
        echo "No puedes acceder al beneficio";
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
    <form action ="accederBeneficio.php" method="post">    
        Edad:
        <input type="number" name="edad" required>
        <br>
        <br>
        Rol:
         <select name="rol" required>
            <option value="">Seleccione un rol</option>
            <option value="estudiante">Estudiante</option>
            <option value="profesor">Profesor</option>
            <option value="administrador">Administrador</option>
        </select>
       <input type="submit" value="Comprobar">
</body>
</html>