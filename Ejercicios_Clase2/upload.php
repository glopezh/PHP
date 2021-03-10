<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //var_dump($_FILES)
    $allowed_image_types = ['image/jpeg'];
    $image_info = getimagesize($_FILES['userfile']['tmp_name']);
//var_dump($image_info);
    if (!in_array($image_info['mime'], $allowed_image_types)) {
        die('Image type not allowed');
    }
    $file_destination = __DIR__ . '/uploads/' . $_FILES['userfile']['name'];
    $upload = move_uploaded_file($_FILES['userfile']['tmp_name'], $file_destination);
    if (!$upload) {
        die("Something went wrong");
    } else {
        echo "Image uploaded correctly to $file_destination";
    }
} else {
    $form_html = <<<HTML
<form enctype="multipart/form-data" action="upload.php" method="post">
<input type="file" name="userfile">
<input type="hidden" name="MAX_FILE_SIZE" value="300000">
<input type="submit" value="Upload">
</form>
HTML;
    echo $form_html;
}
