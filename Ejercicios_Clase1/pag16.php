<?php

class User
{
    /*Sintaxis php 8*/
    public function __construct(private string $name)
    {
    }
/*No recibe nada, pero devuelve un string*/
    public function getName(): string
    {
        return $this->name;
    }
}

$marc = new User('Marc');
echo $marc->getName() . PHP_EOL;
/*Probando para ver tipo de dato*/
var_dump($marc);