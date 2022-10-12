# OpenAPI\Client\ArmoireApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**creerArmoire()**](ArmoireApi.md#creerArmoire) | **POST** /api/armoires | Créer une armoire |
| [**creerGabaritDocumentArmoire()**](ArmoireApi.md#creerGabaritDocumentArmoire) | **POST** /api/armoires/{armoire}/gabarits-de-document | Créer un gabarit de document dans une armoire |
| [**creerGabaritDossierArmoire()**](ArmoireApi.md#creerGabaritDossierArmoire) | **POST** /api/armoires/{armoire}/gabarits-de-dossier | Créer un gabarit de dossier dans une armoire |
| [**listerArmoires()**](ArmoireApi.md#listerArmoires) | **GET** /api/armoires | Lister les armoires |
| [**listerGabaritsDocumentArmoire()**](ArmoireApi.md#listerGabaritsDocumentArmoire) | **GET** /api/armoires/{armoire}/gabarits-de-document | Lister les gabarits de document d&#39;une armoire |
| [**listerGabaritsDossierArmoire()**](ArmoireApi.md#listerGabaritsDossierArmoire) | **GET** /api/armoires/{armoire}/gabarits-de-dossier | Lister les gabarits de dossier d&#39;une armoire |
| [**modifierArmoire()**](ArmoireApi.md#modifierArmoire) | **PUT** /api/armoires/{id} | Mise à jour de l&#39;armoire |
| [**supprimerArmoire()**](ArmoireApi.md#supprimerArmoire) | **DELETE** /api/armoires/{id} | Suppression d&#39;une armoire |


## `creerArmoire()`

```php
creerArmoire($creation_armoire): \OpenAPI\Client\Model\Armoire
```

Créer une armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ArmoireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creation_armoire = new \OpenAPI\Client\Model\CreationArmoire(); // \OpenAPI\Client\Model\CreationArmoire

try {
    $result = $apiInstance->creerArmoire($creation_armoire);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArmoireApi->creerArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creation_armoire** | [**\OpenAPI\Client\Model\CreationArmoire**](../Model/CreationArmoire.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Armoire**](../Model/Armoire.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creerGabaritDocumentArmoire()`

```php
creerGabaritDocumentArmoire($armoire, $structure_metadonnee): \OpenAPI\Client\Model\GabaritDeDocument
```

Créer un gabarit de document dans une armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ArmoireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$armoire = 'armoire_example'; // string | L'id de l'armoire
$structure_metadonnee = new \OpenAPI\Client\Model\StructureMetadonnee(); // \OpenAPI\Client\Model\StructureMetadonnee

try {
    $result = $apiInstance->creerGabaritDocumentArmoire($armoire, $structure_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArmoireApi->creerGabaritDocumentArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **armoire** | **string**| L&#39;id de l&#39;armoire | |
| **structure_metadonnee** | [**\OpenAPI\Client\Model\StructureMetadonnee**](../Model/StructureMetadonnee.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDocument**](../Model/GabaritDeDocument.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creerGabaritDossierArmoire()`

```php
creerGabaritDossierArmoire($armoire, $structure_metadonnee): \OpenAPI\Client\Model\GabaritDeDossier
```

Créer un gabarit de dossier dans une armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ArmoireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$armoire = 'armoire_example'; // string | L'id de l'armoire
$structure_metadonnee = new \OpenAPI\Client\Model\StructureMetadonnee(); // \OpenAPI\Client\Model\StructureMetadonnee

try {
    $result = $apiInstance->creerGabaritDossierArmoire($armoire, $structure_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArmoireApi->creerGabaritDossierArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **armoire** | **string**| L&#39;id de l&#39;armoire | |
| **structure_metadonnee** | [**\OpenAPI\Client\Model\StructureMetadonnee**](../Model/StructureMetadonnee.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDossier**](../Model/GabaritDeDossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listerArmoires()`

```php
listerArmoires(): \OpenAPI\Client\Model\Armoire[]
```

Lister les armoires

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ArmoireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listerArmoires();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArmoireApi->listerArmoires: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Armoire[]**](../Model/Armoire.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listerGabaritsDocumentArmoire()`

```php
listerGabaritsDocumentArmoire($armoire): \OpenAPI\Client\Model\GabaritDeDocument[]
```

Lister les gabarits de document d'une armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ArmoireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$armoire = 'armoire_example'; // string | L'id de l'armoire

try {
    $result = $apiInstance->listerGabaritsDocumentArmoire($armoire);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArmoireApi->listerGabaritsDocumentArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **armoire** | **string**| L&#39;id de l&#39;armoire | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDocument[]**](../Model/GabaritDeDocument.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listerGabaritsDossierArmoire()`

```php
listerGabaritsDossierArmoire($armoire): \OpenAPI\Client\Model\GabaritDeDossier[]
```

Lister les gabarits de dossier d'une armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ArmoireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$armoire = 'armoire_example'; // string | L'id de l'armoire

try {
    $result = $apiInstance->listerGabaritsDossierArmoire($armoire);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArmoireApi->listerGabaritsDossierArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **armoire** | **string**| L&#39;id de l&#39;armoire | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDossier[]**](../Model/GabaritDeDossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifierArmoire()`

```php
modifierArmoire($id, $modification_armoire): \OpenAPI\Client\Model\Armoire
```

Mise à jour de l'armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ArmoireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'armoire
$modification_armoire = new \OpenAPI\Client\Model\ModificationArmoire(); // \OpenAPI\Client\Model\ModificationArmoire

try {
    $result = $apiInstance->modifierArmoire($id, $modification_armoire);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArmoireApi->modifierArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de l&#39;armoire | |
| **modification_armoire** | [**\OpenAPI\Client\Model\ModificationArmoire**](../Model/ModificationArmoire.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Armoire**](../Model/Armoire.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supprimerArmoire()`

```php
supprimerArmoire($id)
```

Suppression d'une armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ArmoireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'armoire

try {
    $apiInstance->supprimerArmoire($id);
} catch (Exception $e) {
    echo 'Exception when calling ArmoireApi->supprimerArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de l&#39;armoire | |

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
