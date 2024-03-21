<?php
/* Write your code here */
$discountDay = 'Friday'
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>
  <?php
  /* Write your code here */
  switch ($discountDay) {
    case 'Monday':
      echo 'Get 20% off chocolate';
      break;
    case 'Tuesday':
      echo 'Get 20% off mints';
      break;
    default:
      echo 'Buy three packs, get one free';
      break;
  }
  ?>
  </h2>
</body>

</html>