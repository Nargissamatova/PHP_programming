<?php
/*Write your code here*/
$isStock = 'yes'
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
<h2> 
  <?php
  /* Write your code here */
  echo ($isStock == true) ? 'In stock': 'Sold out';
  ?>
</h2>

</body>

</html>