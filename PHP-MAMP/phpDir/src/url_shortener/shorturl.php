<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // URL to the Unelma.IO API
  $url = 'https://unelma.io/api/v1/link';
  // Access token for the Unelma.IO API
  $accessToken = '2|iwNQ7iOWtC4mgVPX8cXFuSobzOTUR2bCVARnD1cx959aa083';

  // Collect the long URL from the form input
  $longUrl = $_POST['longUrl'];

  // Prepare the data to be sent in the POST request
  $data = [
    "type" => "direct",
    "password" => null,
    "active" => true,
    "expires_at" => "2024-05-06",
    "activates_at" => "2024-03-25",
    "utm" => "utm_source=google&utm_medium=banner",
    "domain_id" => null,
    "long_url" => $longUrl
  ];

  // Initialize cURL session
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json',
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken,
  ]);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

  // Execute the POST request
  $response = curl_exec($ch);

  // Check for errors
  if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
  } else {
    // Decode the response
    $responseDecoded = json_decode($response, true);
    // Check if the 'link' key and 'short_url' subkey exist before trying to access it
    if (isset($responseDecoded['link']) && isset($responseDecoded['link']['short_url'])) {
      // Output the shortened URL
      $shortUrl = $responseDecoded['link']['short_url'];
      echo 'Shortened URL: <a href="' . $shortUrl . '">' . $shortUrl . '</a>';

      // Store the shortened URL in the database
      // Database connection parameters
      $servername = "db";
      $username = "root";
      $password = "lionPass";
      $dbname = "url_shortener"; // Your database name

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Prepare SQL statement
      $stmt = $conn->prepare("INSERT INTO links (long_url, short_url) VALUES (?, ?)");
      $stmt->bind_param("ss", $longUrl, $shortUrl);

      // Execute SQL statement
      if ($stmt->execute() === TRUE) {
        echo "<br>Shortened URL stored successfully in the database.";
      } else {
        echo "<br>Error storing shortened URL in the database: " . $conn->error;
      }

      // Close statement and database connection
      $stmt->close();
      $conn->close();
    } else {
      // Handle the case where 'short_url' key doesn't exist
      echo 'The key "short_url" does not exist in the response.';
    }
  }

  // Close cURL session
  curl_close($ch);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <title>URL Shortener</title>

</head>

<body>
  <div>
    <h2>URL Shortener</h2>
    <form method="post">
      <label for="longUrl">Enter URL to shorten:</label>
      <input type="text" id="longUrl" name="longUrl" required>
      <button type="submit">Shorten URL</button>
    </form>
  </div>
</body>

</html>