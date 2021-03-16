<?php

class User
{
    public function __construct(private string $name, private string $address)
    {
    }

    public function getName(): string
    {
        return $this->username;
    }
}

$newUser = new User("Nombre", "Dirección");
echo "Nombre del nuevo usuario: " . $newUser->getName(); // returns ”Nombre"