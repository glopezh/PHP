<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $output = "";
    if (!empty($_POST['username'])) {
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $output .= "Se ingreso correctamente el username" . $username;
    }
    if (!empty($_POST['username'])) {
        $password = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $output .= "Se ingreso correctamente el password" . $password;
    }

} else {
    $form_html = <<<HTML
<form action="action_page.php" method="post">
<!--  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>-->

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input id ="text" type="text" placeholder="Enter Username" name="username" required  data-validate = "Username is required">

    <label for="psw"><b>Password</b></label>
    <input id ="password" type="password" placeholder="Enter Password" name="psw" required data-validate = "Password is required">

    <button type="submit">Login</button>
    
    /*Se le debe de agregar una cookie para que guarde los datos de sesión*/
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    
  </div>
</form>

HTML;
    echo $form_html;
}
