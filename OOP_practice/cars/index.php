<?php
require_once('Cars.php');
/*
This is typically used when you want to use functions, classes, or variables defined in another file within your current PHP script.
Once Only: The _once part ensures that the file is included only once during the execution of the script, even if require_once is called multiple times. This prevents issues with redeclaring functions, classes, or variables that might occur if the same file is included more than once.
For example, if you have a file named Cars.php that contains the definition of the Car class, you can use require_once('Cars.php'); to include this file in your current script. This allows you to create instances of the Car class and use its methods and properties within your script.
*/

$car1 = new Car('Toyota', 1995, 'white');
$car1->setColor('yellow');
$car1->displayData();