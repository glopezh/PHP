<?php
//error_reporting(E_ALL);
//ini_set("display_errors", true);

session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}

echo "<h1>" . $_SESSION['counter'] . "</h1>";
//var_dump($_SESSION['counter']);
