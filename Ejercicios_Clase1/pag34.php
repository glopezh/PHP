<?php
function makeCoffee(
    string $greeting,
    array $typesOfCoffee = array("cappuccino"),
    string $coffeeMaker = NULL,
    string $coffeeDrinker = 'John Doe'
): string {
$device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
return "$greeting Making a cup of ".join(", ", $typesOfCoffee)." with $device for
$coffeeDrinker.\n";
}
echo makeCoffee('Hello!');
echo makeCoffee('Hi!', array("cappuccino", "lavazza"), "teapot");
echo makeCoffee('Good morning!', array("cappuccino", "lavazza"), "teapot", "Jane Doe");
?>