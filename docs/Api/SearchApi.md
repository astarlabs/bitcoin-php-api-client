# Swagger\Client\SearchApi

All URIs are relative to *http://dev.astar.tech:8085/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchByAPIID**](SearchApi.md#searchByAPIID) | **POST** /search/registered/id | Get transaction informations by API ID
[**searchByContent**](SearchApi.md#searchByContent) | **POST** /search/registered/content | Get transaction informations by file or string content
[**searchByHash**](SearchApi.md#searchByHash) | **POST** /search/registered/hash | Get transaction informations by file or string hash


# **searchByAPIID**
> \Swagger\Client\Model\Transaction searchByAPIID($token, $account, $user, $pass, $id)

Get transaction informations by API ID

Get transaction informations by API ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| a signed JWT token with the company privatekey. |
 **account** | **int**| API ID for Account where the coins must be spend. |
 **user** | **string**| API user name. |
 **pass** | **string**| API user password. |
 **id** | **int**| API id for blockchain transaction |

### Return type

[**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByContent**
> \Swagger\Client\Model\Transaction searchByContent($token, $account, $user, $pass, $content)

Get transaction informations by file or string content

Get transaction informations by file or string content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();
$token = "token_example"; // string | a signed JWT token with the company privatekey.
$account = 56; // int | API ID for Account where the coins must be spend.
$user = "user_example"; // string | API user name.
$pass = "pass_example"; // string | API user password.
$content = "content_example"; // string | file or string content.

try {
    $result = $api_instance->searchByContent($token, $account, $user, $pass, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchByContent: ', $e->getMessage(), PHP_EOL;
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
 **content** | **string**| file or string content. |

### Return type

[**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByHash**
> \Swagger\Client\Model\Transaction searchByHash($token, $account, $user, $pass, $hash)

Get transaction informations by file or string hash

Get transaction informations by file or string hash

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();
$token = "token_example"; // string | a signed JWT token with the company privatekey.
$account = 56; // int | API ID for Account where the coins must be spend.
$user = "user_example"; // string | API user name.
$pass = "pass_example"; // string | API user password.
$hash = "hash_example"; // string | hash of content.

try {
    $result = $api_instance->searchByHash($token, $account, $user, $pass, $hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchByHash: ', $e->getMessage(), PHP_EOL;
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
 **hash** | **string**| hash of content. |

### Return type

[**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

