<?php

/* 
  Write you php code here

   */

   $nutrition = array(
    'fat' => 50,
    'sugar' => 20,
    'salt' => 30,
   )

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>

  <?php
  echo '<h3>Nutrition: <h3/> Fat content: '
  . $nutrition['fat'] 
  . '% <br/> Sugar content: ' . $nutrition['sugar'] 
  . '% <br/> Salt content: '. $nutrition['salt'] . '%'
  ?>

</body>

</html>