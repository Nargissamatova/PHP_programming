<?php
/* Write your code here */
$price = 1.99;
$packs = 100;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
    /* Write your code here */
    for ($i=10; $i < $packs; $i++) { 
      echo 'Number of packs: ' . $i . 'kpl
      <br/> Price: ' . $i * $price . '€ <br/>';
    }
    ?>
  </p>
</body>

</html>