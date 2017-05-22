# Swagger\Client\SendApi

All URIs are relative to *http://dev.astar.tech:8085/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendFile**](SendApi.md#sendFile) | **POST** /send/opreturn/base64 | Send file hash to bitcoin blockchain
[**sendHash**](SendApi.md#sendHash) | **POST** /send/opreturn/hash | Send hash to bitcoin blockchain
[**sendPayAddress**](SendApi.md#sendPayAddress) | **POST** /send/payaddress | Send a value for address
[**sendString**](SendApi.md#sendString) | **POST** /send/opreturn/string | Send string to bitcoin blockchain


# **sendFile**
> \Swagger\Client\Model\SingleResult sendFile($token, $account, $user, $pass, $base64, $coin, $test)

Send file hash to bitcoin blockchain

Send an OP_RETURN transaction with a base64 encoded file and return the API id for the blockchain transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SendApi();
$token = "token_example"; // string | a signed JWT token with the company privatekey.
$account = 56; // int | API ID for Account where the coins must be spend.
$user = "user_example"; // string | API user name.
$pass = "pass_example"; // string | API user password.
$base64 = "base64_example"; // string | base64 encoded file.
$coin = "coin_example"; // string | the coin name - bitcoin/litecoin.
$test = 56; // int | if test = 1 so use testnet else test = 0 for mainnet.

try {
    $result = $api_instance->sendFile($token, $account, $user, $pass, $base64, $coin, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| a signed JWT token with the company privatekey. |
 **account** | **int**| API ID for Account where the coins must be spend. |
 **user** | **string**| API user name. |
 **pass** | **string**| API user password. |
 **base64** | **string**| base64 encoded file. |
 **coin** | **string**| the coin name - bitcoin/litecoin. |
 **test** | **int**| if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. |

### Return type

[**\Swagger\Client\Model\SingleResult**](../Model/SingleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendHash**
> \Swagger\Client\Model\SingleResult sendHash($token, $account, $user, $pass, $hash, $coin, $test)

Send hash to bitcoin blockchain

Send an OP_RETURN transaction with a hash and return the API id for the blockchain transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SendApi();
$token = "token_example"; // string | a signed JWT token with the company privatekey.
$account = 56; // int | API ID for Account where the coins must be spend.
$user = "user_example"; // string | API user name.
$pass = "pass_example"; // string | API user password.
$hash = "hash_example"; // string | hash to send.
$coin = "coin_example"; // string | the coin name - bitcoin/litecoin.
$test = 56; // int | if test = 1 so use testnet else test = 0 for mainnet.

try {
    $result = $api_instance->sendHash($token, $account, $user, $pass, $hash, $coin, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| a signed JWT token with the company privatekey. |
 **account** | **int**| API ID for Account where the coins must be spend. |
 **user** | **string**| API user name. |
 **pass** | **string**| API user password. |
 **hash** | **string**| hash to send. |
 **coin** | **string**| the coin name - bitcoin/litecoin. |
 **test** | **int**| if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. |

### Return type

[**\Swagger\Client\Model\SingleResult**](../Model/SingleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendPayAddress**
> \Swagger\Client\Model\SingleResult sendPayAddress($token, $account, $user, $pass, $address, $amount, $coin, $test)

Send a value for address

Send a value for address by an blockchain transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SendApi();
$token = "token_example"; // string | a signed JWT token with the company privatekey.
$account = 56; // int | API ID for Account where the coins must be spend.
$user = "user_example"; // string | API user name.
$pass = "pass_example"; // string | API user password.
$address = "address_example"; // string | Address to send the amount.
$amount = 3.4; // float | Amount to send
$coin = "coin_example"; // string | the coin name - bitcoin/litecoin.
$test = 56; // int | if test = 1 so use testnet else test = 0 for mainnet.

try {
    $result = $api_instance->sendPayAddress($token, $account, $user, $pass, $address, $amount, $coin, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendPayAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| a signed JWT token with the company privatekey. |
 **account** | **int**| API ID for Account where the coins must be spend. |
 **user** | **string**| API user name. |
 **pass** | **string**| API user password. |
 **address** | **string**| Address to send the amount. |
 **amount** | **float**| Amount to send |
 **coin** | **string**| the coin name - bitcoin/litecoin. |
 **test** | **int**| if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. |

### Return type

[**\Swagger\Client\Model\SingleResult**](../Model/SingleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendString**
> \Swagger\Client\Model\SingleResult sendString($token, $account, $user, $pass, $string, $coin, $test)

Send string to bitcoin blockchain

Send an OP_RETURN transaction with a string and return the API id for the blockchain transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SendApi();
$token = "token_example"; // string | a signed JWT token with the company privatekey.
$account = 56; // int | API ID for Account where the coins must be spend.
$user = "user_example"; // string | API user name.
$pass = "pass_example"; // string | API user password.
$string = "string_example"; // string | string to send.
$coin = "coin_example"; // string | the coin name - bitcoin/litecoin.
$test = 56; // int | if test = 1 so use testnet else test = 0 for mainnet.

try {
    $result = $api_instance->sendString($token, $account, $user, $pass, $string, $coin, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendApi->sendString: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| a signed JWT token with the company privatekey. |
 **account** | **int**| API ID for Account where the coins must be spend. |
 **user** | **string**| API user name. |
 **pass** | **string**| API user password. |
 **string** | **string**| string to send. |
 **coin** | **string**| the coin name - bitcoin/litecoin. |
 **test** | **int**| if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. |

### Return type

[**\Swagger\Client\Model\SingleResult**](../Model/SingleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

