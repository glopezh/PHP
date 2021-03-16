<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");

include_once __DIR__ . '/priorityqueue.php';

// COLA CON PRIORIDAD
echo "creo la cola con prioridad";
$colaprioridad = new PriorityQueue();
var_dump($colaprioridad); //cola vacía

echo "agrego tres elementos: alice, bob y john e imprimo la cola y la cantidad de elementos";
$colaprioridad->add('alice', 2);
$colaprioridad->add('bob', 0);
$colaprioridad->add('john', 1);
var_dump($colaprioridad); //muestra los 3 elementos
var_dump($colaprioridad->count()); // Prints 3

echo "quito el primer elemento de la cola, imprimo dicho primer elemento y la cola sin dicho elemento";
$primero = $colaprioridad->get(); // bob porque tiene prioridad 0
var_dump($primero); //muestra bob
var_dump($colaprioridad); //muestra la cola sin bob

echo "pregunto si alice y luego si bob están en la cola";
var_dump($colaprioridad->contains('alice')); //true
var_dump($colaprioridad->contains('bob')); //false