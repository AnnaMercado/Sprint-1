<?php


class Person{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }
   
    public function __toString(){
        return "El nombre asignado a este estudiante es " . $this->name . ".\n" . "Tiene " . $this->age . " años.\n";
    }


}




?>