<?php

function echoCounter() {
    static $counter = 0;
    echo $counter;
    $counter++;
}

echoCounter().PHP_EOL;