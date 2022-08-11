# Shopper Address (Edit)

## Method
`Method: PATCH`

## Endpoint
`https://v3-shopper-api.adup.io/api/v1/shopper/address`

## Authorization

Type: Bearer Token

## Query Parameters

Parameter | Type | Required | Description
--------- | ------- |  ------- | -----------
address_id | string | Yes | Set address_id for expected address to edit
nickname | string | Yes | Nickname for the address block
latitude | string | Yes | Geo data (Latitude)
longitude | string | Yes | Geo data (Longitude)
address | string | Yes | Unique comma separated address string
country | string | Yes | Country

```javascript

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("PATCH", "https://v3-shopper-api.adup.io/api/v1/shopper/address?address_id=50&nickname=malik&latitude=3232332&longitude=322333&address=Mastak,%20EMbplina,%20Talpmine&country=Sri%20Lanka");

xhr.send();
```