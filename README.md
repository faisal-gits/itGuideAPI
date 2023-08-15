# API Documentation

Welcome to the API documentation for the Self-Care itGuide public APIs. This documentation will provide you with details on how to access and utilize the available endpoints to manage user information and send SMS messages. All responses from these APIs will be in JSON format.

## Base URL

```
https://selfcare.itguidebd.com/public_api/
```

## User Information

Retrieve user information using the provided API key.

**Endpoint:** `pubApi`

**Method:** GET

**URL:** `base_url/pubApi?apiKey=your_api_key`

**Example:**

```
GET https://selfcare.itguidebd.com/public_api/pubApi?apiKey=xxxxxxxxxxxx
```

## SMS API Masking

Send an SMS message using masking.

**Endpoint:** `smsApi?type=masking`

**Method:** POST

**URL:** `base_url/smsApi?type=masking&apiKey=your_api_key&mobileNo=recipient_number&smsContent=message_content`

**Parameters:**

- `apiKey`: Your API key (string)
- `mobileNo`: Recipient's mobile number (string)
- `smsContent`: Content of the SMS message (string)

**Example:**

```
POST https://selfcare.itguidebd.com/public_api/smsApi?type=masking&apiKey=xxxxxxxxxxxx&mobileNo=xxxxxxxx&smsContent=xxxxxxxxxx
```

## SMS API Non-Masking

Send an SMS message without masking.

**Endpoint:** `smsApi?type=nonMasking`

**Method:** POST

**URL:** `base_url/smsApi?type=nonMasking&apiKey=your_api_key&mobileNo=recipient_number&smsContent=message_content`

**Parameters:**

- `apiKey`: Your API key (string)
- `mobileNo`: Recipient's mobile number (string)
- `smsContent`: Content of the SMS message (string)

**Example:**

```
POST https://selfcare.itguidebd.com/public_api/smsApi?type=nonMasking&apiKey=xxxxxxxxxxxx&mobileNo=xxxxxxxx&smsContent=xxxxxxxxxx
```

## SMS Balance

Retrieve SMS balance information.

**Endpoint:** `smsApi?type=balance`

**Method:** GET

**URL:** `base_url/smsApi?type=balance&apiKey=your_api_key`

**Parameters:**

- `apiKey`: Your API key (string)

**Example:**

```
GET https://selfcare.itguidebd.com/public_api/smsApi?type=balance&apiKey=xxxxxxxxxxxx
```

## Response Format

All responses from the APIs will be in JSON format.

**Example Response:**

```json
{
    "status": "success",
    "message": "SMS sent successfully."
}
```

```json
{
    "status": "success",
    "message": "Balance retrieved successfully.",
    "masking": "450",
    "non-masking": "500"
}
```
## Error Handling

In case of errors, the API will return a response in the following format:

```json
{
    "status": "error",
    "message": "An error occurred while processing your request."
}
```

```json
{
    "status": "error",
    "message": "An error occurred while checking the balance."
}
```

Please make sure to handle potential errors appropriately based on the response status and message.

---

This concludes the documentation for the selfcare.itguidebd.com public APIs. If you have any questions or encounter any issues, please contact our support team at info@itguidebd.com.