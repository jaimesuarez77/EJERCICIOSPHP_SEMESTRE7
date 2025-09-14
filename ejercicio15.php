<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números se parados por comas</title>
</head>
<body>
    <form action="ejercicio15.php" method="post">
        Introduce números separados por comas:
        <input type="text" name="numeros" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_POST) {
        $numeros = $_POST['numeros'];
        $array_numeros = explode(',', $numeros);
        
        $max = max($array_numeros);
        $min = min($array_numeros);
        $media = array_sum($array_numeros) / count($array_numeros);
        
        echo "Número mayor: $max<br>";
        echo "Número menor: $min<br>";
        echo "Media: $media<br>";
    }
    ?>
</body>
</html>