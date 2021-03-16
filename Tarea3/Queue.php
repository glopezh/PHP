/*Crea una clase llamada Queue que se comporte como una cola FIFO
q Una cola es una colección de elementos que, al pedir un elemento a la colección, se devuelven en orden de
llegada. Como cuando hacemos cola para ir al cine. Crea una clase Queue en PHP que tenga:
§ Un método add($item) que añade un elemento a la colección.
§ Un método get() que devuelve el elemento de la colección que toca. El elemento es eliminado de la
colección.
§ Un método count() que devuelve el número de elementos dentro de la colección.
§ Un método contains($item) que devuelve True o False dependiendo de si el elemento pasado como
parámetro está o no en la colección.
q Un ejemplo de utilización de esta clase Queue sería la siguiente:
§ $collection = new Queue();
§ $collection->add( 23 );
§ $collection->add( 1 );
§ $collection->add( 7 );
§ var_dump( $collection->get() ); // outputs 23
§ var_dump( $collection->get() ); // outputs 1
§ var_dump( $collection->count() ); // outputs 1
§ var_dump( $collection->contains( 23 ) ); // outputs false */

<?php

//La colección se va a meter en la memoria y se va a meter en un array

class Queue {

    private $items = array();
//Metodos son publicos

    public function add($items): void

    {
    $this ->items[] = $items;
    }

    public function get()

//Devuelve el array sin el primer elemento.
    {
    return array_shift($this->items);
    }

    public function count(): int

    {
    return count($this ->items);
    }

    public function contains($items): bool
    {
    return in_array($items, $this->items);
    }
}

$collection = new Queue();
$collection->add( 23 );
$collection->add( 1 );
$collection->add( 7 );
var_dump( $collection->get() ); // outputs 23
var_dump( $collection->get() ); // outputs 1
var_dump( $collection->count() ); // outputs 1
var_dump( $collection->contains( 23 ) ); // outputs false