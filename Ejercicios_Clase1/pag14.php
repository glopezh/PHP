<?php
$name = "Aka";
/*No evalua la variable*/
$singleQuoted = 'Hi $name';
/*Evalua el valor de la variable*/
$doubleQuoted = "Hi $name";
/*Son utiles para mandar mensaje desde nuestra
aplicación para otra aplicación*/
$heredoc = <<<TEXT
Hi $name
TEXT;
$nowdoc = <<<'TEXT'
Hi $name
TEXT;
var_dump($singleQuoted); // prints: Hi $name
var_dump($doubleQuoted); // prints: Hi Aka
var_dump($heredoc); // prints: Hi Aka
var_dump($nowdoc); // prints: Hi $name
?>