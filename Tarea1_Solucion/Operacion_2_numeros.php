#!/usr/bin/env php
<?php
/* 
Tarea 2. Crea un programa en PHP que
sume/reste/multiplique/divida dos números dados,
 permitiendo elegir la operación a realizar.
¿Qué ocurre cuando dividimos entre 0? Asegúrate de mostrar al usuario un
mensaje de error cuando intente dividir entre 0.
*/

if (!isset($argv[1], $argv[2], $argv[3])) {
    die('You need to insert the operation and two numbers.' . PHP_EOL);
}

if (!(is_numeric($argv[2]) and is_numeric($argv[3]))){
    echo "Usage: php ejercicio_12b.php [operator] [number] [number]. Where [number] must be a number" . PHP_EOL;
    exit(1);
}
$operator = filter_var($argv[1], FILTER_SANITIZE_STRING);
$operators = ["add", "substract", "multiply", "divide"];

if (!in_array($operator, $operators)) {
    die("The valid operators are: " . implode(", ", $operators) . PHP_EOL);
}

if ($operator === 'add') {
    echo "$argv[2] + $argv[3] = ";
    echo $argv[2] + $argv[3] . PHP_EOL;
    return $argv[2] + $argv[3];
}

if ($operator === 'multiply') {
    echo "$argv[2] * $argv[3] = ";
    echo $argv[2] * $argv[3] . PHP_EOL;
    return $argv[2] * $argv[3];
}

if ($operator === 'substract') {
    echo "$argv[2] - $argv[3] = ";
    echo $argv[2] - $argv[3] . PHP_EOL;
    return $argv[2] - $argv[3];
}

if ($operator === 'divide') {
    if ((int)$argv[3] === 0) {
        die('You can\'t divide by 0' . PHP_EOL);
    }
    echo "$argv[2] / $argv[3] = ";
    echo $argv[2] / $argv[3] . PHP_EOL;
    return $argv[2] / $argv[3];
}

?>
