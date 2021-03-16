<?php
class Queue
{
    private $items = array();

    public function add($item): void
    {
        $this->items[] = $item;
    }

    public function get()
    {
        // array_shift devuelve en el resultado de la función el primer elemento y además el array queda almacenado sin (este/)su primer elemento.
        return array_shift($this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function contains($item_to_search): bool
    {
        return in_array($item_to_search, $this->items);
    }
}