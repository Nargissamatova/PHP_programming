<?php
include 'db.php';

// Query the 'users' table to fetch all records
$query = "SELECT * FROM users";
// Execute the SQL query
$result = mysqli_query($conn, $query);

// Check if the query execution was successful
if (!$result) {
  // If query execution fails, terminate the script and display an error message
  die('Query failed');
}

/*  OLD VERSION
// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Retrieve form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  // Construct the SQL query to update records in the 'users' table
  $query =  "DELETE FROM users ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id";

  // Execute the SQL query to update records
  $result = mysqli_query($conn, $query);

  // Check if the query execution was successful
  if (!$result) {
    // If query execution fails, terminate the script and display an error message
    die("Update query failed" . mysqli_error($conn));
  } else {
    // Redirect to the same page after successful update
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
  }
}
*/


if (isset($_POST['submit'])) {

  $id = $_POST['id'];


  $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");

  if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
  }

  $stmt->bind_param("i", $id);
  if ($stmt->execute()) {
    header("Location: " . $_SERVER["PHP_SELF"]);
  } else {
    die("Query insertion failed");
  }
  $stmt->close();
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD App</title>
</head>

<body>
  <form action="delete.php" method="post">
    <h2>Delete</h2>
    <!-- Form to delete a record -->
    <label for="username"> Username </label>
    <input type="text" name="username">
    <label for="password"> Password </label>
    <input type="password" name="password">
    <!-- Dropdown to select the record to be deleted -->
    <select name="id" id="">
      <?php
      // Fetch and display all records as options in the dropdown
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <!-- Submit button to delete the selected record -->
    <input type="submit" name="submit" value="DELETE">
  </form>
</body>

</html>