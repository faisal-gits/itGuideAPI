# SMS API Documentation

## Introduction

The SMS API provided by itGuide Bangladesh allows you to send SMS messages using two different methods: Non-Masking and Masking. Additionally, you can check your account balance using the Balance Check API. All responses from the API are in JSON format.

## Base URL

```
https://selfcare.itguidebd.com/public_api/smsApi
```

## API Endpoints

### Send SMS - Non-Masking

Sends an SMS message without masking the sender's identity.

```
Endpoint: /public_api/smsApi?type=nonMasking
Method: GET
```

#### Parameters

- `apiKey` (string, required): Your API key for authentication.
- `mobileNo` (string, required): The recipient's mobile number.
- `smsContent` (string, required): The content of the SMS message.

#### Example

```plaintext
GET /public_api/smsApi?type=nonMasking&apiKey=xxxxxxxxxxxx&mobileNo=xxxxxxxx&smsContent=xxxxxxxxxx
```

### Send SMS - Masking

Sends an SMS message with a masked sender's identity.

```
Endpoint: /public_api/smsApi?type=masking
Method: GET
```

#### Parameters

- `apiKey` (string, required): Your API key for authentication.
- `mobileNo` (string, required): The recipient's mobile number.
- `smsContent` (string, required): The content of the SMS message.

#### Example

```plaintext
GET /public_api/smsApi?type=masking&apiKey=xxxxxxxxxxxx&mobileNo=xxxxxxxx&smsContent=xxxxxxxxxx
```

### Balance Check

Retrieves the account balance for both masking and non-masking SMS.

```
Endpoint: /public_api/smsApi?type=balance
Method: GET
```

#### Parameters

- `apiKey` (string, required): Your API key for authentication.

#### Example

```plaintext
GET /public_api/smsApi?type=balance&apiKey=xxxxxxxxxxxx
```

## Response Format

All responses from the APIs will be in JSON format. Depending on the API endpoint, the response structure will differ.

### Success Response

#### Send SMS API Responses

For Non-Masking and Masking API:

```json
{
    "status": "success",
    "message": "SMS sent successfully."
}
```

#### Balance Check API Response

```json
{
    "status": "success",
    "message": "Balance retrieved successfully.",
    "masking": "450",
    "non-masking": "500"
}
```

### Error Response

```json
{
    "status": "error",
    "message": "An error occurred while processing your request."
}
```

#### Balance Check Error Response

```json
{
    "status": "error",
    "message": "An error occurred while checking the balance."
}
```

## Notes

- The API responses include a "status" field to indicate success or error.
- The "message" field provides a human-readable description of the outcome.
- In the balance check response, the "masking" and "non-masking" fields provide the available balances for each type of SMS.

## Conclusion

This documentation provides details on using the SMS API for sending messages and checking account balances. Make sure to use the correct API endpoint, provide the required parameters, and handle the response accordingly. If you encounter any issues, refer to the provided error messages for troubleshooting.