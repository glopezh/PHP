#!/usr/bin/env php
<?php
/* 
Tarea 3. Cambia la calculadora que acabas de realizar para que pueda recibir un número variable de parámetros (en vez de siempre dos), y aplicar la operación a todos ellos.
         Haz que la resta y la división se vayan aplicando de izquierda a derecha.
*/
if (!isset($argv[1], $argv[2], $argv[3])) {
    die('You need to insert the operation and at least two numbers.' . PHP_EOL);
}
$operator = filter_var($argv[1], FILTER_SANITIZE_STRING);
$operators = ["add", "substract", "multiply", "divide"];
if (!in_array($operator, $operators)) {
    die("The valid operators are: " . implode(", ", $operators) . PHP_EOL);
}
for ($parameterIndex = 2; $parameterIndex < $argc; $parameterIndex++) {
    if (!is_numeric($argv[$parameterIndex])) {
        echo "Usage: php ejercicio_13.php [operator] [number] [number].... Where [number] must be a number" . PHP_EOL;
        exit(1);
    }
}

$result = $argv[2];
if ($operator === 'add') {
    for ($parameterIndex = 3; $parameterIndex < $argc; $parameterIndex++) {
        $result = $result + $argv[$parameterIndex];
    }
}
if ($operator === 'multiply') {
    for ($i = 3; $i < $argc; $i++) {
        $result = $result * $argv[$i];
    }
}
if ($operator === 'substract') {
    for ($i = 3; $i < $argc; $i++) {
        $result = $result - $argv[$i];
    }
}
if ($operator === 'divide') {
    for ($i = 3; $i < $argc; $i++) {
        if ((int)$argv[$i] === 0) {
            die('You can\'t divide by 0' . PHP_EOL);
        }
        $result = $result / $argv[$i];
    }
}
echo $result . PHP_EOL;
?>
