<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de los tres</title>
</head>
<body>
    <form action = "mayor.php" method = "post">
        Ingrese el primer numero:
        <input type="number" name="num1" required>
        <br>
        <br>
        Ingrese el segundo numero:
        <input type="number" name="num2" required>
        <br>
        <br>
        Ingrese el tercer numero:
        <input type="number" name="num3" required>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_POST){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3']; 
        if($num1 > $num2 && $num1 > $num3){
            echo "El numero mayor es: $num1";
        } elseif($num2 > $num1 && $num2 > $num3){
            echo "El numero mayor es: $num2";
        } else {
            echo "El numero mayor es: $num3";
        }
    }
    ?>
</body>
</html>