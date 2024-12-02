<?php
require_once 'Shape_class.php';

class Triangle extends Shape{
    public float $height;
    public float $width;

    public function __construct(float $height, float $width){
        $this->height = $height;
        $this->width = $width;
    }


    public function calculate_Area(){
        echo "The area of the triangle you entered is :" . ($this->width * $this->height)/2 . ".";

    }

}

?>