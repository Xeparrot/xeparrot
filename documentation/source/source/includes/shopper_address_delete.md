
# Shopper Address (Delete)

## Method
`Method: DEL`

## Endpoint
`https://v3-shopper-api.adup.io/api/v1/shopper/address`

## Authorization

Type: Bearer Token

## Query Parameters

Parameter | Type | Required | Description
--------- | ------- |  ------- | -----------
address_id | string | Yes | Set address_id for expected address to delete


```shell
curl --location --request DELETE 'https://v3-shopper-api.adup.io/api/v1/shopper/address?address_id=50'
```

```javascript
var formdata = new FormData();

var requestOptions = {
  method: 'DELETE',
  body: formdata,
  redirect: 'follow'
};

fetch("https://v3-shopper-api.adup.io/api/v1/shopper/address?address_id=50", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
```