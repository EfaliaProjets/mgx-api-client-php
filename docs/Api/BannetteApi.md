# OpenAPI\Client\BannetteApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activerRechercheDansContenuPourUneBannette()**](BannetteApi.md#activerRechercheDansContenuPourUneBannette) | **PUT** /api/bannettes/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents d&#39;une bannette |
| [**bannettes()**](BannetteApi.md#bannettes) | **GET** /api/bannettes | Lister les bannettes |
| [**creerBannette()**](BannetteApi.md#creerBannette) | **POST** /api/bannettes | Créer une bannette |
| [**deplacerDocumentBannette()**](BannetteApi.md#deplacerDocumentBannette) | **POST** /api/documents/{id}/changement-bannette | Déplacer un document non classé dans une autre bannette |
| [**documentsBannette()**](BannetteApi.md#documentsBannette) | **GET** /api/bannettes/{id}/documents | Lister les documents présents dans la bannette |
| [**modifierBannette()**](BannetteApi.md#modifierBannette) | **PUT** /api/bannettes/{id} | Mise à jour de la bannette |
| [**supprimerBannette()**](BannetteApi.md#supprimerBannette) | **DELETE** /api/bannettes/{id} | Supprimer une bannette |
| [**uploaderDocument()**](BannetteApi.md#uploaderDocument) | **POST** /api/bannettes/{id}/upload | Créer un document dans une bannette |


## `activerRechercheDansContenuPourUneBannette()`

```php
activerRechercheDansContenuPourUneBannette($id, $activation_recherche_bannette): \OpenAPI\Client\Model\Bannette
```

Activer/désactiver la recherche dans le contenu des documents d'une bannette

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BannetteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la bannette
$activation_recherche_bannette = new \OpenAPI\Client\Model\ActivationRechercheBannette(); // \OpenAPI\Client\Model\ActivationRechercheBannette

try {
    $result = $apiInstance->activerRechercheDansContenuPourUneBannette($id, $activation_recherche_bannette);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannetteApi->activerRechercheDansContenuPourUneBannette: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de la bannette | |
| **activation_recherche_bannette** | [**\OpenAPI\Client\Model\ActivationRechercheBannette**](../Model/ActivationRechercheBannette.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Bannette**](../Model/Bannette.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bannettes()`

```php
bannettes(): \OpenAPI\Client\Model\Bannette[]
```

Lister les bannettes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BannetteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bannettes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannetteApi->bannettes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Bannette[]**](../Model/Bannette.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creerBannette()`

```php
creerBannette($information_bannette): \OpenAPI\Client\Model\Bannette
```

Créer une bannette

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BannetteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$information_bannette = new \OpenAPI\Client\Model\InformationBannette(); // \OpenAPI\Client\Model\InformationBannette

try {
    $result = $apiInstance->creerBannette($information_bannette);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannetteApi->creerBannette: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **information_bannette** | [**\OpenAPI\Client\Model\InformationBannette**](../Model/InformationBannette.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Bannette**](../Model/Bannette.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deplacerDocumentBannette()`

```php
deplacerDocumentBannette($id, $bannette_cible): \OpenAPI\Client\Model\Document
```

Déplacer un document non classé dans une autre bannette

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BannetteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document
$bannette_cible = new \OpenAPI\Client\Model\BannetteCible(); // \OpenAPI\Client\Model\BannetteCible

try {
    $result = $apiInstance->deplacerDocumentBannette($id, $bannette_cible);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannetteApi->deplacerDocumentBannette: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |
| **bannette_cible** | [**\OpenAPI\Client\Model\BannetteCible**](../Model/BannetteCible.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsBannette()`

```php
documentsBannette($id): \OpenAPI\Client\Model\Document[]
```

Lister les documents présents dans la bannette

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BannetteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la bannette

try {
    $result = $apiInstance->documentsBannette($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannetteApi->documentsBannette: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de la bannette | |

### Return type

[**\OpenAPI\Client\Model\Document[]**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifierBannette()`

```php
modifierBannette($id, $information_bannette): \OpenAPI\Client\Model\Bannette
```

Mise à jour de la bannette

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BannetteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la bannette
$information_bannette = new \OpenAPI\Client\Model\InformationBannette(); // \OpenAPI\Client\Model\InformationBannette

try {
    $result = $apiInstance->modifierBannette($id, $information_bannette);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannetteApi->modifierBannette: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de la bannette | |
| **information_bannette** | [**\OpenAPI\Client\Model\InformationBannette**](../Model/InformationBannette.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Bannette**](../Model/Bannette.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supprimerBannette()`

```php
supprimerBannette($id)
```

Supprimer une bannette

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BannetteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la bannette

try {
    $apiInstance->supprimerBannette($id);
} catch (Exception $e) {
    echo 'Exception when calling BannetteApi->supprimerBannette: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de la bannette | |

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

## `uploaderDocument()`

```php
uploaderDocument($id, $fichier, $nom): \OpenAPI\Client\Model\Document
```

Créer un document dans une bannette

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BannetteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la bannette
$fichier = "/path/to/file.txt"; // \SplFileObject | Le fichier à uploader
$nom = 'nom_example'; // string

try {
    $result = $apiInstance->uploaderDocument($id, $fichier, $nom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannetteApi->uploaderDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de la bannette | |
| **fichier** | **\SplFileObject****\SplFileObject**| Le fichier à uploader | |
| **nom** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
