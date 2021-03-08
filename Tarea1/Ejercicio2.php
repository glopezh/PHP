<?php
/*Crea un programa en PHP que sume/reste/multiplique/divida dos números dados, permitiendo elegir la
operación a realizar. ¿Qué ocurre cuando dividimos entre 0? Asegúrate de mostrar al usuario un mensaje de
error cuando intente dividir entre 0.*/


$operando1 = 0;
$operando2 = 3;
$operador ="/";

if ($operador == "+") {
    $solucion = $operando1 + $operando2;
} else if ($operador == "-") {
    $solucion = $operando1 - $operando2;
} else if ($operador == "*") {
    $solucion = $operando1 * $operando2;
} else if ($operando1 =="0" and $operador=="/"){
    $solucion = "indeterminado";
} else if ($operador == "/" and $operando2 =="0") {
    $solucion = "undefined";
} else if ($operador == "/"and $operando2 !=="0" and $operando1 !=="0")
    $solucion = $operando1/$operando2;
echo "La solución es: " . $solucion.PHP_EOL;

