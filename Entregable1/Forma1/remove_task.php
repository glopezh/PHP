/*Al borrar una tarea, la guarde en otro fichero en disco de tareas completadas. Asi podremos
tener un fichero con las tareas todavia pendientes, y otro con las tareas ya realizadas*/

<?php

$file_task= "control_task.txt";
$file_task_completed= "completed_task.txt";
$read_task=file_get_contents($file_task);
//var_dump($read_task);
$array = explode("\n", $read_task);
//var_dump($array);
//PROCESO DE ELIMINAR LA TAREA
if (($task_completed = array_search("Do my homework", $array)) !== false) {
    unset($array[$task_completed]);
    var_dump($task_completed);
    file_put_contents($file_task,$array);
    file_put_contents($file_task_completed,$task_completed);
}
echo "Tareas no completadas";
echo file_get_contents($file_task).PHP_EOL;
echo "Tareas completadas";
echo file_get_contents($file_task_completed).PHP_EOL;
