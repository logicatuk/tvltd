<?php
// Ensure the required parameters are present
if (!isset($_GET['url'])) {
    http_response_code(400);
    echo "Missing 'url' parameter";
    exit();
}

// Extract and decode the URL parameter
$url = urldecode($_GET['url']);

// Initialize a cURL session
$ch = curl_init();

// Set the options for the cURL session
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, true);

// Execute the cURL session
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    http_response_code(500);
    echo 'cURL error: ' . curl_error($ch);
    exit();
}

// Extract headers and body from the response
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headers = substr($response, 0, $header_size);
$body = substr($response, $header_size);

// Close the cURL session
curl_close($ch);

// Forward headers to the client
foreach (explode("\r\n", $headers) as $header) {
    if (strpos($header, ':') !== false) {
        header($header);
    }
}

// Output the response body
echo $body;
?>
