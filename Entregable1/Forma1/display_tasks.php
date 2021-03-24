

<?php

/* Al ejecutarse por línea de comandos nos muestre las tareas pendientes de hacer que tenemos guardadas en disco.*/

$file_task= "control_task.txt";
$display_task= file_get_contents($file_task);
echo $display_task.PHP_EOL;

