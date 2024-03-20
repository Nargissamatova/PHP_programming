<?php

/* 
  Write you php code here

   */
$candy_name = 'toffee';
$candy_price = 3;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
<?php 
echo '<h3>' . 'This is ' . $candy_name . ' price per pack is ' . $candy_price .'$<h3/>';
?>
</body>

</html>