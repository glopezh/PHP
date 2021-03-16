<?php

class A
{
    //Cuando se escribe el codigo

    public static function getSelf(): self
    {
        return new self();
    }

    public static function getStatic(): static
    {
        return new static();
    }
}

class B extends A
{
}

echo get_class(B::getSelf()); // A
echo get_class(B::getStatic()); // B
echo get_class(A::getStatic()); // A