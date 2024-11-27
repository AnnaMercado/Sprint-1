<?php

abstract class Shape{
    public $height;
    public $width;

    public function __construct(float $height, float $width){
        $this->height = $height;
        $this->width = $width;
    }

    abstract public function calculate_Area();
}

?>