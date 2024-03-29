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
        $this->color = $prop; // Setting the color property to the provided color
     }else{
        $this->color = "not allowed"; // Setting color to "not allowed" if it's not in the allowed list
     }
    }

    // Method
    public function displayData(){
        echo "<h3>Car brand: $this->brand, year: $this->year, color: $this->color </h3>";
    }


};