<?php
require_once 'Triangle_class.php';
require_once 'Rectangle_class.php';
require_once 'Circle_class.php';

$triangle = new Triangle(5, 10);
$rectangle = new Rectangle(35, 70);
$circle = new Circle(23);

echo $triangle->calculate_Area();
echo $rectangle->calculate_Area();
echo $circle->calculate_Area();

?>