<?php
/*
Create a Class for a Simple Product Catalog:

1. Create a PHP class called Product that represents a product in a catalog.
2. Include properties such as name, price, and description.
3. Implement methods for displaying product information (displayInfo()).
4. Create an array of Product objects to represent a product catalog and display the information of each product.

*/

class Product
{
    public $name;
    public $price;
    public $description;

    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayInfo()
    {
        echo '<h2>Product name: </h2>' . $this->name .
            '<h2>Price: </h2>' . $this->price .
            '<h2>Description: </h2>' . $this->description;
    }
}

$products_arr = [
    new Product('Shampoo', 23, 'for hair'),
    new Product('Hand cream', 12, 'soft hands'),
    new Product('Conditioner', 22, 'for hair')
];

foreach ($products_arr as $product) {
    echo "Product: " . $product->name . ", Price: $" . $product->price . ", Description: " . $product->description . "<br>";
}

/*

class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Price: $" . $this->price . "<br>";
        echo "Description: " . $this->description . "<br>";
    }
}

// Create an array of Product objects
$products = [
    new Product("Smartphone", 599, "A powerful smartphone with advanced features."),
    new Product("Laptop", 999, "A high-performance laptop for professionals."),
    new Product("Headphones", 149, "Premium wireless headphones with noise cancellation."),
];

// Display information of each product
foreach ($products as $product) {
    $product->displayInfo();
    echo "<br>";
}
?>

*/