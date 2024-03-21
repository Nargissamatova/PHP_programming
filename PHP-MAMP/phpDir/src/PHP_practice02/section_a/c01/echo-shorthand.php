<?php

/* 
  Write you php code here

   */

$favorites = [
  'toffee',
  'jelly beans',
  'chocolate',
  'mint'
]

?>
<!DOCTYPE html>
<html>

<head>
  <title>Echo Shorthand</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>

<!--This is a shorthand-->
<?= '<h2>Favorites: <h2/>'?>
<?php 
foreach ($favorites as $candy) {
echo '<p>' . $candy . '<p/>';
}
?>
</body>

</html>