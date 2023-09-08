<?php 

class Room 
{

private ?int $id;
private ?string $name;
private ?int $floor;
private ?int $capacity;

public function __construct(int $id = 4, string $name = "rr", int $floor = 5, int $capacity = 70) {
    $this->id = $id;
    $this->name = $name;
    $this->floor = $floor;
    $this->capacity = $capacity;

}

}

?>