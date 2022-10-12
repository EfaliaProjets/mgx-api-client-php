# OpenAPI\Client\MGLoginApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**etatMGLogin()**](MGLoginApi.md#etatMGLogin) | **GET** /api/mglogin/etat | Récupérer l&#39;état de la connexion à MGLogin |
| [**synchroniserMGLogin()**](MGLoginApi.md#synchroniserMGLogin) | **POST** /api/mglogin/synchronisation | Synchroniser les utilisateurs de MGLogin |


## `etatMGLogin()`

```php
etatMGLogin(): \OpenAPI\Client\Model\ReponseEtatMGLogin
```

Récupérer l'état de la connexion à MGLogin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MGLoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->etatMGLogin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGLoginApi->etatMGLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ReponseEtatMGLogin**](../Model/ReponseEtatMGLogin.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `synchroniserMGLogin()`

```php
synchroniserMGLogin()
```

Synchroniser les utilisateurs de MGLogin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MGLoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->synchroniserMGLogin();
} catch (Exception $e) {
    echo 'Exception when calling MGLoginApi->synchroniserMGLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
