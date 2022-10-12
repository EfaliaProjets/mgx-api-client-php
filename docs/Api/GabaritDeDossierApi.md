# OpenAPI\Client\GabaritDeDossierApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ajouterMetadonneeGabaritDossier()**](GabaritDeDossierApi.md#ajouterMetadonneeGabaritDossier) | **POST** /api/gabarits-de-dossier/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de dossier |
| [**associerFiltreAccesGabaritDeDossier()**](GabaritDeDossierApi.md#associerFiltreAccesGabaritDeDossier) | **POST** /api/gabarits-de-dossier/{gabarit}/filtres-acces | Associer un filtre d&#39;accès à un gabarit de dossier |
| [**creerCategorieGabaritDocument()**](GabaritDeDossierApi.md#creerCategorieGabaritDocument) | **POST** /api/gabarits-de-dossier/{gabarit}/categories-de-gabarits-de-document | Créer une catégorie de gabarits de document dans un gabarit de dossier |
| [**creerDossier()**](GabaritDeDossierApi.md#creerDossier) | **POST** /api/gabarits-de-dossier/{id}/dossiers | Créer un nouveau dossier |
| [**creerGabaritDocumentGabaritDossier()**](GabaritDeDossierApi.md#creerGabaritDocumentGabaritDossier) | **POST** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Créer un gabarit de document dans un gabarit de dossier |
| [**creerGabaritDossierArmoire()**](GabaritDeDossierApi.md#creerGabaritDossierArmoire) | **POST** /api/armoires/{armoire}/gabarits-de-dossier | Créer un gabarit de dossier dans une armoire |
| [**creerLienGabaritDossier()**](GabaritDeDossierApi.md#creerLienGabaritDossier) | **POST** /api/gabarits-de-dossier/{id}/liens-vers-gabarit-de-dossier | Création d&#39;un lien vers un autre gabarit de dossier |
| [**dissocierFiltreAccesGabaritDeDossier()**](GabaritDeDossierApi.md#dissocierFiltreAccesGabaritDeDossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/filtres-acces/{id} | Dissocier un filtre d&#39;accès d&#39;un gabarit de dossier |
| [**gabaritDossier()**](GabaritDeDossierApi.md#gabaritDossier) | **GET** /api/gabarits-de-dossier/{id} | Récupération d&#39;un gabarit de dossier |
| [**listerDossiers()**](GabaritDeDossierApi.md#listerDossiers) | **GET** /api/gabarits-de-dossier/{id}/dossiers | Lister les dossiers existants pour ce gabarit de dossier |
| [**listerGabaritsDocumentGabaritDossier()**](GabaritDeDossierApi.md#listerGabaritsDocumentGabaritDossier) | **GET** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Lister les gabarits de document d&#39;un gabarit de dossier |
| [**listerGabaritsDossierArmoire()**](GabaritDeDossierApi.md#listerGabaritsDossierArmoire) | **GET** /api/armoires/{armoire}/gabarits-de-dossier | Lister les gabarits de dossier d&#39;une armoire |
| [**modifierLienGabaritDossier()**](GabaritDeDossierApi.md#modifierLienGabaritDossier) | **PUT** /api/liens-vers-gabarit-de-dossier/{id} | Modifier un lien vers un gabarit de dossier |
| [**modifierMetadonneeGabaritDossier()**](GabaritDeDossierApi.md#modifierMetadonneeGabaritDossier) | **PUT** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de dossier |
| [**modifierModeleNomDynamiqueGabaritDossier()**](GabaritDeDossierApi.md#modifierModeleNomDynamiqueGabaritDossier) | **PUT** /api/gabarits-de-dossier/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de dossier |
| [**renommerGabaritDossier()**](GabaritDeDossierApi.md#renommerGabaritDossier) | **PUT** /api/gabarits-de-dossier/{id} | Renommer un gabarit de dossier |
| [**supprimerGabaritDossier()**](GabaritDeDossierApi.md#supprimerGabaritDossier) | **DELETE** /api/gabarits-de-dossier/{id} | Supprimer un gabarit de dossier |
| [**supprimerLienGabaritDossier()**](GabaritDeDossierApi.md#supprimerLienGabaritDossier) | **DELETE** /api/liens-vers-gabarit-de-dossier/{id} | Supprimer un lien vers un gabarit de dossier |
| [**supprimerMetadonneeGabaritDossier()**](GabaritDeDossierApi.md#supprimerMetadonneeGabaritDossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de dossier |


## `ajouterMetadonneeGabaritDossier()`

```php
ajouterMetadonneeGabaritDossier($id, $structure_metadonnee): \OpenAPI\Client\Model\GabaritDeDossier
```

Ajout d'une nouvelle métadonnée au gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier
$structure_metadonnee = new \OpenAPI\Client\Model\StructureMetadonnee(); // \OpenAPI\Client\Model\StructureMetadonnee

try {
    $result = $apiInstance->ajouterMetadonneeGabaritDossier($id, $structure_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->ajouterMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de dossier | |
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

## `associerFiltreAccesGabaritDeDossier()`

```php
associerFiltreAccesGabaritDeDossier($gabarit, $filtre_acces_gabarit): \OpenAPI\Client\Model\GabaritDeDossier
```

Associer un filtre d'accès à un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier
$filtre_acces_gabarit = new \OpenAPI\Client\Model\FiltreAccesGabarit(); // \OpenAPI\Client\Model\FiltreAccesGabarit

try {
    $result = $apiInstance->associerFiltreAccesGabaritDeDossier($gabarit, $filtre_acces_gabarit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->associerFiltreAccesGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |
| **filtre_acces_gabarit** | [**\OpenAPI\Client\Model\FiltreAccesGabarit**](../Model/FiltreAccesGabarit.md)|  | |

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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
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
    echo 'Exception when calling GabaritDeDossierApi->creerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
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

## `creerDossier()`

```php
creerDossier($id, $parametres_creation_dossier): \OpenAPI\Client\Model\Dossier
```

Créer un nouveau dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier
$parametres_creation_dossier = new \OpenAPI\Client\Model\ParametresCreationDossier(); // \OpenAPI\Client\Model\ParametresCreationDossier

try {
    $result = $apiInstance->creerDossier($id, $parametres_creation_dossier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->creerDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de dossier | |
| **parametres_creation_dossier** | [**\OpenAPI\Client\Model\ParametresCreationDossier**](../Model/ParametresCreationDossier.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Dossier**](../Model/Dossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creerGabaritDocumentGabaritDossier()`

```php
creerGabaritDocumentGabaritDossier($gabarit, $structure_metadonnee): \OpenAPI\Client\Model\GabaritDeDocument
```

Créer un gabarit de document dans un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier
$structure_metadonnee = new \OpenAPI\Client\Model\StructureMetadonnee(); // \OpenAPI\Client\Model\StructureMetadonnee

try {
    $result = $apiInstance->creerGabaritDocumentGabaritDossier($gabarit, $structure_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->creerGabaritDocumentGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |
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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
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
    echo 'Exception when calling GabaritDeDossierApi->creerGabaritDossierArmoire: ', $e->getMessage(), PHP_EOL;
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

## `creerLienGabaritDossier()`

```php
creerLienGabaritDossier($id, $lien_gabarit_dossier): \OpenAPI\Client\Model\LienVersGabaritDeDossier
```

Création d'un lien vers un autre gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier
$lien_gabarit_dossier = new \OpenAPI\Client\Model\LienGabaritDossier(); // \OpenAPI\Client\Model\LienGabaritDossier

try {
    $result = $apiInstance->creerLienGabaritDossier($id, $lien_gabarit_dossier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->creerLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de dossier | |
| **lien_gabarit_dossier** | [**\OpenAPI\Client\Model\LienGabaritDossier**](../Model/LienGabaritDossier.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LienVersGabaritDeDossier**](../Model/LienVersGabaritDeDossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dissocierFiltreAccesGabaritDeDossier()`

```php
dissocierFiltreAccesGabaritDeDossier($gabarit, $id): \OpenAPI\Client\Model\GabaritDeDossier
```

Dissocier un filtre d'accès d'un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier
$id = 'id_example'; // string | L'id du filtre d'accès à supprimer

try {
    $result = $apiInstance->dissocierFiltreAccesGabaritDeDossier($gabarit, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->dissocierFiltreAccesGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |
| **id** | **string**| L&#39;id du filtre d&#39;accès à supprimer | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDossier**](../Model/GabaritDeDossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gabaritDossier()`

```php
gabaritDossier($id): \OpenAPI\Client\Model\GabaritDeDossier
```

Récupération d'un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier

try {
    $result = $apiInstance->gabaritDossier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->gabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de dossier | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDossier**](../Model/GabaritDeDossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listerDossiers()`

```php
listerDossiers($id): \OpenAPI\Client\Model\Dossier[]
```

Lister les dossiers existants pour ce gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier

try {
    $result = $apiInstance->listerDossiers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->listerDossiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de dossier | |

### Return type

[**\OpenAPI\Client\Model\Dossier[]**](../Model/Dossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listerGabaritsDocumentGabaritDossier()`

```php
listerGabaritsDocumentGabaritDossier($gabarit): \OpenAPI\Client\Model\GabaritDeDocument[]
```

Lister les gabarits de document d'un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier

try {
    $result = $apiInstance->listerGabaritsDocumentGabaritDossier($gabarit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->listerGabaritsDocumentGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |

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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
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
    echo 'Exception when calling GabaritDeDossierApi->listerGabaritsDossierArmoire: ', $e->getMessage(), PHP_EOL;
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

## `modifierLienGabaritDossier()`

```php
modifierLienGabaritDossier($id, $modifier_lien_gabarit_dossier_request): \OpenAPI\Client\Model\LienVersGabaritDeDossier
```

Modifier un lien vers un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du lien
$modifier_lien_gabarit_dossier_request = new \OpenAPI\Client\Model\ModifierLienGabaritDossierRequest(); // \OpenAPI\Client\Model\ModifierLienGabaritDossierRequest

try {
    $result = $apiInstance->modifierLienGabaritDossier($id, $modifier_lien_gabarit_dossier_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->modifierLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du lien | |
| **modifier_lien_gabarit_dossier_request** | [**\OpenAPI\Client\Model\ModifierLienGabaritDossierRequest**](../Model/ModifierLienGabaritDossierRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LienVersGabaritDeDossier**](../Model/LienVersGabaritDeDossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifierMetadonneeGabaritDossier()`

```php
modifierMetadonneeGabaritDossier($gabarit, $id, $structure_metadonnee): \OpenAPI\Client\Model\GabaritDeDossier
```

Modification d'une métadonnée d'un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier
$id = 'id_example'; // string | L'id de la métadonnée
$structure_metadonnee = new \OpenAPI\Client\Model\StructureMetadonnee(); // \OpenAPI\Client\Model\StructureMetadonnee

try {
    $result = $apiInstance->modifierMetadonneeGabaritDossier($gabarit, $id, $structure_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->modifierMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |
| **id** | **string**| L&#39;id de la métadonnée | |
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

## `modifierModeleNomDynamiqueGabaritDossier()`

```php
modifierModeleNomDynamiqueGabaritDossier($id, $parametres_modele_nom_dynamique): \OpenAPI\Client\Model\GabaritDeDossier
```

Modifier le modèle de nom dynamique d'un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier
$parametres_modele_nom_dynamique = new \OpenAPI\Client\Model\ParametresModeleNomDynamique(); // \OpenAPI\Client\Model\ParametresModeleNomDynamique

try {
    $result = $apiInstance->modifierModeleNomDynamiqueGabaritDossier($id, $parametres_modele_nom_dynamique);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->modifierModeleNomDynamiqueGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de dossier | |
| **parametres_modele_nom_dynamique** | [**\OpenAPI\Client\Model\ParametresModeleNomDynamique**](../Model/ParametresModeleNomDynamique.md)|  | |

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

## `renommerGabaritDossier()`

```php
renommerGabaritDossier($id, $parametres_gabarit_dossier): \OpenAPI\Client\Model\GabaritDeDossier
```

Renommer un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier
$parametres_gabarit_dossier = new \OpenAPI\Client\Model\ParametresGabaritDossier(); // \OpenAPI\Client\Model\ParametresGabaritDossier

try {
    $result = $apiInstance->renommerGabaritDossier($id, $parametres_gabarit_dossier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->renommerGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de dossier | |
| **parametres_gabarit_dossier** | [**\OpenAPI\Client\Model\ParametresGabaritDossier**](../Model/ParametresGabaritDossier.md)|  | |

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

## `supprimerGabaritDossier()`

```php
supprimerGabaritDossier($id)
```

Supprimer un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier

try {
    $apiInstance->supprimerGabaritDossier($id);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->supprimerGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de dossier | |

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

## `supprimerLienGabaritDossier()`

```php
supprimerLienGabaritDossier($id)
```

Supprimer un lien vers un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du lien

try {
    $apiInstance->supprimerLienGabaritDossier($id);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->supprimerLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du lien | |

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

## `supprimerMetadonneeGabaritDossier()`

```php
supprimerMetadonneeGabaritDossier($gabarit, $id): \OpenAPI\Client\Model\GabaritDeDossier
```

Suppression d'une métadonnée d'un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier
$id = 'id_example'; // string | L'id de la métadonnée à supprimer

try {
    $result = $apiInstance->supprimerMetadonneeGabaritDossier($gabarit, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDossierApi->supprimerMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |
| **id** | **string**| L&#39;id de la métadonnée à supprimer | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDossier**](../Model/GabaritDeDossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
