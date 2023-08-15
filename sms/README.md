Certainly! Here's the example PHP code presented in a more structured documentation format:

## Sending SMS and Retrieving SMS Balance Example (PHP)

This example demonstrates how to use the SelfCare IT Guide SMS API in PHP to send a masking SMS and retrieve SMS balance. The example uses cURL for making API requests.

### Prerequisites

Before you begin, make sure you have the following:

- Your API key from SelfCare IT Guide.
- The recipient's mobile number.

### Installation

No special installation is required for this example. Ensure you have PHP and cURL enabled on your system.

### Example Code

```php
<?php
// Replace with your actual API key
$apiKey = "your_api_key_here";

// Recipient's mobile number
$recipientNumber = "recipient_phone_number_here";

// SMS content
$messageContent = "Hello, this is a test message from the API.";

// Sending a masking SMS
$maskingUrl = "https://selfcare.itguidebd.com/public_api/smsApi.php?type=masking&apiKey=$apiKey&mobileNo=$recipientNumber&smsContent=" . urlencode($messageContent);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $maskingUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo "Masking SMS Response:\n";
echo $response . "\n\n";

// Getting SMS balance
$balanceUrl = "https://selfcare.itguidebd.com/public_api/smsApi.php?type=balance&apiKey=$apiKey";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $balanceUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo "SMS Balance Response:\n";
echo $response . "\n";
?>
```

### Usage

1. Replace `"your_api_key_here"` with your actual API key.
2. Replace `"recipient_phone_number_here"` with the recipient's mobile number.
3. Run the script using PHP: `php send_sms_example.php`.
4. The script will send a masking SMS and display the response. Then, it will retrieve SMS balance and display the response.

### Notes

- Make sure to handle errors and responses properly in a production environment.
- Additional error handling and validation can be added to enhance the code's reliability.
- Ensure that cURL is enabled in your PHP installation.

---

Please ensure to follow best practices for error handling and security when integrating API calls into your application.