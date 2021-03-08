<?php
define('OF_LEGAL_AGE', 18); // RIGHT - Works OUTSIDE of a class definition.
class Constants
{
    const OF_LEGAL_AGE = 18; // RIGHT - Works INSIDE of a class definition.

    public static function isOfLegalAge(integer $studentAge): Boolean
    {
        return $studentAge >= self::OF_LEGAL_AGE;
    }
}

?>