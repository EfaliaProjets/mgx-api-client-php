# OpenAPI\Client\RechercheApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rechercheDocuments()**](RechercheApi.md#rechercheDocuments) | **POST** /api/recherche/documents | Recherche de documents |
| [**rechercheDossiers()**](RechercheApi.md#rechercheDossiers) | **POST** /api/recherche/dossiers | Recherche de dossiers |
| [**rechercheRapideDocuments()**](RechercheApi.md#rechercheRapideDocuments) | **POST** /api/recherche/rapide/documents | Recherche rapide de documents |
| [**rechercheRapideDossiers()**](RechercheApi.md#rechercheRapideDossiers) | **POST** /api/recherche/rapide/dossiers | Recherche rapide de dossiers |


## `rechercheDocuments()`

```php
rechercheDocuments($parametres_recherche): \OpenAPI\Client\Model\ReponseRechercheDocuments
```

Recherche de documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RechercheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parametres_recherche = new \OpenAPI\Client\Model\ParametresRecherche(); // \OpenAPI\Client\Model\ParametresRecherche

try {
    $result = $apiInstance->rechercheDocuments($parametres_recherche);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RechercheApi->rechercheDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parametres_recherche** | [**\OpenAPI\Client\Model\ParametresRecherche**](../Model/ParametresRecherche.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReponseRechercheDocuments**](../Model/ReponseRechercheDocuments.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rechercheDossiers()`

```php
rechercheDossiers($parametres_recherche): \OpenAPI\Client\Model\Dossier[]
```

Recherche de dossiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RechercheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parametres_recherche = new \OpenAPI\Client\Model\ParametresRecherche(); // \OpenAPI\Client\Model\ParametresRecherche

try {
    $result = $apiInstance->rechercheDossiers($parametres_recherche);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RechercheApi->rechercheDossiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parametres_recherche** | [**\OpenAPI\Client\Model\ParametresRecherche**](../Model/ParametresRecherche.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Dossier[]**](../Model/Dossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rechercheRapideDocuments()`

```php
rechercheRapideDocuments($parametres_recherche_rapide): \OpenAPI\Client\Model\ReponseRechercheRapideDocuments
```

Recherche rapide de documents

Toute recherche de moins de 3 caractères ne remontera aucun résultat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RechercheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parametres_recherche_rapide = new \OpenAPI\Client\Model\ParametresRechercheRapide(); // \OpenAPI\Client\Model\ParametresRechercheRapide

try {
    $result = $apiInstance->rechercheRapideDocuments($parametres_recherche_rapide);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RechercheApi->rechercheRapideDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parametres_recherche_rapide** | [**\OpenAPI\Client\Model\ParametresRechercheRapide**](../Model/ParametresRechercheRapide.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReponseRechercheRapideDocuments**](../Model/ReponseRechercheRapideDocuments.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rechercheRapideDossiers()`

```php
rechercheRapideDossiers($parametres_recherche_rapide): \OpenAPI\Client\Model\ReponseRechercheDossiers
```

Recherche rapide de dossiers

Toute recherche de moins de 3 caractères ne remontera aucun résultat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RechercheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parametres_recherche_rapide = new \OpenAPI\Client\Model\ParametresRechercheRapide(); // \OpenAPI\Client\Model\ParametresRechercheRapide

try {
    $result = $apiInstance->rechercheRapideDossiers($parametres_recherche_rapide);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RechercheApi->rechercheRapideDossiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parametres_recherche_rapide** | [**\OpenAPI\Client\Model\ParametresRechercheRapide**](../Model/ParametresRechercheRapide.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReponseRechercheDossiers**](../Model/ReponseRechercheDossiers.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
