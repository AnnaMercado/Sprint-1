<?php
require_once 'Shape_class.php';

class Triangle extends Shape{

    public function __construct($width, $height){
        parent::__construct($width,$height);
    }

    public function calculate_Area(){
        echo "The area of the triangle you entered is :" . ($this->width * $this->height)/2 . ".";

    }

}

?>