<?php

/* 
  Write you php code here

   */

$quantityInStock = 500;
$customerOrder = 450;

$comparison = $customerOrder <= $quantityInStock;
/*
$result;
if($comparison === true){
  $result =1;
}elseif($comparison === false){
$result = 0;
}
*/

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>Quantity in stock: <?= $quantityInStock?></p>
  <p>Number of customer's order: <?= $customerOrder?></p>
  <p>Comparison: <?= $comparison?></p>
</body>

</html>