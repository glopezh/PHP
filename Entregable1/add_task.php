<?php
/* Archivo que se ejecute por linea de comandos y que recibe como párametro una cadena
de texto con la tarea que queremos añadir a nuestra lista de tareas, como por ejemplo
"Ir al gymnasio". Esta tarea se guardará en el archivo en el disco, que llevara el control
de tareas pendientes*/
error_reporting(E_ALL);
ini_set("display_homeworks", true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $output = "";
    if (!empty($_POST['homework'])) {
        $name = filter_var($_POST['homework'], FILTER_SANITIZE_STRING);
        $output .= "Your homework is " . $name . "<br>";
    }
    if (!empty($_POST['hobbies'])) {
        $output .= "Your hobbies are:<ul>";
        foreach ($_POST['hobbies'] as $hobby) {
            $cleanedHobby = filter_var($hobby, FILTER_SANITIZE_STRING);
            $output .= "<li>$cleanedHobby</li>";
        }
        $output .= "</ul>";
    }

    echo $output;
} else {
    $form_html = <<<HTML
    <form action="add_task.php" method="POST">
	    <fieldset>
		    <label for="homework">Name</label>
		    <input type="text" id="homework" name="homework" class="form-text" />
	    </fieldset>
	    
	    <fieldset>
		    <label for="hobbies">Hobbies</label><br />
		    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
		    <input type="checkbox" name="hobbies[]" value="Football"> Football
		    <input type="checkbox" name="hobbies[]" value="Computers"> Computers
		    <input type="checkbox" name="hobbies[]" value="Music"> Music
	    </fieldset>

	    <fieldset class="form-actions">
		    <input type="submit" value="Send!" />
	    </fieldset>
    </form>
HTML;
    echo $form_html;
}

