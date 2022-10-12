# OpenAPI\Client\PlanDeClassementApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**planDeClassement()**](PlanDeClassementApi.md#planDeClassement) | **GET** /api/plan-de-classement | Retourne l&#39;arborescence du plan de classement |


## `planDeClassement()`

```php
planDeClassement(): \OpenAPI\Client\Model\PlanDeClassementInner[]
```

Retourne l'arborescence du plan de classement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlanDeClassementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->planDeClassement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanDeClassementApi->planDeClassement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PlanDeClassementInner[]**](../Model/PlanDeClassementInner.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
