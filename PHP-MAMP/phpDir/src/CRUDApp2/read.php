<?php

include 'db.php';

//Read the records from db
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Reading db records failed');
}
?>
<?php

while ($row = mysqli_fetch_assoc($result)) {
?>
<pre>
    <?php
    print_r($row);
    ?>
    </pre>
<?php
}
?>