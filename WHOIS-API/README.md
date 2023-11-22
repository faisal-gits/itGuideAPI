# WHOIS API Documentation

## Introduction

The WHOIS API provided by itGuide Bangladesh allows you to check domain and domain information. All responses from the API are in JSON format.

## Base URL

```plaintext
https://selfcare.itguidebd.com/public_api/
```

## Endpoint

```plaintext
/whois
```

## Methods

- **GET**: Retrieve WHOIS information for a domain.

## Authentication

Include your API key in the request headers:

```plaintext
apiKey: Your_API_Key
```

## Parameters

- `type` (string, required): Specify the type of query. Use `check` for new domain search and `query` for domain information.
- `domain` (string, required): The domain name for WHOIS lookup.

## Example Requests

### New Domain Search

```plaintext
GET /whois?type=check&apiKey=Your_API_Key&domain=newdomain.com
```

### Domain Information Query

```plaintext
GET /whois?type=query&apiKey=Your_API_Key&domain=existingdomain.com
```

## Example Responses

### Success Response

```json
{
    "result": {
        "address": null,
        "city": null,
        "country": null,
        "creation_date": "1997-09-15 04:00:00",
        "dnssec": "unsigned",
        "domain_name": "GOOGLE.COM",
        "emails": "abusecomplaints@markmonitor.com",
        "expiration_date": "2028-09-14 04:00:00",
        "name": null,
        "name_servers": [
        "NS1.GOOGLE.COM",
        "NS2.GOOGLE.COM",
        "NS3.GOOGLE.COM",
        "NS4.GOOGLE.COM"
        ],
        "org": null,
        "referral_url": null,
        "registrar": "MarkMonitor Inc.",
        "state": null,
        "status": [
        "clientDeleteProhibited https://icann.org/epp#clientDeleteProhibited",
        "clientTransferProhibited https://icann.org/epp#clientTransferProhibited",
        "clientUpdateProhibited https://icann.org/epp#clientUpdateProhibited",
        "serverDeleteProhibited https://icann.org/epp#serverDeleteProhibited",
        "serverTransferProhibited https://icann.org/epp#serverTransferProhibited",
        "serverUpdateProhibited https://icann.org/epp#serverUpdateProhibited"
        ],
        "updated_date": "2019-09-09 15:39:04",
        "whois_server": "whois.markmonitor.com",
        "zipcode": null
    }
}
```

### Error Responses

#### Bad Request (400)

```json
{
    "status": "error",
    "message": "The request was unacceptable, often due to missing a required parameter."
}
```

#### Unauthorized (401)

```json
{
    "status": "error",
    "message": "No valid API key provided."
}
```

#### Not Found (404)

```json
{
    "status": "error",
    "message": "The requested resource doesn't exist."
}
```

#### Too Many Requests (429)

```json
{
    "status": "error",
    "message": "API request limit exceeded. See section Rate Limiting for more info."
}
```

#### Server Error (5xx)

```json
{
    "status": "error",
    "message": "We have failed to process your request. (You can contact us anytime)"
}
```

## Error Handling

Handle errors based on the response status and message. Refer to the example responses for each error code.

```

This documentation provides details on using the WHOIS API for checking domain and domain information. Make sure to use the correct API endpoint, provide the required parameters, and handle the response accordingly. If you encounter any issues, refer to the provided error messages for troubleshooting.