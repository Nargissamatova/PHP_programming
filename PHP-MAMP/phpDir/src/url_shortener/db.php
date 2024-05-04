<?php
function storeShortenedURL($longUrl, $shortUrl)
{
    $servername = "db";
    $username = "root";
    $password = "lionPass";
    $dbname = "url_shortener";

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
}
