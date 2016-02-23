# Fortnox PHP SDK

Unofficial PHP wrapper for Fortnox API
http://developer.fortnox.se/getting-started/

## Get a developer account

First of all you need to register as a developer.

To register you just need to fill out [this form](http://developer.fortnox.se/register/).

## Get your Access Token

You’ve got your Authorization-Code and your Client-Secret. These will be the keys to get the final Access-Token.

The Authorization-Code is valid for seven days before becoming invalid and can only be used once to retrieve the Access-Token.

If the Authorization-Code is used again after an Access-Token has been retrieved the Authorization-Code will become 
invalid and the integration will become deactivated.

The Access-Token combined with the Client-Secret is unique for your application and connects to a specific Fortnox account.

To retrieve your Access-Token you simply send a request to our API using the headers “Authorization-Code” and “Client-Secret”.

Here’s an example using cURL

```
curl -X "GET" "https://api.fortnox.se/3/" \
     -H "Authorization-Code: YOUR_AUTHORIZATION_CODE" \
     -H "Client-Secret: YOUR_CLIENT_SECRET" \
     -H "Content-Type: application/json" \
     -H "Accept: application/json"
```

## Supported Apis

* Account API
* Account Charts API
* Archive API
* Article API
* Article File Connection API
* Article URL Connection API
* Customer API
* Invoice API
* Project API
* Supplier API

##  Authors and Contributors

Make with love to Fortnox

In 2016, PhuHM ([@hmphu][1]), [http://hmphu.com][2]

##  Support or Contact

Having trouble? [contact me][3]

[1]: https://github.com/hmphu
[2]: http://www.hnphu.com
[3]: mailto:me@hmphu.com