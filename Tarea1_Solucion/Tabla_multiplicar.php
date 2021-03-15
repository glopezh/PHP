#!/usr/bin/env php
<?php
/* Tarea 1. Crea un programa en PHP que, dado un número como parámetro, muestre la tabla de multiplicar de ese número de 0 a 12, ambos incluidos. Una vez ejecutado el programa, veremos el resultado de multiplicar el parámetro dado por cada número de la tabla de multiplicar entre 0 y 12. Cada resultado será mostrado en una línea nueva, de forma que es fácil de leer. En total, se mostrarán 13 líneas.
*/

if ($argc !== 2) {
    echo "Usage: php ejercicio_1.php [number]." . PHP_EOL;
    exit(1);
}

if (!is_numeric($argv[1])){
    echo "Usage: php ejercicio_1.php [number]. Where [number] must be a number" . PHP_EOL;
    exit(1);
}

$multiplier = $argv[1];

for($multiplicand=0;$multiplicand<13;$multiplicand++)
{
//  echo "$argv[1] * $i = " $argv[1]*$i. "\n";
  echo "$multiplier * $multiplicand = ";
  echo $multiplier * $multiplicand. "\n";
}
?>
