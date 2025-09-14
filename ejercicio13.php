<?php
$i = 1 ;

$multi = 1;
$acum = 0;
while ($i <= 20) {
    
    $acum += $i;  
    $multi *= $acum;  
    $i++;
}
echo "La suma de los primeros 20 numeros es: $multi";



?>