<?php

class SMSGateway {
    private $apiKey;

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }

    public function sendMaskingSMS($recipientNumber, $messageContent) {
        $maskingUrl = "https://selfcare.itguidebd.com/public_api/smsApi?type=masking&apiKey={$this->apiKey}&mobileNo={$recipientNumber}&smsContent=" . urlencode($messageContent);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $maskingUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public function getSMSBalance() {
        $balanceUrl = "https://selfcare.itguidebd.com/public_api/smsApi?type=balance&apiKey={$this->apiKey}";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $balanceUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}

// Replace with your actual API key
$apiKey = "your_api_key_here";

$smsGateway = new SMSGateway($apiKey);

// Sending a masking SMS
$recipientNumber = "recipient_phone_number_here";
$messageContent = "Hello, this is a test message from the API.";
$maskingResponse = $smsGateway->sendMaskingSMS($recipientNumber, $messageContent);
echo $maskingResponse . "\n\n";

// Getting SMS balance
$balanceResponse = $smsGateway->getSMSBalance();
echo $balanceResponse . "\n";

?>
