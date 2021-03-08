<?php

function addThankYouAtTheEnd(string $message): string
{
    return $message . PHP_EOL . "Thank you." . PHP_EOL;
}
$message = "This is a message.";
echo addThankYouAtTheEnd($message); // outputs 'This is a message. \n Thank you. \n'
?>