# Init Request

This endpoint is used for app initiation, and when this endpoint is called it will provide all the required details to serve the initial interface.

### Method
`Method: GET`

### Endpoint
`https://v3-shopper-api.adup.io/api/v1/init`

### Query Parameters

Parameter | Type | Required | Description
--------- | ------- |  ------- | -----------
mode | string | Yes | Currently support fastcheckout & autofill modes
shop_id | init | No | Required for fastcheckout mode. Shop ID of the visiting shop
products | sting | No | Required for fastcheckout mode. Comma separated string of all product SKUs

### Response




<aside class="success">
    if you using Bearer authentication you will get the shopper object on this response
</aside>




```shell
curl --location --request GET 'https://v3-shopper-api.adup.io/api/v1/init?mode=fastcheckout&shop_id=1&products=sku1,sku2'
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

xhr.open("GET", "https://v3-shopper-api.adup.io/api/v1/init?mode=fastcheckout&shop_id=1&products=sku1,sku2");

xhr.send();
```

> The above command returns JSON structured like this:

```json
{
    "result": {
        "shop": null,
        "products": [
            {
                "9a19b2d7-49de-3481-8cc7-92c638df3ac8": {
                    "product_id": 1,
                    "type": "variant",
                    "name": "Jerald",
                    "slug": "temporibus-laboriosam-facere-et-voluptas-modi-aut",
                    "image": "https://via.placeholder.com/640x480.png/002266?text=magni",
                    "currency": null,
                    "display_price": null,
                    "variants": [
                        {
                            "id": 1,
                            "title": "SpringGreen",
                            "currency": "MRU",
                            "price": 100
                        },
                        {
                            "id": 2,
                            "title": "ForestGreen",
                            "currency": "PGK",
                            "price": 100
                        }
                    ]
                }
            },
            {
                "9dcee36a-f311-376e-acba-35d7e124f6b8": {
                    "product_id": 2,
                    "type": "variant",
                    "name": "Weldon",
                    "slug": "culpa-quidem-minus-repudiandae",
                    "image": "https://via.placeholder.com/640x480.png/0088bb?text=quasi",
                    "currency": null,
                    "display_price": null,
                    "variants": []
                }
            }
        ],
        "user_data": {
            "device_ip": "127.0.0.1",
            "device_country": false,
            "browser_language": null,
            "browser_name": "",
            "is_bot": true,
            "os": ""
        },
        "app_data": {
            "static_base_url": "http://localhost:8000",
            "api_version": "v1.0",
            "countries": {
                "AF": {
                    "name": "Afghanistan",
                    "dial_code": "+93",
                    "flag": "🇦🇫"
                },
                "AX": {
                    "name": "Aland Islands",
                    "dial_code": "+358",
                    "flag": "🇦🇽"
                },
                "AL": {
                    "name": "Albania",
                    "dial_code": "+355",
                    "flag": "🇦🇱"
                },
                "DZ": {
                    "name": "Algeria",
                    "dial_code": "+213",
                    "flag": "🇩🇿"
                },
                "AS": {
                    "name": "American Samoa",
                    "dial_code": "+1684",
                    "flag": "🇦🇸"
                },
                "AD": {
                    "name": "Andorra",
                    "dial_code": "+376",
                    "flag": "🇦🇩"
                },
                "AO": {
                    "name": "Angola",
                    "dial_code": "+244",
                    "flag": "🇦🇴"
                },
                "AI": {
                    "name": "Anguilla",
                    "dial_code": "+1264",
                    "flag": "🇦🇮"
                },
                "AQ": {
                    "name": "Antarctica",
                    "dial_code": "+672",
                    "flag": "🇦🇶"
                },
                "AG": {
                    "name": "Antigua and Barbuda",
                    "dial_code": "+1268",
                    "flag": "🇦🇬"
                },
                "AR": {
                    "name": "Argentina",
                    "dial_code": "+54",
                    "flag": "🇦🇷"
                },
                "AM": {
                    "name": "Armenia",
                    "dial_code": "+374",
                    "flag": "🇦🇲"
                },
                "AW": {
                    "name": "Aruba",
                    "dial_code": "+297",
                    "flag": "🇦🇼"
                },
                "AU": {
                    "name": "Australia",
                    "dial_code": "+61",
                    "flag": "🇦🇺"
                },
                "AT": {
                    "name": "Austria",
                    "dial_code": "+43",
                    "flag": "🇦🇹"
                },
                "AZ": {
                    "name": "Azerbaijan",
                    "dial_code": "+994",
                    "flag": "🇦🇿"
                },
                "BS": {
                    "name": "Bahamas",
                    "dial_code": "+1242",
                    "flag": "🇧🇸"
                },
                "BH": {
                    "name": "Bahrain",
                    "dial_code": "+973",
                    "flag": "🇧🇭"
                },
                "BD": {
                    "name": "Bangladesh",
                    "dial_code": "+880",
                    "flag": "🇧🇩"
                },
                "BB": {
                    "name": "Barbados",
                    "dial_code": "+1246",
                    "flag": "🇧🇧"
                },
                "BY": {
                    "name": "Belarus",
                    "dial_code": "+375",
                    "flag": "🇧🇾"
                },
                "BE": {
                    "name": "Belgium",
                    "dial_code": "+32",
                    "flag": "🇧🇪"
                },
                "BZ": {
                    "name": "Belize",
                    "dial_code": "+501",
                    "flag": "🇧🇿"
                },
                "BJ": {
                    "name": "Benin",
                    "dial_code": "+229",
                    "flag": "🇧🇯"
                },
                "BM": {
                    "name": "Bermuda",
                    "dial_code": "+1441",
                    "flag": "🇧🇲"
                },
                "BT": {
                    "name": "Bhutan",
                    "dial_code": "+975",
                    "flag": "🇧🇹"
                },
                "BO": {
                    "name": "Bolivia, Plurinational State of bolivia",
                    "dial_code": "+591",
                    "flag": "🇧🇴"
                },
                "BA": {
                    "name": "Bosnia and Herzegovina",
                    "dial_code": "+387",
                    "flag": "🇧🇦"
                },
                "BW": {
                    "name": "Botswana",
                    "dial_code": "+267",
                    "flag": "🇧🇼"
                },
                "BV": {
                    "name": "Bouvet Island",
                    "dial_code": "+47",
                    "flag": "🇧🇻"
                },
                "BR": {
                    "name": "Brazil",
                    "dial_code": "+55",
                    "flag": "🇧🇷"
                },
                "IO": {
                    "name": "British Indian Ocean Territory",
                    "dial_code": "+246",
                    "flag": "🇮🇴"
                },
                "BN": {
                    "name": "Brunei Darussalam",
                    "dial_code": "+673",
                    "flag": "🇧🇳"
                },
                "BG": {
                    "name": "Bulgaria",
                    "dial_code": "+359",
                    "flag": "🇧🇬"
                },
                "BF": {
                    "name": "Burkina Faso",
                    "dial_code": "+226",
                    "flag": "🇧🇫"
                },
                "BI": {
                    "name": "Burundi",
                    "dial_code": "+257",
                    "flag": "🇧🇮"
                },
                "KH": {
                    "name": "Cambodia",
                    "dial_code": "+855",
                    "flag": "🇰🇭"
                },
                "CM": {
                    "name": "Cameroon",
                    "dial_code": "+237",
                    "flag": "🇨🇲"
                },
                "CA": {
                    "name": "Canada",
                    "dial_code": "+1",
                    "flag": "🇨🇦"
                },
                "CV": {
                    "name": "Cape Verde",
                    "dial_code": "+238",
                    "flag": "🇨🇻"
                },
                "KY": {
                    "name": "Cayman Islands",
                    "dial_code": "+345",
                    "flag": "🇰🇾"
                },
                "CF": {
                    "name": "Central African Republic",
                    "dial_code": "+236",
                    "flag": "🇨🇫"
                },
                "TD": {
                    "name": "Chad",
                    "dial_code": "+235",
                    "flag": "🇹🇩"
                },
                "CL": {
                    "name": "Chile",
                    "dial_code": "+56",
                    "flag": "🇨🇱"
                },
                "CN": {
                    "name": "China",
                    "dial_code": "+86",
                    "flag": "🇨🇳"
                },
                "CX": {
                    "name": "Christmas Island",
                    "dial_code": "+61",
                    "flag": "🇨🇽"
                },
                "CC": {
                    "name": "Cocos (Keeling) Islands",
                    "dial_code": "+61",
                    "flag": "🇨🇨"
                },
                "CO": {
                    "name": "Colombia",
                    "dial_code": "+57",
                    "flag": "🇨🇴"
                },
                "KM": {
                    "name": "Comoros",
                    "dial_code": "+269",
                    "flag": "🇰🇲"
                },
                "CG": {
                    "name": "Congo",
                    "dial_code": "+242",
                    "flag": "🇨🇬"
                },
                "CD": {
                    "name": "Congo, The Democratic Republic of the Congo",
                    "dial_code": "+243",
                    "flag": "🇨🇩"
                },
                "CK": {
                    "name": "Cook Islands",
                    "dial_code": "+682",
                    "flag": "🇨🇰"
                },
                "CR": {
                    "name": "Costa Rica",
                    "dial_code": "+506",
                    "flag": "🇨🇷"
                },
                "CI": {
                    "name": "Cote d'Ivoire",
                    "dial_code": "+225",
                    "flag": "🇨🇮"
                },
                "HR": {
                    "name": "Croatia",
                    "dial_code": "+385",
                    "flag": "🇭🇷"
                },
                "CU": {
                    "name": "Cuba",
                    "dial_code": "+53",
                    "flag": "🇨🇺"
                },
                "CY": {
                    "name": "Cyprus",
                    "dial_code": "+357",
                    "flag": "🇨🇾"
                },
                "CZ": {
                    "name": "Czech Republic",
                    "dial_code": "+420",
                    "flag": "🇨🇿"
                },
                "DK": {
                    "name": "Denmark",
                    "dial_code": "+45",
                    "flag": "🇩🇰"
                },
                "DJ": {
                    "name": "Djibouti",
                    "dial_code": "+253",
                    "flag": "🇩🇯"
                },
                "DM": {
                    "name": "Dominica",
                    "dial_code": "+1767",
                    "flag": "🇩🇲"
                },
                "DO": {
                    "name": "Dominican Republic",
                    "dial_code": "+1849",
                    "flag": "🇩🇴"
                },
                "EC": {
                    "name": "Ecuador",
                    "dial_code": "+593",
                    "flag": "🇪🇨"
                },
                "EG": {
                    "name": "Egypt",
                    "dial_code": "+20",
                    "flag": "🇪🇬"
                },
                "SV": {
                    "name": "El Salvador",
                    "dial_code": "+503",
                    "flag": "🇸🇻"
                },
                "GQ": {
                    "name": "Equatorial Guinea",
                    "dial_code": "+240",
                    "flag": "🇬🇶"
                },
                "ER": {
                    "name": "Eritrea",
                    "dial_code": "+291",
                    "flag": "🇪🇷"
                },
                "EE": {
                    "name": "Estonia",
                    "dial_code": "+372",
                    "flag": "🇪🇪"
                },
                "ET": {
                    "name": "Ethiopia",
                    "dial_code": "+251",
                    "flag": "🇪🇹"
                },
                "FK": {
                    "name": "Falkland Islands (Malvinas)",
                    "dial_code": "+500",
                    "flag": "🇫🇰"
                },
                "FO": {
                    "name": "Faroe Islands",
                    "dial_code": "+298",
                    "flag": "🇫🇴"
                },
                "FJ": {
                    "name": "Fiji",
                    "dial_code": "+679",
                    "flag": "🇫🇯"
                },
                "FI": {
                    "name": "Finland",
                    "dial_code": "+358",
                    "flag": "🇫🇮"
                },
                "FR": {
                    "name": "France",
                    "dial_code": "+33",
                    "flag": "🇫🇷"
                },
                "GF": {
                    "name": "French Guiana",
                    "dial_code": "+594",
                    "flag": "🇬🇫"
                },
                "PF": {
                    "name": "French Polynesia",
                    "dial_code": "+689",
                    "flag": "🇵🇫"
                },
                "TF": {
                    "name": "French Southern Territories",
                    "dial_code": "+262",
                    "flag": "🇹🇫"
                },
                "GA": {
                    "name": "Gabon",
                    "dial_code": "+241",
                    "flag": "🇬🇦"
                },
                "GM": {
                    "name": "Gambia",
                    "dial_code": "+220",
                    "flag": "🇬🇲"
                },
                "GE": {
                    "name": "Georgia",
                    "dial_code": "+995",
                    "flag": "🇬🇪"
                },
                "DE": {
                    "name": "Germany",
                    "dial_code": "+49",
                    "flag": "🇩🇪"
                },
                "GH": {
                    "name": "Ghana",
                    "dial_code": "+233",
                    "flag": "🇬🇭"
                },
                "GI": {
                    "name": "Gibraltar",
                    "dial_code": "+350",
                    "flag": "🇬🇮"
                },
                "GR": {
                    "name": "Greece",
                    "dial_code": "+30",
                    "flag": "🇬🇷"
                },
                "GL": {
                    "name": "Greenland",
                    "dial_code": "+299",
                    "flag": "🇬🇱"
                },
                "GD": {
                    "name": "Grenada",
                    "dial_code": "+1473",
                    "flag": "🇬🇩"
                },
                "GP": {
                    "name": "Guadeloupe",
                    "dial_code": "+590",
                    "flag": "🇬🇵"
                },
                "GU": {
                    "name": "Guam",
                    "dial_code": "+1671",
                    "flag": "🇬🇺"
                },
                "GT": {
                    "name": "Guatemala",
                    "dial_code": "+502",
                    "flag": "🇬🇹"
                },
                "GG": {
                    "name": "Guernsey",
                    "dial_code": "+44",
                    "flag": "🇬🇬"
                },
                "GN": {
                    "name": "Guinea",
                    "dial_code": "+224",
                    "flag": "🇬🇳"
                },
                "GW": {
                    "name": "Guinea-Bissau",
                    "dial_code": "+245",
                    "flag": "🇬🇼"
                },
                "GY": {
                    "name": "Guyana",
                    "dial_code": "+592",
                    "flag": "🇬🇾"
                },
                "HT": {
                    "name": "Haiti",
                    "dial_code": "+509",
                    "flag": "🇭🇹"
                },
                "HM": {
                    "name": "Heard Island and Mcdonald Islands",
                    "dial_code": "+672",
                    "flag": "🇭🇲"
                },
                "VA": {
                    "name": "Holy See (Vatican City State)",
                    "dial_code": "+379",
                    "flag": "🇻🇦"
                },
                "HN": {
                    "name": "Honduras",
                    "dial_code": "+504",
                    "flag": "🇭🇳"
                },
                "HK": {
                    "name": "Hong Kong",
                    "dial_code": "+852",
                    "flag": "🇭🇰"
                },
                "HU": {
                    "name": "Hungary",
                    "dial_code": "+36",
                    "flag": "🇭🇺"
                },
                "IS": {
                    "name": "Iceland",
                    "dial_code": "+354",
                    "flag": "🇮🇸"
                },
                "IN": {
                    "name": "India",
                    "dial_code": "+91",
                    "flag": "🇮🇳"
                },
                "ID": {
                    "name": "Indonesia",
                    "dial_code": "+62",
                    "flag": "🇮🇩"
                },
                "IR": {
                    "name": "Iran, Islamic Republic of Persian Gulf",
                    "dial_code": "+98",
                    "flag": "🇮🇷"
                },
                "IQ": {
                    "name": "Iraq",
                    "dial_code": "+964",
                    "flag": "🇮🇶"
                },
                "IE": {
                    "name": "Ireland",
                    "dial_code": "+353",
                    "flag": "🇮🇪"
                },
                "IM": {
                    "name": "Isle of Man",
                    "dial_code": "+44",
                    "flag": "🇮🇲"
                },
                "IL": {
                    "name": "Israel",
                    "dial_code": "+972",
                    "flag": "🇮🇱"
                },
                "IT": {
                    "name": "Italy",
                    "dial_code": "+39",
                    "flag": "🇮🇹"
                },
                "JM": {
                    "name": "Jamaica",
                    "dial_code": "+1876",
                    "flag": "🇯🇲"
                },
                "JP": {
                    "name": "Japan",
                    "dial_code": "+81",
                    "flag": "🇯🇵"
                },
                "JE": {
                    "name": "Jersey",
                    "dial_code": "+44",
                    "flag": "🇯🇪"
                },
                "JO": {
                    "name": "Jordan",
                    "dial_code": "+962",
                    "flag": "🇯🇴"
                },
                "KZ": {
                    "name": "Kazakhstan",
                    "dial_code": "+7",
                    "flag": "🇰🇿"
                },
                "KE": {
                    "name": "Kenya",
                    "dial_code": "+254",
                    "flag": "🇰🇪"
                },
                "KI": {
                    "name": "Kiribati",
                    "dial_code": "+686",
                    "flag": "🇰🇮"
                },
                "KP": {
                    "name": "Korea, Democratic People's Republic of Korea",
                    "dial_code": "+850",
                    "flag": "🇰🇵"
                },
                "KR": {
                    "name": "Korea, Republic of South Korea",
                    "dial_code": "+82",
                    "flag": "🇰🇷"
                },
                "XK": {
                    "name": "Kosovo",
                    "dial_code": "+383",
                    "flag": "🇽🇰"
                },
                "KW": {
                    "name": "Kuwait",
                    "dial_code": "+965",
                    "flag": "🇰🇼"
                },
                "KG": {
                    "name": "Kyrgyzstan",
                    "dial_code": "+996",
                    "flag": "🇰🇬"
                },
                "LA": {
                    "name": "Laos",
                    "dial_code": "+856",
                    "flag": "🇱🇦"
                },
                "LV": {
                    "name": "Latvia",
                    "dial_code": "+371",
                    "flag": "🇱🇻"
                },
                "LB": {
                    "name": "Lebanon",
                    "dial_code": "+961",
                    "flag": "🇱🇧"
                },
                "LS": {
                    "name": "Lesotho",
                    "dial_code": "+266",
                    "flag": "🇱🇸"
                },
                "LR": {
                    "name": "Liberia",
                    "dial_code": "+231",
                    "flag": "🇱🇷"
                },
                "LY": {
                    "name": "Libyan Arab Jamahiriya",
                    "dial_code": "+218",
                    "flag": "🇱🇾"
                },
                "LI": {
                    "name": "Liechtenstein",
                    "dial_code": "+423",
                    "flag": "🇱🇮"
                },
                "LT": {
                    "name": "Lithuania",
                    "dial_code": "+370",
                    "flag": "🇱🇹"
                },
                "LU": {
                    "name": "Luxembourg",
                    "dial_code": "+352",
                    "flag": "🇱🇺"
                },
                "MO": {
                    "name": "Macao",
                    "dial_code": "+853",
                    "flag": "🇲🇴"
                },
                "MK": {
                    "name": "Macedonia",
                    "dial_code": "+389",
                    "flag": "🇲🇰"
                },
                "MG": {
                    "name": "Madagascar",
                    "dial_code": "+261",
                    "flag": "🇲🇬"
                },
                "MW": {
                    "name": "Malawi",
                    "dial_code": "+265",
                    "flag": "🇲🇼"
                },
                "MY": {
                    "name": "Malaysia",
                    "dial_code": "+60",
                    "flag": "🇲🇾"
                },
                "MV": {
                    "name": "Maldives",
                    "dial_code": "+960",
                    "flag": "🇲🇻"
                },
                "ML": {
                    "name": "Mali",
                    "dial_code": "+223",
                    "flag": "🇲🇱"
                },
                "MT": {
                    "name": "Malta",
                    "dial_code": "+356",
                    "flag": "🇲🇹"
                },
                "MH": {
                    "name": "Marshall Islands",
                    "dial_code": "+692",
                    "flag": "🇲🇭"
                },
                "MQ": {
                    "name": "Martinique",
                    "dial_code": "+596",
                    "flag": "🇲🇶"
                },
                "MR": {
                    "name": "Mauritania",
                    "dial_code": "+222",
                    "flag": "🇲🇷"
                },
                "MU": {
                    "name": "Mauritius",
                    "dial_code": "+230",
                    "flag": "🇲🇺"
                },
                "YT": {
                    "name": "Mayotte",
                    "dial_code": "+262",
                    "flag": "🇾🇹"
                },
                "MX": {
                    "name": "Mexico",
                    "dial_code": "+52",
                    "flag": "🇲🇽"
                },
                "FM": {
                    "name": "Micronesia, Federated States of Micronesia",
                    "dial_code": "+691",
                    "flag": "🇫🇲"
                },
                "MD": {
                    "name": "Moldova",
                    "dial_code": "+373",
                    "flag": "🇲🇩"
                },
                "MC": {
                    "name": "Monaco",
                    "dial_code": "+377",
                    "flag": "🇲🇨"
                },
                "MN": {
                    "name": "Mongolia",
                    "dial_code": "+976",
                    "flag": "🇲🇳"
                },
                "ME": {
                    "name": "Montenegro",
                    "dial_code": "+382",
                    "flag": "🇲🇪"
                },
                "MS": {
                    "name": "Montserrat",
                    "dial_code": "+1664",
                    "flag": "🇲🇸"
                },
                "MA": {
                    "name": "Morocco",
                    "dial_code": "+212",
                    "flag": "🇲🇦"
                },
                "MZ": {
                    "name": "Mozambique",
                    "dial_code": "+258",
                    "flag": "🇲🇿"
                },
                "MM": {
                    "name": "Myanmar",
                    "dial_code": "+95",
                    "flag": "🇲🇲"
                },
                "NA": {
                    "name": "Namibia",
                    "dial_code": "+264",
                    "flag": "🇳🇦"
                },
                "NR": {
                    "name": "Nauru",
                    "dial_code": "+674",
                    "flag": "🇳🇷"
                },
                "NP": {
                    "name": "Nepal",
                    "dial_code": "+977",
                    "flag": "🇳🇵"
                },
                "NL": {
                    "name": "Netherlands",
                    "dial_code": "+31",
                    "flag": "🇳🇱"
                },
                "AN": {
                    "name": "Netherlands Antilles",
                    "dial_code": "+599",
                    "flag": ""
                },
                "NC": {
                    "name": "New Caledonia",
                    "dial_code": "+687",
                    "flag": "🇳🇨"
                },
                "NZ": {
                    "name": "New Zealand",
                    "dial_code": "+64",
                    "flag": "🇳🇿"
                },
                "NI": {
                    "name": "Nicaragua",
                    "dial_code": "+505",
                    "flag": "🇳🇮"
                },
                "NE": {
                    "name": "Niger",
                    "dial_code": "+227",
                    "flag": "🇳🇪"
                },
                "NG": {
                    "name": "Nigeria",
                    "dial_code": "+234",
                    "flag": "🇳🇬"
                },
                "NU": {
                    "name": "Niue",
                    "dial_code": "+683",
                    "flag": "🇳🇺"
                },
                "NF": {
                    "name": "Norfolk Island",
                    "dial_code": "+672",
                    "flag": "🇳🇫"
                },
                "MP": {
                    "name": "Northern Mariana Islands",
                    "dial_code": "+1670",
                    "flag": "🇲🇵"
                },
                "NO": {
                    "name": "Norway",
                    "dial_code": "+47",
                    "flag": "🇳🇴"
                },
                "OM": {
                    "name": "Oman",
                    "dial_code": "+968",
                    "flag": "🇴🇲"
                },
                "PK": {
                    "name": "Pakistan",
                    "dial_code": "+92",
                    "flag": "🇵🇰"
                },
                "PW": {
                    "name": "Palau",
                    "dial_code": "+680",
                    "flag": "🇵🇼"
                },
                "PS": {
                    "name": "Palestinian Territory, Occupied",
                    "dial_code": "+970",
                    "flag": "🇵🇸"
                },
                "PA": {
                    "name": "Panama",
                    "dial_code": "+507",
                    "flag": "🇵🇦"
                },
                "PG": {
                    "name": "Papua New Guinea",
                    "dial_code": "+675",
                    "flag": "🇵🇬"
                },
                "PY": {
                    "name": "Paraguay",
                    "dial_code": "+595",
                    "flag": "🇵🇾"
                },
                "PE": {
                    "name": "Peru",
                    "dial_code": "+51",
                    "flag": "🇵🇪"
                },
                "PH": {
                    "name": "Philippines",
                    "dial_code": "+63",
                    "flag": "🇵🇭"
                },
                "PN": {
                    "name": "Pitcairn",
                    "dial_code": "+64",
                    "flag": "🇵🇳"
                },
                "PL": {
                    "name": "Poland",
                    "dial_code": "+48",
                    "flag": "🇵🇱"
                },
                "PT": {
                    "name": "Portugal",
                    "dial_code": "+351",
                    "flag": "🇵🇹"
                },
                "PR": {
                    "name": "Puerto Rico",
                    "dial_code": "+1939",
                    "flag": "🇵🇷"
                },
                "QA": {
                    "name": "Qatar",
                    "dial_code": "+974",
                    "flag": "🇶🇦"
                },
                "RO": {
                    "name": "Romania",
                    "dial_code": "+40",
                    "flag": "🇷🇴"
                },
                "RU": {
                    "name": "Russia",
                    "dial_code": "+7",
                    "flag": "🇷🇺"
                },
                "RW": {
                    "name": "Rwanda",
                    "dial_code": "+250",
                    "flag": "🇷🇼"
                },
                "RE": {
                    "name": "Reunion",
                    "dial_code": "+262",
                    "flag": "🇷🇪"
                },
                "BL": {
                    "name": "Saint Barthelemy",
                    "dial_code": "+590",
                    "flag": "🇧🇱"
                },
                "SH": {
                    "name": "Saint Helena, Ascension and Tristan Da Cunha",
                    "dial_code": "+290",
                    "flag": "🇸🇭"
                },
                "KN": {
                    "name": "Saint Kitts and Nevis",
                    "dial_code": "+1869",
                    "flag": "🇰🇳"
                },
                "LC": {
                    "name": "Saint Lucia",
                    "dial_code": "+1758",
                    "flag": "🇱🇨"
                },
                "MF": {
                    "name": "Saint Martin",
                    "dial_code": "+590",
                    "flag": "🇲🇫"
                },
                "PM": {
                    "name": "Saint Pierre and Miquelon",
                    "dial_code": "+508",
                    "flag": "🇵🇲"
                },
                "VC": {
                    "name": "Saint Vincent and the Grenadines",
                    "dial_code": "+1784",
                    "flag": "🇻🇨"
                },
                "WS": {
                    "name": "Samoa",
                    "dial_code": "+685",
                    "flag": "🇼🇸"
                },
                "SM": {
                    "name": "San Marino",
                    "dial_code": "+378",
                    "flag": "🇸🇲"
                },
                "ST": {
                    "name": "Sao Tome and Principe",
                    "dial_code": "+239",
                    "flag": "🇸🇹"
                },
                "SA": {
                    "name": "Saudi Arabia",
                    "dial_code": "+966",
                    "flag": "🇸🇦"
                },
                "SN": {
                    "name": "Senegal",
                    "dial_code": "+221",
                    "flag": "🇸🇳"
                },
                "RS": {
                    "name": "Serbia",
                    "dial_code": "+381",
                    "flag": "🇷🇸"
                },
                "SC": {
                    "name": "Seychelles",
                    "dial_code": "+248",
                    "flag": "🇸🇨"
                },
                "SL": {
                    "name": "Sierra Leone",
                    "dial_code": "+232",
                    "flag": "🇸🇱"
                },
                "SG": {
                    "name": "Singapore",
                    "dial_code": "+65",
                    "flag": "🇸🇬"
                },
                "SK": {
                    "name": "Slovakia",
                    "dial_code": "+421",
                    "flag": "🇸🇰"
                },
                "SI": {
                    "name": "Slovenia",
                    "dial_code": "+386",
                    "flag": "🇸🇮"
                },
                "SB": {
                    "name": "Solomon Islands",
                    "dial_code": "+677",
                    "flag": "🇸🇧"
                },
                "SO": {
                    "name": "Somalia",
                    "dial_code": "+252",
                    "flag": "🇸🇴"
                },
                "ZA": {
                    "name": "South Africa",
                    "dial_code": "+27",
                    "flag": "🇿🇦"
                },
                "SS": {
                    "name": "South Sudan",
                    "dial_code": "+211",
                    "flag": "🇸🇸"
                },
                "GS": {
                    "name": "South Georgia and the South Sandwich Islands",
                    "dial_code": "+500",
                    "flag": "🇬🇸"
                },
                "ES": {
                    "name": "Spain",
                    "dial_code": "+34",
                    "flag": "🇪🇸"
                },
                "LK": {
                    "name": "Sri Lanka",
                    "dial_code": "+94",
                    "flag": "🇱🇰"
                },
                "SD": {
                    "name": "Sudan",
                    "dial_code": "+249",
                    "flag": "🇸🇩"
                },
                "SR": {
                    "name": "Suriname",
                    "dial_code": "+597",
                    "flag": "🇸🇷"
                },
                "SJ": {
                    "name": "Svalbard and Jan Mayen",
                    "dial_code": "+47",
                    "flag": "🇸🇯"
                },
                "SZ": {
                    "name": "Swaziland",
                    "dial_code": "+268",
                    "flag": "🇸🇿"
                },
                "SE": {
                    "name": "Sweden",
                    "dial_code": "+46",
                    "flag": "🇸🇪"
                },
                "CH": {
                    "name": "Switzerland",
                    "dial_code": "+41",
                    "flag": "🇨🇭"
                },
                "SY": {
                    "name": "Syrian Arab Republic",
                    "dial_code": "+963",
                    "flag": "🇸🇾"
                },
                "TW": {
                    "name": "Taiwan",
                    "dial_code": "+886",
                    "flag": "🇹🇼"
                },
                "TJ": {
                    "name": "Tajikistan",
                    "dial_code": "+992",
                    "flag": "🇹🇯"
                },
                "TZ": {
                    "name": "Tanzania, United Republic of Tanzania",
                    "dial_code": "+255",
                    "flag": "🇹🇿"
                },
                "TH": {
                    "name": "Thailand",
                    "dial_code": "+66",
                    "flag": "🇹🇭"
                },
                "TL": {
                    "name": "Timor-Leste",
                    "dial_code": "+670",
                    "flag": "🇹🇱"
                },
                "TG": {
                    "name": "Togo",
                    "dial_code": "+228",
                    "flag": "🇹🇬"
                },
                "TK": {
                    "name": "Tokelau",
                    "dial_code": "+690",
                    "flag": "🇹🇰"
                },
                "TO": {
                    "name": "Tonga",
                    "dial_code": "+676",
                    "flag": "🇹🇴"
                },
                "TT": {
                    "name": "Trinidad and Tobago",
                    "dial_code": "+1868",
                    "flag": "🇹🇹"
                },
                "TN": {
                    "name": "Tunisia",
                    "dial_code": "+216",
                    "flag": "🇹🇳"
                },
                "TR": {
                    "name": "Turkey",
                    "dial_code": "+90",
                    "flag": "🇹🇷"
                },
                "TM": {
                    "name": "Turkmenistan",
                    "dial_code": "+993",
                    "flag": "🇹🇲"
                },
                "TC": {
                    "name": "Turks and Caicos Islands",
                    "dial_code": "+1649",
                    "flag": "🇹🇨"
                },
                "TV": {
                    "name": "Tuvalu",
                    "dial_code": "+688",
                    "flag": "🇹🇻"
                },
                "UG": {
                    "name": "Uganda",
                    "dial_code": "+256",
                    "flag": "🇺🇬"
                },
                "UA": {
                    "name": "Ukraine",
                    "dial_code": "+380",
                    "flag": "🇺🇦"
                },
                "AE": {
                    "name": "United Arab Emirates",
                    "dial_code": "+971",
                    "flag": "🇦🇪"
                },
                "GB": {
                    "name": "United Kingdom",
                    "dial_code": "+44",
                    "flag": "🇬🇧"
                },
                "US": {
                    "name": "United States",
                    "dial_code": "+1",
                    "flag": "🇺🇸"
                },
                "UY": {
                    "name": "Uruguay",
                    "dial_code": "+598",
                    "flag": "🇺🇾"
                },
                "UZ": {
                    "name": "Uzbekistan",
                    "dial_code": "+998",
                    "flag": "🇺🇿"
                },
                "VU": {
                    "name": "Vanuatu",
                    "dial_code": "+678",
                    "flag": "🇻🇺"
                },
                "VE": {
                    "name": "Venezuela, Bolivarian Republic of Venezuela",
                    "dial_code": "+58",
                    "flag": "🇻🇪"
                },
                "VN": {
                    "name": "Vietnam",
                    "dial_code": "+84",
                    "flag": "🇻🇳"
                },
                "VG": {
                    "name": "Virgin Islands, British",
                    "dial_code": "+1284",
                    "flag": "🇻🇬"
                },
                "VI": {
                    "name": "Virgin Islands, U.S.",
                    "dial_code": "+1340",
                    "flag": "🇻🇮"
                },
                "WF": {
                    "name": "Wallis and Futuna",
                    "dial_code": "+681",
                    "flag": "🇼🇫"
                },
                "YE": {
                    "name": "Yemen",
                    "dial_code": "+967",
                    "flag": "🇾🇪"
                },
                "ZM": {
                    "name": "Zambia",
                    "dial_code": "+260",
                    "flag": "🇿🇲"
                },
                "ZW": {
                    "name": "Zimbabwe",
                    "dial_code": "+263",
                    "flag": "🇿🇼"
                }
            }
        },
        "payment_method": [
            {
                "Stripe": {
                    "provider": "stripe",
                    "saveble": null,
                    "icon": "card.svg",
                    "label": "Credit Card",
                    "processor": "frontend",
                    "fields": "",
                    "options ": false
                }
            }
        ]
    },
    "success": true,
    "errors": [],
    "messages": [],
    "result_info": null
}
```