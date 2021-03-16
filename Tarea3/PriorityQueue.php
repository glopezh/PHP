<?php

//La colección se va a meter en la memoria y se va a meter en un array

//Ksort las ordena por clave

class PriorityQueue {

    private $items = array();
    private $priority = array();

//Metodos son publicos

    public function add($items,$priority): void

    {
        $this ->items[] = $items;
        $this ->priority[] = $priority;
    }

    public function get()

//Devuelve el array sin el primer elemento.
    {
        return array_shift($this->items);
        return array_pop($this->priority);
    }

    public function count(): int

    {
        return count($this ->items);
        return count($this ->priority);
    }

    public function contains($items): bool
    {
        return in_array($items, $this->items);
        return in_array($items,$this->priority);
    }
}

$collection = new PriorityQueue();
$collection->add( 23, 2 );
$collection->add( 1, 5 );
$collection->add( 7, 1 );
var_dump( $collection->get() ); // outputs 7
var_dump( $collection->get() ); // outputs 23
var_dump( $collection->count() ); // outputs 1
var_dump( $collection->contains( 23 ) ); // outputs false