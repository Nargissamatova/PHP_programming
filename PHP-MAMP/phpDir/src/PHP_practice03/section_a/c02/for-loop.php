<?php
/* Write your code here */
$packs = 10;
$price = 2;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    for ($i=1; $i <= $packs; $i++) { 
      echo 'Number of packs: ' . $i . 'kpl
      <br/> Price: ' . $i * $price . '€ <br/>';
    }
    ?>
  </p>
</body>

</html>