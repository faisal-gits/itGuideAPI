Absolutely, here's the documentation with examples for sending masking SMS, non-masking SMS, and checking SMS balance using the API.

## Sending Masking SMS

You can use this API endpoint to send an SMS with a masking phone number.

### Endpoint

```
GET /smsApi.php?type=masking&apiKey=<your_api_key>&mobileNo=<recipient_number>&smsContent=<message_content>
```

### Parameters

- `type` (required): Set to "masking" to use the masking SMS API.
- `apiKey` (required): Your API key for authentication.
- `mobileNo` (required): The recipient's mobile number.
- `smsContent` (required): The content of the SMS message.

### Example

```php
$apiKey = "your_api_key_here";
$recipientNumber = "recipient_phone_number_here";
$messageContent = "Hello, this is a masking SMS test message.";

$maskingUrl = "https://selfcare.itguidebd.com/public_api/smsApi.php?type=masking&apiKey=$apiKey&mobileNo=$recipientNumber&smsContent=" . urlencode($messageContent);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $maskingUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo "Masking SMS Response:\n";
echo $response . "\n";
```

## Sending Non-Masking SMS

This API endpoint allows you to send an SMS without a masking phone number.

### Endpoint

```
GET /smsApi.php?type=nonMasking&apiKey=<your_api_key>&mobileNo=<recipient_number>&smsContent=<message_content>
```

### Parameters

- `type` (required): Set to "nonMasking" to use the non-masking SMS API.
- `apiKey` (required): Your API key for authentication.
- `mobileNo` (required): The recipient's mobile number.
- `smsContent` (required): The content of the SMS message.

### Example

```php
$apiKey = "your_api_key_here";
$recipientNumber = "recipient_phone_number_here";
$messageContent = "Hello, this is a non-masking SMS test message.";

$nonMaskingUrl = "https://selfcare.itguidebd.com/public_api/smsApi.php?type=nonMasking&apiKey=$apiKey&mobileNo=$recipientNumber&smsContent=" . urlencode($messageContent);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $nonMaskingUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo "Non-Masking SMS Response:\n";
echo $response . "\n";
```

## Checking SMS Balance

Use this API endpoint to retrieve the remaining SMS balance.

### Endpoint

```
GET /smsApi.php?type=balance&apiKey=<your_api_key>
```

### Parameters

- `type` (required): Set to "balance" to get the SMS balance.
- `apiKey` (required): Your API key for authentication.

### Example

```php
$apiKey = "your_api_key_here";

$balanceUrl = "https://selfcare.itguidebd.com/public_api/smsApi.php?type=balance&apiKey=$apiKey";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $balanceUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo "SMS Balance Response:\n";
echo $response . "\n";
```

Remember to replace `"your_api_key_here"` and `"recipient_phone_number_here"` with your actual API key and the recipient's phone number, respectively. Also, ensure that you handle API responses properly in a production environment.