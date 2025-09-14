<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificación de edades</title>
</head>
<body>
    <form action="clasificacionEdad.php" method="post">
        Ingrese su edad:
        <input type="number" name="edad" required>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_POST){
        $edad = $_POST['edad'];
        if($edad < 12){
            echo "Eres un niño";
        } elseif($edad >= 12 && $edad < 18){
            echo "Eres un adolescente";
        } elseif($edad >= 18 && $edad < 65){
            echo "Eres un adulto";
        } else {
            echo "Eres un adulto mayor";
        }
    }
    ?>
</body>
</html>