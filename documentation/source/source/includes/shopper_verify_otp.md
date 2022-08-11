# Verify Shopper OTP

## Method
`Method: POST`

## Endpoint
https://v3-shopper-api.adup.io/api/v1/shopper/otp

## Query Parameters

Parameter | Type | Required | Description
--------- | ------- |  ------- | -----------
phone_number | init | Yes | Phone number without country code
country_code | init | Yes | Country code without leading plus (+) or zeroes (0)
otp_id | string | Yes | OTP ID you received when the OTP was sent
otp_code | init | Yes | Verification code user entered




```shell
curl --location --request POST 'https://v3-shopper-api.adup.io/api/v1/shopper/otp' \
--form 'phone_number="714879796"' \
--form 'country_code="00"' \
--form 'otp_id="0f49c246-067b-4ff1-8784-59953f5fbb7f"' \
--form 'otp_code="3323"'
```

```javascript
// WARNING: For POST requests, body is set to null by browsers.
var data = new FormData();
data.append("phone_number", "714879796");
data.append("country_code", "00");
data.append("otp_id", "0f49c246-067b-4ff1-8784-59953f5fbb7f");
data.append("otp_code", "3323");

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "https://v3-shopper-api.adup.io/api/v1/shopper/otp");

xhr.send(data);
```

### Response 

> The above command returns JSON structured like this:

```json
{
    "result": {
        "otp": true,
        "otp_id": "fad17755-a2e6-49c1-b52c-029f631d7e9a"
    },
    "success": true,
    "errors": [],
    "messages": [],
    "result_info": null
}

```
