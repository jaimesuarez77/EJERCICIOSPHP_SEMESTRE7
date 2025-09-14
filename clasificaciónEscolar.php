<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificaión escolar</title>
</head>
<body>
    <form action="clasificacionEscolar.php" method="post">
        Ingrese la nota:
        <input type="number" name="nota" required>
        <br>
        <br>                                            
            <input type="submit" value="Enviar">
    </form>
    <?php
    if($_POST){
        $nota = $_POST['nota'];
        if($nota >= 0 && $nota < 50){
            echo "Repropado";
        } elseif($nota >= 50 && $nota < 65){
            echo "Regular";
        } elseif($nota >= 65 && $nota < 80){
            echo "Bueno";
        } elseif($nota >= 80 && $nota < 90){
            echo "Excente";
        } elseif($nota >= 90 && $nota <= 100){
            echo "Sobresaliente";
        } else {
            echo "Nota no válida";
        }}
    ?>
</body>
</html>