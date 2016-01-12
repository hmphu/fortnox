# PHP Fortnox
PHP wrapper for Fortnox API

### Get your Access Token
```
curl -X "GET" "https://api.fortnox.se/3/" \
     -H "Authorization-Code: YOUR_AUTHORIZATION_CODE" \
     -H "Client-Secret: YOUR_CLIENT_SECRET" \
     -H "Content-Type: application/json" \
     -H "Accept: application/json"
```