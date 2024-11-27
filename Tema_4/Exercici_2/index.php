<?php
require_once 'Triangle_class.php';
require_once 'Rectangle_class.php';

$triangle = new Triangle(5, 10);
$rectangle = new Rectangle(35, 70);

echo $triangle->calculate_Area();
echo $rectangle->calculate_Area();

?>