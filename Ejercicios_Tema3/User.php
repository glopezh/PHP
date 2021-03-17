<?php

class User
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