<?php
function shortenURL($longUrl)
{
    // URL to the Unelma.IO API
    $url = 'https://unelma.io/api/v1/link';
    // Access token for the Unelma.IO API
    $accessToken = '2|iwNQ7iOWtC4mgVPX8cXFuSobzOTUR2bCVARnD1cx959aa083';

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
            return $responseDecoded['link']['short_url'];
        } else {
            // Handle the case where 'short_url' key doesn't exist
            return 'The key "short_url" does not exist in the response.';
        }
    }

    // Close cURL session
    curl_close($ch);
}
