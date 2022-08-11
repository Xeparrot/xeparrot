# WebAuthn Login


## Endpoint
https://v3-shopper-api.adup.io/api/v1/web_authn/login

## Method
`Method: GET`

## Authorization

Type: Bearer Token


```shell
curl --location --request GET 'http://localhost:8000/api/v1/web_authn/login'
```

```javascript
// WARNING: For GET requests, body is set to null by browsers.
var data = new FormData();

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "http://localhost:8000/api/v1/web_authn/login");

xhr.send(data);
```