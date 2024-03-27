<?php
class Car {
    // Properties
    private $brand;
    private $model;
    private $year;

    // Constructor
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter for brand
    public function getBrand() {
        return $this->brand;
    }

    // Setter for brand
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    // Getter for model
    public function getModel() {
        return $this->model;
    }

    // Setter for model
    public function setModel($model) {
        $this->model = $model;
    }

    // Getter for year
    public function getYear() {
        return $this->year;
    }

    // Setter for year
    public function setYear($year) {
        $this->year = $year;
    }

    // Method to display car details
    public function displayDetails() {
        echo "Brand: {$this->brand}, Model: {$this->model}, Year: {$this->year}<br>";
    }
}

// Create objects (instances) of the Car class
$car1 = new Car("Toyota", "Corolla", 2020);

// Using getter and setter methods
echo "Before setting: " . $car1->getBrand() . "<br>"; // Output: Toyota
$car1->setBrand("Honda");
echo "After setting: " . $car1->getBrand() . "<br>"; // Output: Honda