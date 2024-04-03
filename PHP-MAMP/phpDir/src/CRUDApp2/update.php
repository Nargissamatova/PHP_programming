<?php
include 'db.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}
/* OLD VERSION
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  //Update the records in db
  $query = "UPDATE users SET ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id";

  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Update query failed" . mysqli_error($conn));
  } else {
    // Redirect to the same page after successful update
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
  }
} */


if (isset($_POST['submit'])) {
  // Retrieve username and password from form data
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $id = $_POST['id'];

  // Validate the form fields
  if (!empty($user) && !empty($pass)) {
    // Prepare an UPDATE statement with placeholders
    $stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
    if ($stmt === false) {
      die("Prepare failed: " . $conn->error);
    }

    // Bind the variables to the prepared statement as strings
    $stmt->bind_param("ssi", $user, $pass, $id);

    // Execute the prepared statement and check the result
    if ($stmt->execute()) {
      // Redirect to the same page to prevent form resubmission
      header("Location: " . $_SERVER["PHP_SELF"]);
      exit; // Make sure to stop the script execution after the redirect
    } else {
      // Handle errors during execution
      die('Query insertion failed');
    }
    // Close the prepared statement
  } else {
    // The username or password is empty
    // Display an error message
    echo 'Username and password cannot be empty.';
  }
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
  <h2>Update</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!-- Use PHP_SELF here -->
    <label for="username"> Username </label>
    <input type="text" name="username">
    <label for="password"> Password </label>
    <input type="password" name="password">
    <select name="id" id="">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="UPDATE">
  </form>
</body>

</html>