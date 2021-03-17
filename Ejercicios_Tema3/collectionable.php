<?php
//interface = nos dice lo que es capaz de implementar una clase. Los métodos definidos no tienen implementación.
//obligan a las clases que la implementan a que cumplan un contrato con unos métodos establecidos y de saber que esas clases implementan clases definidas.
//con interfaces se puede heredar tanto como se quiere.
interface Collectionable
{
    public function get();
    public function add($item, int $priority = null): void;
    public function contains($item): bool;
    public function count(): int;
}