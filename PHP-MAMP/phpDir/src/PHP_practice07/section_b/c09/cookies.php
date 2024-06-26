<?php
/*
Overall idea here is to set cookies and count the number of pages a visitor has viewed.

Step 1: Create a counter to store number of pages vistor has viwed. Create a cookie to hold 
that counter variable. 

Step 2: Increment the value of counter, as the visitor has just viewed a page.

Step 3: Use a setcookie() function to tell the browser to create or update a cookie
and also store the value from the variable in that cookie

Step 4: A new variable should hold message saying the number of pages the visitor has viewed.
e.g. "Page views: "

*/
/*
$counter = $_COOKIE['counter'];
$counter_value = $counter + 1;
setcookie('counter', $counter_value, time() + 84600 * 7);
$msg = "Page views $counter";
*/

$counter = $_COOKIE['count'];
$counter_value = $counter + 1;
$exp = time() + (86400 * 7);

setcookie('count', $counter_value, $exp);
if (!isset($_COOKIE['count'])) {
    echo "Cookie named '" . $counter . "' is not set!";
} else {
    echo "Cookie '" . $counter . "' is set!<br>";
    echo "you view this page: " . $counter;
}

?>

<?php include 'includes/header.php'; ?>

<p><a href="sessions.php"> Refresh this page </a> to see the page views increase </p>

<?php include 'includes/footer.php'; ?>