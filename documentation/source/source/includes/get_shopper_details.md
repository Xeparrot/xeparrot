# Get Shopper Details

### Method 
`Method: GET`

### Endpoint
`https://v3-shopper-api.adup.io/api/v1/shopper`

### Query Parameters

Parameter | Type | Required | Description
--------- | ------- |  ------- | -----------
phone_number | init | Yes | Phone number without country code
country_code | init | Yes | Country code without leading plus (+) or zeroes (0)

```shell
curl --location --request GET 'https://v3-shopper-api.adup.io/api/v1/shopper?phone_number=714879796&country_code=00'
```

```javascript
// WARNING: For GET requests, body is set to null by browsers.

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://v3-shopper-api.adup.io/api/v1/shopper?phone_number=714879796&country_code=00");

xhr.send();
```
### Response 

> The above command returns JSON structured like this:

```json
{
    "result": {
        "opt": 1,
        "saved_user": 1,
        "webauthn": 0,
        "verified": "1"
    },
    "success": true,
    "errors": [],
    "messages": [],
    "result_info": null
}

```