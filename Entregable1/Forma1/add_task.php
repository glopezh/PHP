<?php
/* Archivo que se ejecute por linea de comandos y que recibe como párametro una cadena
de texto con la tarea que queremos añadir a nuestra lista de tareas, como por ejemplo
"Ir al gymnasio". Esta tarea se guardará en el archivo en el disco, que llevara el control
de tareas pendientes*/
error_reporting(E_ALL);
ini_set("error_tasks", true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $output = "";
    if (!empty($_POST['task'])) {
        $task = filter_var($_POST['task'], FILTER_SANITIZE_STRING);
        $output .= "La tarea es: " . $task . "<br>";
    }

echo $output;
} else {
    $form_html = <<<HTML
    <form action="add_task.php" method="POST">
     <fieldset>
    <h1>List of tasks</h1>

    <ol id="todo-list" class="todo-list">
      <li class="todo todo-completed" data-todo-id="123">
        <input type="checkbox" checked>
        <input class="todo-text" type="text" readonly value="Avanzar entregable 1">
      </li>
      <li class="todo" data-todo-id="456">
        <input type="checkbox">
        <input class="todo-text" type="text" readonly value="Avanzar entregable 2">
      </li>
    </ol>

    <div class="new-todo">
      <input id="task" class="todo-text-edit" type="text" value="">
    </div>
	    <fieldset class="form-actions">
		    <input type="submit" value="Send!" />
	    </fieldset>
    </form>
HTML;
    echo $form_html;
}