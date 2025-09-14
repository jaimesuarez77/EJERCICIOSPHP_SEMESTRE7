<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <h1>TABLA DE DIVISION</h1>
    <form action="ejercicio18.php" method="post">
        Ingrese un numero:
        <input type="number" name="num" required>
        <br>
        <br>
       <input type="submit" value="Generar tabla">
    </form>
    <?php
    if($_POST){     
        $num = $_POST['num'];
        echo "<h2>Tabla de division del $num</h2>";
        for($i=1; $i<=10; $i++){
            $resultado = $num / $i;
            echo "| $num / $i = ".round($resultado,1) ."|"."<br>";
        }
    }                   
    ?>
</body>
</html>