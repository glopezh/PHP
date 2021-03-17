<?php

class OtherClass extends MyClass
{
    private static $myPrivateVariable = 'Private Var';

    public static function doubleColon(): void
    {
        echo parent::CONST_VALUE . PHP_EOL;
        echo self::$myStatic . PHP_EOL;
    }
}

OtherClass::doubleColon();
?>