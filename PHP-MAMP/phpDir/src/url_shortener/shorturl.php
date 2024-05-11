<?php
include 'db.php';

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
    $shortUrl = 'Error: ' . curl_error($ch);
  } else {
    // Decode the response
    $responseDecoded = json_decode($response, true);
    // Check if the 'link' key and 'short_url' subkey exist before trying to access it
    if (isset($responseDecoded['link']) && isset($responseDecoded['link']['short_url'])) {
      // Output the shortened URL
      $shortUrl = $responseDecoded['link']['short_url'];

      // Store the shortened URL in the database
      // Prepare SQL statement
      $stmt = $conn->prepare("INSERT INTO links (long_url, short_url) VALUES (?, ?)");
      $stmt->bind_param("ss", $longUrl, $shortUrl);

      // Execute SQL statement
      if ($stmt->execute() === TRUE) {
        $shortUrlMessage = "Shortened URL stored successfully in the database.";
      } else {
        $shortUrlMessage = "Error storing shortened URL in the database: " . $conn->error;
      }

      // Close statement
      $stmt->close();
    } else {
      // Handle the case where 'short_url' key doesn't exist
      $shortUrl = 'The key "short_url" does not exist in the response.';
    }
  }

  // Close cURL session
  curl_close($ch);
}

// Fetch stored URLs from the database
$sql = "SELECT * FROM links";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="shorturl.css">
  <title>URL Shortener</title>
</head>

<body>
  <div class="container">
    <h2>URL Shortener</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="longUrl">Enter URL to shorten:</label>
      <input type="text" id="longUrl" name="longUrl" required>
      <button type="submit">Shorten URL</button>
    </form>

    <?php if (isset($shortUrl)) : ?>
      <p><?php echo $shortUrl; ?></p>
    <?php endif; ?>
    <?php if (isset($shortUrlMessage)) : ?>
      <p><?php echo $shortUrlMessage; ?></p>
    <?php endif; ?>

    <h3>Stored URLs</h3>
    <table>
      <tr>
        <th>Long URL</th>
        <th>Shortened URL</th>
      </tr>
      <?php
      if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["long_url"] . "</td><td><a href='" . $row["short_url"] . "'>" . $row["short_url"] . "</a></td></tr>";
        }
      } else {
        echo "<tr><td colspan='2'>No URLs stored in the database</td></tr>";
      }
      ?>
    </table>
  </div>
</body>

</html>