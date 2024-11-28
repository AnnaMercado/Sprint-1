<?php
require_once 'Cat_class.php';
require_once 'Dog_class.php';

$cat = new Cat("Jas");
$dog = new Dog("Nana"); 

echo $cat->makeSound(); 
echo $dog->makeSound();

?>