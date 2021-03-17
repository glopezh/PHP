

<?php

/* Archivo que al ejecutarse por linea de comandos nos permita eliminar una tarea pendiente de la lista
guardada en el fichero. Este script recibe como parámetro una cadena de texto con la tarea a eliminar*/

echo file_get_contents(Forma1/'task.txt');