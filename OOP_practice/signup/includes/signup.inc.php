<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    require_once "../Dbh.php"; // parent class, comes first
    require_once "../Signup.php"; // child class, comes after

    $signup = new Signup($username, $pwd);
    $signup->signupUser();
}
