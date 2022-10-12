# OpenAPI\Client\CategoriesDeGabaritsDeDocumentApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**creerCategorieGabaritDocument()**](CategoriesDeGabaritsDeDocumentApi.md#creerCategorieGabaritDocument) | **POST** /api/gabarits-de-dossier/{gabarit}/categories-de-gabarits-de-document | Créer une catégorie de gabarits de document dans un gabarit de dossier |
| [**creerGabaritDocumentCategorie()**](CategoriesDeGabaritsDeDocumentApi.md#creerGabaritDocumentCategorie) | **POST** /api/categories-de-gabarits-de-document/{categorie}/gabarits-de-document | Créer un gabarit de document dans une catégorie |
| [**renommerCategorieGabaritDocument()**](CategoriesDeGabaritsDeDocumentApi.md#renommerCategorieGabaritDocument) | **PUT** /api/categories-de-gabarits-de-document/{id} | Renommer une catégorie de gabarits de document |
| [**supprimerCategorieGabaritDocument()**](CategoriesDeGabaritsDeDocumentApi.md#supprimerCategorieGabaritDocument) | **DELETE** /api/categories-de-gabarits-de-document/{id} | Supprimer une catégorie de gabarits de document |


## `creerCategorieGabaritDocument()`

```php
creerCategorieGabaritDocument($gabarit, $nom_categorie_document): \OpenAPI\Client\Model\CategorieDeGabaritsDeDocument
```

Créer une catégorie de gabarits de document dans un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesDeGabaritsDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier
$nom_categorie_document = new \OpenAPI\Client\Model\NomCategorieDocument(); // \OpenAPI\Client\Model\NomCategorieDocument

try {
    $result = $apiInstance->creerCategorieGabaritDocument($gabarit, $nom_categorie_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesDeGabaritsDeDocumentApi->creerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |
| **nom_categorie_document** | [**\OpenAPI\Client\Model\NomCategorieDocument**](../Model/NomCategorieDocument.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CategorieDeGabaritsDeDocument**](../Model/CategorieDeGabaritsDeDocument.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creerGabaritDocumentCategorie()`

```php
creerGabaritDocumentCategorie($categorie, $input_gabarit_de_document): \OpenAPI\Client\Model\GabaritDeDocument
```

Créer un gabarit de document dans une catégorie

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesDeGabaritsDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categorie = 'categorie_example'; // string | L'id de la catégorie de gabarits de document
$input_gabarit_de_document = new \OpenAPI\Client\Model\InputGabaritDeDocument(); // \OpenAPI\Client\Model\InputGabaritDeDocument

try {
    $result = $apiInstance->creerGabaritDocumentCategorie($categorie, $input_gabarit_de_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesDeGabaritsDeDocumentApi->creerGabaritDocumentCategorie: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categorie** | **string**| L&#39;id de la catégorie de gabarits de document | |
| **input_gabarit_de_document** | [**\OpenAPI\Client\Model\InputGabaritDeDocument**](../Model/InputGabaritDeDocument.md)|  | |

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

## `renommerCategorieGabaritDocument()`

```php
renommerCategorieGabaritDocument($id, $id_categorie_document): \OpenAPI\Client\Model\CategorieDeGabaritsDeDocument
```

Renommer une catégorie de gabarits de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesDeGabaritsDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la catégorie de gabarits de document
$id_categorie_document = new \OpenAPI\Client\Model\IdCategorieDocument(); // \OpenAPI\Client\Model\IdCategorieDocument

try {
    $result = $apiInstance->renommerCategorieGabaritDocument($id, $id_categorie_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesDeGabaritsDeDocumentApi->renommerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de la catégorie de gabarits de document | |
| **id_categorie_document** | [**\OpenAPI\Client\Model\IdCategorieDocument**](../Model/IdCategorieDocument.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CategorieDeGabaritsDeDocument**](../Model/CategorieDeGabaritsDeDocument.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supprimerCategorieGabaritDocument()`

```php
supprimerCategorieGabaritDocument($id)
```

Supprimer une catégorie de gabarits de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesDeGabaritsDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la catégorie de gabarits de document

try {
    $apiInstance->supprimerCategorieGabaritDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesDeGabaritsDeDocumentApi->supprimerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de la catégorie de gabarits de document | |

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
