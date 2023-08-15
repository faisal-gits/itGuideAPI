<?php
// Replace with your actual API key
$apiKey = "your_api_key_here";

// Recipient's mobile number
$recipientNumber = "recipient_phone_number_here";

// SMS content
$messageContent = "Hello, this is a test message from the API.";

// Sending a masking SMS
$maskingUrl = "https://selfcare.itguidebd.com/public_api/smsApi?type=masking&apiKey=$apiKey&mobileNo=$recipientNumber&smsContent=" . urlencode($messageContent);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $maskingUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo "Masking SMS Response:\n";
echo $response . "\n\n";

// Getting SMS balance
$balanceUrl = "https://selfcare.itguidebd.com/public_api/smsApi?type=balance&apiKey=$apiKey";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $balanceUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo "SMS Balance Response:\n";
echo $response . "\n";
?>
