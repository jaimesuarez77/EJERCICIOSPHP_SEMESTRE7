<?php
    if($_POST){

        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if($valorA && $valorB){
            echo "La compuerta AND es verdadera.";
        } else {
            echo "La compuerta AND es falsa.";
        }

        echo "<br>";

        if($valorA || $valorB){
            echo "La compuerta OR es verdadera.";
        } else {
            echo "La compuerta OR es falsa.";
        }

        echo "<br>";

        if(!$valorA){
            echo "La compuerta NOT A es verdadera.";
        } else {
            echo "La compuerta NOT A es falsa.";
        }

        echo "<br>";

        if(!$valorB){
            echo "La compuerta NOT B es verdadera.";
        } else {
            echo "La compuerta NOT B es falsa.";
        }
        if(($valorA < $valorB)||($valorA == $valorB)){
            echo "<br> La compuerta  es verdadera.";
        } else {
            echo "<br> La compuerta  es falsa.";
        }

        exit;
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
    <form action="ejercicioCompuertas.php" method="post">
        <label for="valorA">Valor A:</label>
        <input type="text" id="valorA" name="valorA" required>
        <br>
        <br>
        <label for="valorB">Valor B:</label>
        <input type="text" id="valorB" name="valorB" required>
        <br>
        <br>
        <input type="submit" value="Verificar">
    </form>
    
</body>
</html>