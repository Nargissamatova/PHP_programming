<?php
/* Write your code here */
$packs = 5;
$price = 2;
$i = 1;

?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    while($i <= $packs) {
      echo 'Number of packs: ' . $i . 'kpl
      <br/> Price: ' . $i * $price . '€ <br/>';
     $i++;
    }

    ?>
  </p>
</body>

</html>