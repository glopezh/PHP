<?php

class User
{
    protected $properties = array();

    public function __call($name, $arguments)
    {
        $prefix = substr($name, 0, 3);
        $property = strtolower(substr($name, 3));

        switch ($prefix) {
            case 'get':
                //return $this->properties[$property];
                return $this->$property;
                break;
            case 'set':
                $this->properties[$property]=$arguments[0];
                break;
        }
    }
    /*public function __set($nombre,$valor)

    {
    $this->properties[$nombre] = $valor;
    }
    */

    public function __get($nombre)

    {
        return $this->properties[$nombre];
    }


}
$name ="Geral";
$obj = new User();
$obj->setName($name);
echo $obj->getName().PHP_EOL;
//echo $obj->name.PHP_EOL;