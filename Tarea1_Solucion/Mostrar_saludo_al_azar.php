<?php
/**
 * Crea un programa en PHP que muestre un saludo.
 * El programa tiene un array de posibles saludos,
 * y cada vez que es llamado, pinta uno al azar.
 * También se puede pasar un número como parámetro para elegir un saludo específico.
 */

$saludos = array("Buenos días", "Buen día", "Good morning", "Guten Morgen", "Bonjour", "Bom día");

if (isset($argv[1])) {
    if (isset($saludos[$argv[1]])) {
        $saludo = $argv[1];
    } else {
        die("debes escoger uno de los " . count($saludos) . " mensajes, poniendo un número del 0 al " . (count($saludos) - 1) . PHP_EOL);
    }
} else {
    // También valdría $saludo = array_rand($saludos);
    $saludo = mt_rand(0, count($saludos) - 1);
}

echo $saludos[$saludo] . PHP_EOL;
