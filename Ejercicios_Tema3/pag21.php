<?php

// function __autoload($class) {
// include 'classes/' . $class . '.class.php';
// }
function my_autoloader($class)
{
    include 'classes/' . $class . '.class.php';
}

spl_autoload_register('my_autoloader');
// Or, using an anonymous function
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});