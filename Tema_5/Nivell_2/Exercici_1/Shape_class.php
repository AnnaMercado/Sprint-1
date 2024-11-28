<?php

abstract class Shape{
    public float $height;
    public float $width;

    public function __construct(float $height, float $width){
        $this->height = $height;
        $this->width = $width;
    }

    abstract public function calculate_Area();
}

?>