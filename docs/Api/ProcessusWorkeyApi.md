# OpenAPI\Client\ProcessusWorkeyApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**creerProcessus()**](ProcessusWorkeyApi.md#creerProcessus) | **POST** /api/processus | Créer un processus |
| [**modifierProcessus()**](ProcessusWorkeyApi.md#modifierProcessus) | **PUT** /api/processus/{id} | Modifier un processus |
| [**processus()**](ProcessusWorkeyApi.md#processus) | **GET** /api/processus | Lister les processus |
| [**supprimerProcessus()**](ProcessusWorkeyApi.md#supprimerProcessus) | **DELETE** /api/processus/{id} | Suppression d&#39;un processus |


## `creerProcessus()`

```php
creerProcessus($creation_processus): \OpenAPI\Client\Model\Processus
```

Créer un processus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProcessusWorkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creation_processus = new \OpenAPI\Client\Model\CreationProcessus(); // \OpenAPI\Client\Model\CreationProcessus

try {
    $result = $apiInstance->creerProcessus($creation_processus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessusWorkeyApi->creerProcessus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creation_processus** | [**\OpenAPI\Client\Model\CreationProcessus**](../Model/CreationProcessus.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Processus**](../Model/Processus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifierProcessus()`

```php
modifierProcessus($id, $modifier_processus_request): \OpenAPI\Client\Model\Processus
```

Modifier un processus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProcessusWorkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du processus
$modifier_processus_request = new \OpenAPI\Client\Model\ModifierProcessusRequest(); // \OpenAPI\Client\Model\ModifierProcessusRequest

try {
    $result = $apiInstance->modifierProcessus($id, $modifier_processus_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessusWorkeyApi->modifierProcessus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du processus | |
| **modifier_processus_request** | [**\OpenAPI\Client\Model\ModifierProcessusRequest**](../Model/ModifierProcessusRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Processus**](../Model/Processus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processus()`

```php
processus(): \OpenAPI\Client\Model\Processus[]
```

Lister les processus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProcessusWorkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->processus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessusWorkeyApi->processus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Processus[]**](../Model/Processus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supprimerProcessus()`

```php
supprimerProcessus($id)
```

Suppression d'un processus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProcessusWorkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du processus

try {
    $apiInstance->supprimerProcessus($id);
} catch (Exception $e) {
    echo 'Exception when calling ProcessusWorkeyApi->supprimerProcessus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du processus | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
