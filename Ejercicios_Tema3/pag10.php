<?php

class MyClass
{
    const CONST_VALUE = 'A constant value';
}
echo MyClass::CONST_VALUE.PHP_EOL;
$classname = 'MyClass';
echo $classname::CONST_VALUE.PHP_EOL;
