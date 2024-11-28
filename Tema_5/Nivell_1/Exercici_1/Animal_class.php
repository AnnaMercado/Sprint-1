<?php

abstract class Animal{
    public string $name;

public function __construct(string $name){
    $this->name = $name;
}

abstract public function makeSound();
}


?>