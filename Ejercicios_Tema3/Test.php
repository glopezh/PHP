<?php

//ejemplo de uso de la función autoload

class Test
{
    private $properties = array();

    public function __get($index)
    {
        if (array_key_exists($index, $this->properties)) {
            return $this->properties[$index];
        }
        return null;
    }

    public function __set($index, $value)
    {
        $this->properties[$index] = $value;
    }

    public function __call($method_name, array $arguments)
    {
        $prefix = substr($method_name, 0, 3);
        $property = strtolower(substr($method_name, 3));
        switch ($prefix) {
            case 'get':
                return $this->$property;
            //return $this->properties[$property];
            case 'set':
                $this->$property = $arguments[0];
                //$this->properties[$property] = $arguments[0];
                break;
            default:
                echo 'the method does not exist';
                break;
        }
    }
}

function my_autoloader($classname)
{
    include_once __DIR__.'/'.$classname.'.php';
}

spl_autoload_register('my_autoloader');

$user = new User("Alejandro");
echo "Hola".$user->getUserName().PHP_EOL;

$test = new Test ("Juan");
echo $test->hi();