<?php
//ejemplo de uso de la función autoload

//function __autoload($classname)
//{
//    var_dump($classname);
//    include_once __DIR__ . '/' . $classname . '.php';
//}

function my_autoloader($classname)
{
    include_once __DIR__ . '/' . $classname . '.php';
}

spl_autoload_register('my_autoloader');

$user = new User("Alejandro");
echo "Hola " . $user->getUserName() . PHP_EOL;