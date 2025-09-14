<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número positivo o negativo</title>
</head>
<body>
    <form action="numeroPositivo.php" method="post">
        Ingrese un número:
        <input type="number" name="num" required>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_POST){
        $num = $_POST['num'];
        if($num > 0){
            echo "El número es positivo";
        } elseif($num < 0){
            echo "El número es negativo";
        } else {
            echo "El número es cero";
        }
    }
    ?>
</body>
</html>