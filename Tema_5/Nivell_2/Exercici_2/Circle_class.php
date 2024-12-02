<?php
require_once 'Shape_class.php';

class Circle extends Shape{

    public float $radius; 

    public function __construct(float $radius){
        $this->radius = $radius;
    }

    public function calculate_Area(){
        echo "The area of the circle you entered is :" . ($this->radius* $this->radius)* M_PI . ".";

    }

}

?>