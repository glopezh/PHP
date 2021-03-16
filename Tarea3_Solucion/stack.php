<?php
error_reporting(E_ALL);
ini_set( "display_errors", "on" );

include_once __DIR__ . '/stack.php';

// PILA (LIFO)
echo "creo la pila";
$pila= new Stack();
var_dump($pila); //pila vacía
echo "agrego tres elementos: alice, bob y john e imprimo la pila y la cantidad de elementos";
$pila->add('alice');
$pila->add('bob');
$pila->add('john');
var_dump($pila); //muestra los 3 elementos
var_dump($pila->count()); // Prints 3

echo "quito el primer elemento de la PILA, imprimo dicho primer elemento y la PILA sin dicho elemento";
$primero = $pila->get();
var_dump($primero); //muestra alice
var_dump($pila); //muestra la cola sin alice

echo "pregunto si john y luego si bob están en la cola";
var_dump($pila->contains('john')); //false
var_dump($pila->contains('bob')); //true