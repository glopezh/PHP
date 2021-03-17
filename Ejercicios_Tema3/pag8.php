<!--Type Hinting-->
<?php

function sortArray(array $arrayToBeSorted): array
{
// Do the logic to sort it.
    return $sortedArray;
}

function sendMessage(User $user): void
{
    mail($from, $user->getEmail(), 'Hello there!');
}
