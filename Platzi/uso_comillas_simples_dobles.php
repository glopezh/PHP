<?php

/*Simples: usadas para textos. los caracteres. Estas no pueden obtener datos de una variable, la salida ser texto.
Dobles: Extienden a las variables, pudiendo agregarlas a la cadena y estas serán reconocidas*/

/*
echo 'Un texto de una línea
varias líneas
comilla simple \' backslash \\ continuar con mas texto
$variable';
*/

$name = "Italo Morales";
echo "<h1>Mi nombre es $name - usando comillas dobles , puedo traer datos de variables</h1>".PHP_EOL;
//Concatenar
echo '<h1>Mi nombre es ' . $name . '</h1> <br>'.PHP_EOL;
echo 'Mi nombre es $name - usando comillas simples'.PHP_EOL;

//Array
$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];
echo "<h1>Lenguaje: {$courses['backend'][0]} </h1><br>".PHP_EOL;

//Clase
class User{
    public $name = 'Danny';
}

//Objeto
$user = new User;

echo "<h1>$user->name quiere aprender {$courses['backend'][0]} </h1><br>".PHP_EOL;

$course = ['backend' => 'PHP'];

//echo "<h1>Lenguaje: {$courses['backend']} </h1><br>";

//variables variables
$teacher = 'italo';
$italo = 'Profesor de PHP';
echo "<h1>$teacher es ${$teacher}</h1>".PHP_EOL;

//Función
function getTeacher(){
    return 'teacher';
}

$teacher = 'Italo';

echo "<h1>{${getTeacher()}} Enseña PHP</h1>".PHP_EOL;