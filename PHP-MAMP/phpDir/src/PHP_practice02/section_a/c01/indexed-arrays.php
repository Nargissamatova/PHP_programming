<?php

/* 
  Write you php code here

   */
$best_sellers = [
  'toffee',
  'jelly beans',
  'chocolate',
  'mints'
]
?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <ol>
    <?php
    echo '<li>' . $best_sellers[0]
    . '<li>' . $best_sellers[1]
    . '<li>' . $best_sellers[2]
    .'<li>' . $best_sellers[3]
    ?>
  </ol>

</body>

</html>