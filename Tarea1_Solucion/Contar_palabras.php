<?php
/**
 * Escribe una función PHP llamada countWords($string) que recibe una frase como parámetro, y muestra el número de veces que cada palabra aparece en la frase.
 * Esta función ignora mayúsculas y minúsculas. Tampoco se preocupa por caracteres que no son letras como puntos o comas.
 * Utiliza las funciones que hemos visto hasta ahora para poner la frase en minúsculas y borrar caracteres en los que no estamos interesados.
 * El resultado debe ser una lista de las palabras que aparecen en la frase, junto al número de veces que aparece esa palabra en la frase.
 */

function cleanPhrase(string $string): string
{
    $string = strtolower($string);
    $string = str_replace('!', '', $string);
    $string = str_replace('?', '', $string);
    $string = str_replace('.', '', $string);
    $string = str_replace(',', '', $string);
    $string = str_replace(';', '', $string);

    return $string;
}

function printAnalysis(int $totalWords, array $analysisArray): void
{
    echo "Total words:\t" . $totalWords . PHP_EOL;
    echo "Unique words:\t" . count($analysisArray) . PHP_EOL;
    foreach ($analysisArray as $word => $number_of_occurrences) {
        echo "$word:\t\t" . $number_of_occurrences . PHP_EOL;
    }
}

function countWords(string $string): void
{
    $string = cleanPhrase($string);
    $wordsArray = explode(' ', $string);
    $resultsArray = [];

    foreach ($wordsArray as $word) {
        if (isset($resultsArray[$word])) {
            continue;
        }
        foreach ($wordsArray as $wordToSearch) {
            if ($word === $wordToSearch) {
                if (isset($resultsArray[$wordToSearch])) {
                    $resultsArray[$wordToSearch]++;
                } else {
                    $resultsArray[$wordToSearch] = 1;
                }
            }
        }
    }
    printAnalysis(count($wordsArray), $resultsArray);
}

if (!isset($argv[1])) {
    die("Debes llamar a este programa con una frase entre comillas" . PHP_EOL);
} else {
    $inputPhrase = filter_var($argv[1], FILTER_SANITIZE_STRING);
    countWords($inputPhrase);
}