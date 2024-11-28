<?php
require_once 'Shape_class.php';

class Rectangle extends Shape{

    public function calculate_Area(){
        echo "The area of the rectangle you entered is :" . ($this->width * $this->height) . ".";

    }

}

?>