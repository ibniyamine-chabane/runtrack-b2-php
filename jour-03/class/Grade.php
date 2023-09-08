<?php 

class Grade 
{

private ?int $id;   
private ?string $name;   
private ?int $id_floor;   
private ?datetime $year;   
    
public function __construct(int $id = 3, string $name = nopep, int $id_floor = 8, datetime $year = new DateTime("2022-03-05")) {
    $this->id = $id;
    $this->name = $name;
    $this->id_floor = $id_floor;
    $this->year = $year;
}
}


?> 