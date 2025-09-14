<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
</head>
<body>

    <h1>Cálculo cuadrado y raiz de un numero</h1>

    <form action="ejercicio16.php" method="post">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Calcular">

    </form>

    <?php
    if ($_POST) {
        $numero = $_POST['numero'];
        $raiz = sqrt($numero);
        echo "El cuadrado de $numero es: ".pow($numero,2) ."<br>";
        echo "La raíz cuadrada de $numero es: $raiz <br>";
     
        echo "El numero en binario de $numero es: ".decbin($numero)."<br>";

        echo "La Raiz cúbica de  $numero es: ".pow($numero,1/3)."<br>";
    }
    ?>
    
</body>
</html>