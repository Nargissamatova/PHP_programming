<?php
// $text = " Hello World!?!?";
// $trimmed_text = trim($text, "?!?");
// echo $trimmed_text;

// $str = "This is a string with backslashes \\ and quotes \"";
// echo stripslashes($str);

// $string = "This is string has <b>bold</b> tags" ;
// echo htmlspecialchars($string);

// $password = "mypassword";
// $encryped_password = md5($password);
// echo $encryped_password;

// $password = "mypassword";
// $encryped_password = sha1($password);
// echo $encryped_password;

$password = "mypassword";
$encryped_password = crypt($password, '$2y$07usesomesillystringforsalt$');
echo $encryped_password;
echo "<br>";
//echo $password;
