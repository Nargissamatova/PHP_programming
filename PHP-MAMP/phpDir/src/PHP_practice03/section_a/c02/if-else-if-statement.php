<?php
/* Write your code here */
$candy = 'yes'
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <h2>
  <?php
  /* Write your code here */
if ($candy == true) {
echo 'In stock';
} elseif ($candy == false) {
  echo 'Sold Out';
} else{
  echo 'Coming soon';
}
  ?>
  </h2>
</body>
</html>