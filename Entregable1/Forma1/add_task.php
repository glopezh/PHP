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


        }
        $output .= "Your task is " . $task . "<br>";

    }

    echo $output;
} else {
    $form_html = <<<HTML
    <form action="add_task.php" method="POST">
	    <fieldset>
		    <label for="Ingrese la tarea">Task</label>
		    <input type="checkbox" id="task" name="task" class="form-text" />
	    </fieldset>
	    
	    <fieldset class="form-actions">
		    <input type="submit" value="Send!" />
	    </fieldset>
    </form>
HTML;
    echo $form_html;
}

