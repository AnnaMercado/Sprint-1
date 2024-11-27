<?php

class Employee{
    public $name;
    public $salary; 

    public function __construct(string $name, float $salary){
        $this->name = $name;
        $this->salary = $salary;

    }

    public function get_taxation(){
        if ($this->salary >= 6000){
            echo $this->name . " has to pay taxes.";
        }else{
            echo $this->name . " doesn't have to pay taxes.";
        }
    }
}
?>