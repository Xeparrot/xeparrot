# WebAuthn Register Verify


## Endpoint
https://v3-shopper-api.adup.io/api/v1/web_authn/register

## Method
`Method: POST`

## Authorization

Type: Bearer Token

## Query Parameters

Parameter | Type | Required | Description
--------- | ------- |  ------- | -----------
challenge_data | text | Yes | You need to add challenge data
challenge_id | init | Yes | Challenge ID

```shell
curl --location --request POST 'https://v3-shopper-api.adup.io/api/v1/web_authn/register' \
--form 'challenge_data="22"' \
--form 'challenge_id="22"'
```

```javascript
// WARNING: For POST requests, body is set to null by browsers.
var data = new FormData();
data.append("challenge_data", "{\"rawId\":[228,44,67,197,46,231,3,112,125,152,132,188,17,137,50,245,31,34,4,227,252,165,208,137,27,65,96,167,43,165,243,9],\"id\":\"5CxDxS7nA3B9mIS8EYky9R8iBOP8pdCJG0Fgpyul8wk\",\"type\":\"public-key\",\"response\":{\"attestationObject\":[163,99,102,109,116,100,110,111,110,101,103,97,116,116,83,116,109,116,160,104,97,117,116,104,68,97,116,97,89,1,103,113,145,41,3,232,138,171,35,230,119,124,160,137,183,108,95,166,133,132,52,217,54,212,94,170,57,190,2,89,69,122,37,69,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,32,228,44,67,197,46,231,3,112,125,152,132,188,17,137,50,245,31,34,4,227,252,165,208,137,27,65,96,167,43,165,243,9,164,1,3,3,57,1,0,32,89,1,0,244,252,84,7,68,67,87,71,248,49,125,210,81,198,82,114,214,139,231,21,224,180,21,83,250,26,217,162,182,163,23,69,61,113,179,64,15,204,101,91,160,122,195,87,115,150,132,172,142,187,216,224,57,5,98,33,209,185,68,201,217,126,32,53,184,30,255,20,76,33,173,200,20,76,160,190,181,245,139,184,254,189,251,249,177,22,55,167,181,69,200,116,129,158,231,148,35,59,209,204,92,232,206,14,173,3,15,127,245,89,207,189,219,16,94,142,88,137,162,95,196,3,116,90,49,184,250,210,92,188,141,7,106,28,227,199,122,206,79,229,76,120,80,244,134,96,33,105,177,16,249,251,149,133,24,246,133,120,88,112,47,233,175,45,167,41,112,47,163,225,206,228,82,213,66,134,136,128,227,158,223,138,210,148,94,114,79,122,91,81,52,11,168,212,246,37,125,210,28,201,96,178,156,87,123,22,95,95,164,29,3,131,166,222,129,123,26,211,161,78,97,69,152,6,116,247,184,25,70,98,35,141,198,132,153,89,163,16,48,35,24,220,240,62,188,255,181,20,105,140,252,176,211,226,170,177,33,67,1,0,1],\"clientDataJSON\":{\"type\":\"webauthn.create\",\"challenge\":\"do--N_IeN_anzZtcKDWuNA\",\"origin\":\"https://v3-shopper-api.adup.io\",\"crossOrigin\":false}}}");
data.append("challenge_id", "chal_17");

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "http://localhost:8000/api/v1/web_authn/register");

xhr.send(data);
```
