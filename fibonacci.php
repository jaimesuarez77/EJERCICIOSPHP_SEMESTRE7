<?php
for ($i = 1; $i <=12; $i++) {    
    echo "Fibonacci de $i: ".round((pow((1+sqrt(5))/2,$i)-pow((1-sqrt(5))/2,$i))/sqrt(5))."<br><br>";
}
echo "Numero ";
$int = 2;
$num  = decbin($int);
echo "El número en binario es: $num <br><br>";

$numeros = [12,7,89,23,45];
$max = max($numeros);
echo "El número mayor es: $max <br>";    
$min = min($numeros);
echo "El número menor es: $min <br>";    
$media = array_sum($numeros) / count($numeros);
echo "La media es: $media"; 

?>