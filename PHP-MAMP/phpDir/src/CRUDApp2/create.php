<?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve username and password from form data
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // You can uncomment the line below to test if data is being retrieved correctly
    // echo $user . " " . $pass;
}

// Validate the form fields
if ($user && $pass) {
    // If both username and password are provided, display them
    echo $user . " " . $pass;
} else {
    echo 'Username and password cannot be blank <br/>';
}

// Database connection settings
$host = 'db'; // Database host
$dbname = 'loginapp'; // Database name
$dbuser = 'root'; // Database username
$dbpass = 'lionPass'; // Database password

// Establish a connection to MySQL server
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    // If connection fails, show error message and terminate the script
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully";
}

// Create SQL query to insert username and password into 'users' table
$query = "INSERT INTO users(username, password)";
$query .= "VALUES('$user', '$pass')";

// Execute the SQL query
$result = mysqli_query($conn, $query);

// Check if query execution was successful
if (!$result) {
    // If query execution fails, show error message and terminate the script
    die('Query insertion failed');
}

?>

<!-- HTML form to collect username and password -->
<form action="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username">
    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Submit">
</form>