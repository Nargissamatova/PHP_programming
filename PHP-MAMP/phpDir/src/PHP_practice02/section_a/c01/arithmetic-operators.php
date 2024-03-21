<?php

/* 
  Write you php code here

   */
$cost = 2;
$item = 22;
$subtotal = $cost * $item;
$tax = ($subtotal/100)*20;
$total = $subtotal + $tax;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>

  <p>Number of candies: <?= $item ?></p>
  <p>Subtotal: <?= $subtotal ?></p>
  <p>Tax: <?= $tax ?>%</p>
  <p>Total: <?= $total ?>€</p>


</body>
</html>