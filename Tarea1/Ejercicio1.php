<?php
/*Crea un programa en PHP que, dado un número como parámetro, muestre la tabla de multiplicar de ese número
de 0 a 12, ambos incluidos. Una vez ejecutado el programa, veremos el resultado de multiplicar el parámetro
dado por cada número de la tabla de multiplicar entre 0 y 12. Cada resultado será mostrado en una línea nueva,
de forma que es fácil de leer. En total, se mostrarán 13 líneas.*/

for ($i = 0; $i < 12; $i++) {
    $producto=4;
    $producto = $producto * $i;
    echo $producto.PHP_EOL;
}
?>