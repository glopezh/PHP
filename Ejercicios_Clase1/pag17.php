<?php
/*PHP antigua version*/
class User
{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
$marc = new User( 'Marc' );
echo $marc->getName() . PHP_EOL;