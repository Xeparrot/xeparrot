# Request Shopper OTP

### Method
`Method: GET`

### Endpoint
`https://v3-shopper-api.adup.io/api/v1/shopper/otp`

### Query Parameters

Parameter | Type | Required | Description
--------- | ------- |  ------- | -----------
phone_number | init | Yes | Phone number without country code
country_code | init | Yes | Country code without leading plus (+) or zeroes (0)

<aside class="info">
   SMS provider currently only works in Europian region, but you will receive an otp_id in response for any valid phone number
</aside>

```javascript
// WARNING: For GET requests, body is set to null by browsers.

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://v3-shopper-api.adup.io/api/v1/shopper/otp?phone_number=714879796&country_code=00");

xhr.send();
```

```shell
curl --location --request GET 'https://v3-shopper-api.adup.io/api/v1/shopper/otp?phone_number=714879796&country_code=00'
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
