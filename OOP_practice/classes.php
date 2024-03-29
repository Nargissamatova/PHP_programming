<?php
class Car {
    // Properties
    private $brand;
    private $year;
    public $color;

    // Constructor
    public function __construct($brand, $year, $color) {
        $this->brand = $brand;
        $this->year = $year;
        $this->color = $color;
    }
    // Setter
    public function setColor($prop){
     $allowedColors = ['blue', 'white', 'green', 'yellow'];
     if(in_array($prop, $allowedColors)){
        $this->color = $prop;
     }else{
        $this->color = "not allowed";
     }
    }

    // Method
    public function displayData(){
        echo "<h3>Car brand: $this->brand, year: $this->year, color: $this->color </h3>";
    }


};
$car1 = new Car('Toyota', 1995, 'white');
$car1->setColor('yellow');
$car1->displayData();