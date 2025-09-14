<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinar si el numero es par o inpar</title>
</head>
<body>
    <form action="numeroparinpar.php" method="post">
        Ingrese un numero:
        <input type="number" name="num" required>
        <br>
        <br>
       <input type="submit" value="Enviar">
    </form>
    <?php
    if($_POST){     
        $num = $_POST['num'];
        if($num % 2 == 0){
            echo "El numero es par";
        } else {
            echo "El numero es inpar";
        }
    }                   
    ?>  
</body>
</html>