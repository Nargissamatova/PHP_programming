<?php

/* 
  Write you php code here

   */
$offers = [
['name' => 'toffee',
'price' => 300,
'stock level' => 10
],
['name' => 'jelly beans',
'price' => 100,
'stock level' => 10
],
['name' => 'chocolate',
'price' => 30,
'stock level' => 40
],
['name' => 'mint',
'price' => 10,
'stock level' => 20
]

]
?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<style>
.candy_card{
  border: 2px solid white;
  width: 20%;
  padding: 20px;
  margin: 1em;
}
</style>
<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>

  <?php
  foreach ($offers as $candy) {
    echo '
    <div class="candy_card">
    Candy type: ' . $candy['name'] . '<br/>'
    . 'Price: ' . $candy['price'] . '€ <br/>'
    . 'Stock level: ' . $candy['stock level'] . '<br/>
    </div>
    ';
  };
  ?>
</body>

</html>