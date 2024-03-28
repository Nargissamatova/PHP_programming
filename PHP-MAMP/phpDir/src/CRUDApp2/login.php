<?php
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
   // echo $user . " " . $pass;

}

// validate the form

if($user && $pass){
    echo $user . " " . $pass;
}else{
    echo 'username and password cannot be blank';
}

$host = 'db';

//database user name
$dbname = 'loginapp';
$dbuser = 'root';
$dbpass = 'lionPass';

// check the mysql connection status
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected to MySQL server successfully";
}

// create the records inside db

$query = "INSERT INTO users(username, password)";
$query .= "VALUES('$user', '$pass')";

$result = mysqli_query($conn, $query);
if(!$result){
    die('Query insertation failed');
}






?>

<form action="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username">
    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="submit">
</form>
