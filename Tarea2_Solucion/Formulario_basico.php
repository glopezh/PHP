<?php
// 2.	Crea un script PHP que muestre un formulario HTML al usuario. El formulario debe contener:
//a.	Los campos de texto name, email, phone y age.
//b.	Un selector llamado gender para elegir el género del usuario.
//c.	Un selector para poder elegir uno o varios de los siguientes hobbies: reading, football, computers, music.
//3.	Al enviar el formulario, se mostrarán por pantalla los valores enviados por el usuario. Los campos que el usuario no haya rellenado no se mostrarán.

error_reporting(E_ALL);
ini_set("display_errors", true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $output = "";
    if (!empty($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $output .= "Your name is: " . $name . "<br>";
    }
    if (!empty($_POST['age'])) {
        $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
        $output .= "You are " . $age . " years old." . "<br>";
    }
    if (!empty($_POST['gender'])) {
        $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
        $output .= "You are a " . $gender . "<br>";
    }
    if (!empty($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $output .= "I can contact you in this email address: " . $email;
    }
    if (!empty($_POST['phone'])) {
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $output .= " or with this phone number: " . $phone . "<br>";
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
    <form action="Formulario_basico.php" method="POST">
	    <fieldset>
		    <label for="name">Name</label>
		    <input type="text" id="name" name="name" class="form-text" />

		    <label for="email">Email</label>
		    <input type="email" id="email" name="email" class="form-text" required />

		    <label for="age">Age</label>    
		    <input type="number" id="age" name="age" class="form-text" required />

		    <label for="phone">Phone</label>
		    <input type="tel" id="phone" name="phone" class="form-text" />
	    </fieldset>

	    <fieldset>
		    <label for="gender">Gender</label>
		    <select id="gender" name="gender">
			    <option>Male</option>
			    <option>Female</option>
			    <option>I'd rather not to say</option>
		    </select>
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