<?php 

class Floor 
{
    private ?int $id;
    private ?string $name;
    private ?int $level;


public function __construct(int $id = 2, string $name = "1er étage", int $level = 1) {
    $this->id = $id;
    $this->name = $name;
    $this->level= $level;
}
}

?>