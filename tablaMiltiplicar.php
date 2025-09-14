<?php
    echo "Tabla de multiplicar del 7"."<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "7 x $i = ".(7*$i)."<br>";
    }

  
?>

<?php
  echo "Numero impares del 1 al 20<br>";
    for ($i = 1; $i <= 20; $i+=2) {
        echo $i."<br>";
    } 
?>

<?php
    echo "Suma de numeros con while<br>";
    $i = 1 ;
    $acum = 0;
    while ($i <= 50) {
      $acum += $i;
        $i++;
    }
      echo "La suma de los primeros 50 numeros es: $acum <br>";
?>
<?php
    echo "<br>Factorial de 10<br>";
    $i = 1 ;
    $multi = 1;
    while ($i <= 10) {
        $multi *= $i;  
        $i++;
    }
    echo "El factorial de 10 es: $multi<br>";
?>
<?php 
    echo "Multiplos del 5 entre 1 y 50<br>";
    $i = 1 ;
    while ($i <= 50) {
        if ($i % 5 == 0) {
            echo $i."<br>";
        }
        $i++;
    }
?>
<?php
// echo "Números aleatorios con do-while<br>";
// $i = 1;
// do {
//     $num = rand(1,10);
//     echo "Número aleatorio $i: $num <br>";
//     $i++;
// } while ($i = 10);

?>

<?php
echo "Números aleatorios con do-while<br>";
do {
    $num = random_int(1, 10);
    echo "Número aleatorio: $num <br>";
} while ($num !=10);
?>
