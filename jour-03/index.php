<?php 

require_once("class/Student.php");
require_once("class/Grade.php");
require_once("class/Room.php");
require_once("class/Floor.php");


$student = new student(1, 1, "emal@gmail.com", "titi", new datetime("1992-12-21"), "male");
// $student = new student();
$grade = new Grade(1, "Bachelor 1", 8 ,new DateTime("2023-01-09"));
// $grade = new Grade();
$room = new Room(1,"RDC Food and Drinks", 1, 100);
// $room = new Room();
$floor = new Floor(1, "Rez-de-chaussée", 0);
// $floor = new Floor();
var_dump($floor);
?>