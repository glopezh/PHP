<?php
/* Archivo que se ejecute por linea de comandos y que recibe como párametro una cadena
de texto con la tarea que queremos añadir a nuestra lista de tareas, como por ejemplo
"Ir al gymnasio". Esta tarea se guardará en el archivo en el disco, que llevara el control
de tareas pendientes*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['task'])) {
        $task = filter_var($_POST['task'], FILTER_SANITIZE_STRING);

        class Tasks
        {
            private $task= array();

            public function add($task): void
            {
                $this->task[] = $task;
            }

            public function get()
            {
                // array_shift devuelve en el resultado de la función el primer elemento y además el array queda almacenado sin (este/)su primer elemento.
                return array_shift($this->task);
            }

            public function count(): int
            {
                return count($this->task);
            }

            public function contains($task_to_search): bool
            {
                return in_array($task_to_search, $this->task);
            }
        }
    }
    $output = new Tasks();
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
