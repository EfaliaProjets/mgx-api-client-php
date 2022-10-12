# OpenAPI\Client\DossierApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**creerDossier()**](DossierApi.md#creerDossier) | **POST** /api/gabarits-de-dossier/{id}/dossiers | Créer un nouveau dossier |
| [**documentsDossier()**](DossierApi.md#documentsDossier) | **GET** /api/dossiers/{dossier}/documents | Lister les documents d&#39;un dossier |
| [**dossier()**](DossierApi.md#dossier) | **GET** /api/dossiers/{id} | Récupérer un dossier |
| [**listerContenuCibleParLiensDuDossier()**](DossierApi.md#listerContenuCibleParLiensDuDossier) | **GET** /api/dossiers/{id}/liens | Liste tous les contenus ciblés par des liens d&#39;un dossier |
| [**listerDossiers()**](DossierApi.md#listerDossiers) | **GET** /api/gabarits-de-dossier/{id}/dossiers | Lister les dossiers existants pour ce gabarit de dossier |
| [**modifierMetadonneesDossier()**](DossierApi.md#modifierMetadonneesDossier) | **PUT** /api/dossiers/{dossier}/metadonnees | Modifier les métadonnées d&#39;un dossier |
| [**rechercheDossiers()**](DossierApi.md#rechercheDossiers) | **POST** /api/recherche/dossiers | Recherche de dossiers |
| [**rechercheRapideDossiers()**](DossierApi.md#rechercheRapideDossiers) | **POST** /api/recherche/rapide/dossiers | Recherche rapide de dossiers |
| [**selectionnerFiltreAccesDossier()**](DossierApi.md#selectionnerFiltreAccesDossier) | **PUT** /api/dossiers/{id}/filtres-acces/{filtre} | Sélectionner une valeur de filtre d&#39;accès pour un dossier |
| [**supprimerDossier()**](DossierApi.md#supprimerDossier) | **DELETE** /api/dossiers/{id} | Supprimer un dossier |


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


$apiInstance = new OpenAPI\Client\Api\DossierApi(
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
    echo 'Exception when calling DossierApi->creerDossier: ', $e->getMessage(), PHP_EOL;
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

## `documentsDossier()`

```php
documentsDossier($dossier): \OpenAPI\Client\Model\Document[]
```

Lister les documents d'un dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dossier = 'dossier_example'; // string | L'id du dossier

try {
    $result = $apiInstance->documentsDossier($dossier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierApi->documentsDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dossier** | **string**| L&#39;id du dossier | |

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

## `dossier()`

```php
dossier($id): \OpenAPI\Client\Model\Dossier
```

Récupérer un dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du dossier

try {
    $result = $apiInstance->dossier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierApi->dossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du dossier | |

### Return type

[**\OpenAPI\Client\Model\Dossier**](../Model/Dossier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listerContenuCibleParLiensDuDossier()`

```php
listerContenuCibleParLiensDuDossier($id): \OpenAPI\Client\Model\ReponseDossiersCibles
```

Liste tous les contenus ciblés par des liens d'un dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du dossier source

try {
    $result = $apiInstance->listerContenuCibleParLiensDuDossier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierApi->listerContenuCibleParLiensDuDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du dossier source | |

### Return type

[**\OpenAPI\Client\Model\ReponseDossiersCibles**](../Model/ReponseDossiersCibles.md)

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


$apiInstance = new OpenAPI\Client\Api\DossierApi(
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
    echo 'Exception when calling DossierApi->listerDossiers: ', $e->getMessage(), PHP_EOL;
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

## `modifierMetadonneesDossier()`

```php
modifierMetadonneesDossier($dossier, $input_metadonnee): \OpenAPI\Client\Model\Dossier
```

Modifier les métadonnées d'un dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dossier = 'dossier_example'; // string | L'id du dossier
$input_metadonnee = array(new \OpenAPI\Client\Model\InputMetadonnee()); // \OpenAPI\Client\Model\InputMetadonnee[]

try {
    $result = $apiInstance->modifierMetadonneesDossier($dossier, $input_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierApi->modifierMetadonneesDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dossier** | **string**| L&#39;id du dossier | |
| **input_metadonnee** | [**\OpenAPI\Client\Model\InputMetadonnee[]**](../Model/InputMetadonnee.md)|  | |

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


$apiInstance = new OpenAPI\Client\Api\DossierApi(
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
    echo 'Exception when calling DossierApi->rechercheDossiers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\DossierApi(
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
    echo 'Exception when calling DossierApi->rechercheRapideDossiers: ', $e->getMessage(), PHP_EOL;
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

## `selectionnerFiltreAccesDossier()`

```php
selectionnerFiltreAccesDossier($id, $filtre, $selectionner_filtre_acces_dossier_request): \OpenAPI\Client\Model\Dossier
```

Sélectionner une valeur de filtre d'accès pour un dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du dossier
$filtre = 'filtre_example'; // string | L'id du filtre d'accès
$selectionner_filtre_acces_dossier_request = new \OpenAPI\Client\Model\SelectionnerFiltreAccesDossierRequest(); // \OpenAPI\Client\Model\SelectionnerFiltreAccesDossierRequest

try {
    $result = $apiInstance->selectionnerFiltreAccesDossier($id, $filtre, $selectionner_filtre_acces_dossier_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierApi->selectionnerFiltreAccesDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du dossier | |
| **filtre** | **string**| L&#39;id du filtre d&#39;accès | |
| **selectionner_filtre_acces_dossier_request** | [**\OpenAPI\Client\Model\SelectionnerFiltreAccesDossierRequest**](../Model/SelectionnerFiltreAccesDossierRequest.md)|  | |

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

## `supprimerDossier()`

```php
supprimerDossier($id)
```

Supprimer un dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DossierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du dossier

try {
    $apiInstance->supprimerDossier($id);
} catch (Exception $e) {
    echo 'Exception when calling DossierApi->supprimerDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du dossier | |

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
