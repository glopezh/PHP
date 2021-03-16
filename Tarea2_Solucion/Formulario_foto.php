<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

define('ALLOWED_IMAGE_TYPES', array('image/jpeg', 'image/png', 'image/gif'));
define('UPLOADS_DIR', __DIR__ . '/uploads/');

function checkImageType(string $filename): void
{
    $imageInfo = getimagesize($filename);
    if (!in_array($imageInfo['mime'], ALLOWED_IMAGE_TYPES)) {
        die('Image type not allowed');
    }
}


function uploadImage(string $temporalName, string $realName): void
{
    $uploaded = move_uploaded_file($temporalName, UPLOADS_DIR . $realName);
    if (!$uploaded) {
        die('You can only upload using HTTP');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    var_dump($_FILES);
    checkImageType($_FILES['userfile']['tmp_name']);
//    var_dump($_FILES['userfile']['tmp_name']);
    uploadImage($_FILES['userfile']['tmp_name'], $_FILES['userfile']['name']);

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

    $output .= "Your Image was uploaded correctly!" . "<br>";
    echo $output;
} else {
    $form_html = <<<HTML
    <form enctype="multipart/form-data" action="Formulario_foto.php" method="POST">
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

        <fieldset>
		    <label for="userfile">Photo</label><br />      
		    <input type="file" name="userfile"/>
		    <input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
        </fieldset>

	    <fieldset class="form-actions">
		    <input type="submit" value="Send!" />
	    </fieldset>
	    
    </form>
HTML;
    echo $form_html;
}