<?php
// SESSIONS
session_start();
$_SESSION['greetings'] = "Hello I am a session";

// COOKIES
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">
  <aside class="col-xs-4">
    <?php Navigation(); ?>
  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">

    <?php

    /*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it
		Step 2 - Set a cookie that expires in one week
		Step 3 - Start a session and set it to value, any value you want.
	*/

    $target = "9.php?source=555";
    $linkname = "Click Here";
    echo "<a href='$target'>$linkname</a>";

    if (isset($_GET['source'])) {
      echo ' ' . $_GET['source'] . '<br/>';
    }

    if (!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "Cookie value is: " . $_COOKIE[$cookie_name];
    }



    ?>




  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>