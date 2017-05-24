# Bitcoin PHP API client

For more information, please visit [http://www.astarlabs.com](http://www.astarlabs.com)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new AStar\Client\Api\SearchApi();
$token = "token_example"; // string | a signed JWT token with the company privatekey.
$account = 56; // int | API ID for Account where the coins must be spend.
$user = "user_example"; // string | API user name.
$pass = "pass_example"; // string | API user password.
$id = 56; // int | API id for blockchain transaction

try {
    $result = $api_instance->searchByAPIID($token, $account, $user, $pass, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchByAPIID: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://dev.astar.tech:8085/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SearchApi* | [**searchByAPIID**](docs/Api/SearchApi.md#searchbyapiid) | **POST** /search/registered/id | Get transaction informations by API ID
*SearchApi* | [**searchByContent**](docs/Api/SearchApi.md#searchbycontent) | **POST** /search/registered/content | Get transaction informations by file or string content
*SearchApi* | [**searchByHash**](docs/Api/SearchApi.md#searchbyhash) | **POST** /search/registered/hash | Get transaction informations by file or string hash
*SendApi* | [**sendFile**](docs/Api/SendApi.md#sendfile) | **POST** /send/opreturn/base64 | Send file hash to bitcoin blockchain
*SendApi* | [**sendHash**](docs/Api/SendApi.md#sendhash) | **POST** /send/opreturn/hash | Send hash to bitcoin blockchain
*SendApi* | [**sendPayAddress**](docs/Api/SendApi.md#sendpayaddress) | **POST** /send/payaddress | Send a value for address
*SendApi* | [**sendString**](docs/Api/SendApi.md#sendstring) | **POST** /send/opreturn/string | Send string to bitcoin blockchain


## Documentation For Models

 - [SingleResult](docs/Model/SingleResult.md)
 - [Transaction](docs/Model/Transaction.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

contato@astarlabs.com


