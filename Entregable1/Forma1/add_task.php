<?php
/* Archivo que se ejecute por linea de comandos y que recibe como párametro una cadena
de texto con la tarea que queremos añadir a nuestra lista de tareas, como por ejemplo
"Ir al gymnasio". Esta tarea se guardará en el archivo en el disco, que llevara el control
de tareas pendientes*/

$addTask = array("Go to the GYM\n","Go shopping\n","Do my homework\n");
$file_task= "control_task.txt";
file_put_contents($file_task,$addTask);