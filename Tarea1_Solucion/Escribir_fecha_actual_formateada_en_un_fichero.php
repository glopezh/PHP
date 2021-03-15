<?php
/**
 * Escribir y leer ficheros del disco con PHP.
 * Crea un archivo PHP que al ejecutarse por línea de comandos
 * escribe en un fichero la fecha actual con el formato 14/07/2016 20:30:59.
 */
define('NOMBRE_FICHERO', '/tmp/ejercicio_21');

$date = new DateTime();
file_put_contents(NOMBRE_FICHERO, $date->format('d/m/Y H:i:s'));