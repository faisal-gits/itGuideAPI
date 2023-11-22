<?php

$apiKey = "Your_API_Key";
$domainToCheck = "newdomain.com";

$type = "check"; // Use "check" for new domain search

$baseUrl = "https://selfcare.itguidebd.com/public_api/whois";
$endpoint = "?type=" . $type . "&apiKey=" . $apiKey . "&domain=" . $domainToCheck;

$apiUrl = $baseUrl . $endpoint;

$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session and fetch result
$result = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$response = json_decode($result, true);

// Handle the response
if ($response['status'] === 'success') {
    // Successful response
    print_r($response);
} else {
    // Error response
    echo "Error: " . $response['message'];
}

?>
