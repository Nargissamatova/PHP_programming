<?php
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