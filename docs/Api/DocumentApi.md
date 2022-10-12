# OpenAPI\Client\DocumentApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**binaire()**](DocumentApi.md#binaire) | **GET** /api/documents/{id}/binaire | Récupération du flux de données binaires liées au document |
| [**binaireVersion()**](DocumentApi.md#binaireVersion) | **GET** /api/documents/{id}/versions/{version}/binaire | Récupération du flux de données binaires liées au document |
| [**classerDirectement()**](DocumentApi.md#classerDirectement) | **POST** /api/gabarits-de-document/{id}/classement-direct | Créer un document directement classé |
| [**classerDocument()**](DocumentApi.md#classerDocument) | **POST** /api/documents/{id}/classement | Classer un document dans un gabarit donné |
| [**deplacerDocumentBannette()**](DocumentApi.md#deplacerDocumentBannette) | **POST** /api/documents/{id}/changement-bannette | Déplacer un document non classé dans une autre bannette |
| [**deverrouillerDocument()**](DocumentApi.md#deverrouillerDocument) | **DELETE** /api/documents/{id}/verrouillage | Déverrouiller un document |
| [**document()**](DocumentApi.md#document) | **GET** /api/documents/{id} | Récupérer un document |
| [**documents()**](DocumentApi.md#documents) | **GET** /api/gabarits-de-document/{id}/documents | Lister les documents classés dans ce gabarit |
| [**documentsBannette()**](DocumentApi.md#documentsBannette) | **GET** /api/bannettes/{id}/documents | Lister les documents présents dans la bannette |
| [**documentsDossier()**](DocumentApi.md#documentsDossier) | **GET** /api/dossiers/{dossier}/documents | Lister les documents d&#39;un dossier |
| [**lancerProcessusDocument()**](DocumentApi.md#lancerProcessusDocument) | **POST** /api/documents/{id}/processus/{processus}/lancement | Lancer un processus pour un document |
| [**modifierMetadonneesDocument()**](DocumentApi.md#modifierMetadonneesDocument) | **PUT** /api/documents/{document}/metadonnees | Modifier les métadonnées d&#39;un document |
| [**preClasser()**](DocumentApi.md#preClasser) | **POST** /api/documents/{id}/pre-classement | Pré-classer un document dans un gabarit donné |
| [**previsualiserDocument()**](DocumentApi.md#previsualiserDocument) | **GET** /api/documents/{id}/previsualisation | Récupération des données binaires permettant de prévisualiser le document dans le navigateur web |
| [**rechercheDocuments()**](DocumentApi.md#rechercheDocuments) | **POST** /api/recherche/documents | Recherche de documents |
| [**rechercheRapideDocuments()**](DocumentApi.md#rechercheRapideDocuments) | **POST** /api/recherche/rapide/documents | Recherche rapide de documents |
| [**remplacerBinaire()**](DocumentApi.md#remplacerBinaire) | **POST** /api/documents/{id}/binaire | Remplacer le binaire d&#39;un document |
| [**restaurerVersion()**](DocumentApi.md#restaurerVersion) | **POST** /api/documents/{id}/versions/{version}/restauration | Restaurer le document à cette version du binaire |
| [**supprimerDocument()**](DocumentApi.md#supprimerDocument) | **DELETE** /api/documents/{id} | Supprimer un document |
| [**uploaderDocument()**](DocumentApi.md#uploaderDocument) | **POST** /api/bannettes/{id}/upload | Créer un document dans une bannette |
| [**verrouillerDocument()**](DocumentApi.md#verrouillerDocument) | **POST** /api/documents/{id}/verrouillage | Verrouiller un document |


## `binaire()`

```php
binaire($id): \SplFileObject
```

Récupération du flux de données binaires liées au document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document

try {
    $result = $apiInstance->binaire($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->binaire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `binaireVersion()`

```php
binaireVersion($id, $version): \SplFileObject
```

Récupération du flux de données binaires liées au document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document
$version = 56; // int | L'id de la version du document

try {
    $result = $apiInstance->binaireVersion($id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->binaireVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |
| **version** | **int**| L&#39;id de la version du document | |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `classerDirectement()`

```php
classerDirectement($id, $fichier, $nom, $dossier, $metadonnees): \OpenAPI\Client\Model\Document
```

Créer un document directement classé

La clé `dossier` est nécessaire uniquement lorsque le document est à classer dans un dossier.  Le contenu de la requête est un multipart/form-data, le contenu est donc au même format qu'un formulaire c'est à dire une liste à plat de clé valeur (ie `array<string, mixed>`).  Pour cet endpoint uniquement, il ne faut pas envoyer la métadonnée si sa valeur est `null`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document
$fichier = "/path/to/file.txt"; // \SplFileObject | Le fichier à classer
$nom = 'nom_example'; // string
$dossier = 'dossier_example'; // string
$metadonnees = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\InputMetadonnee()); // \OpenAPI\Client\Model\InputMetadonnee[]

try {
    $result = $apiInstance->classerDirectement($id, $fichier, $nom, $dossier, $metadonnees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->classerDirectement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |
| **fichier** | **\SplFileObject****\SplFileObject**| Le fichier à classer | |
| **nom** | **string**|  | |
| **dossier** | **string**|  | [optional] |
| **metadonnees** | [**\OpenAPI\Client\Model\InputMetadonnee[]**](../Model/\OpenAPI\Client\Model\InputMetadonnee.md)|  | [optional] |

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

## `classerDocument()`

```php
classerDocument($id, $parametres_classement): \OpenAPI\Client\Model\Document
```

Classer un document dans un gabarit donné

La clé `dossier` est nécessaire uniquement lorsque le document est à classer dans un dossier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document
$parametres_classement = new \OpenAPI\Client\Model\ParametresClassement(); // \OpenAPI\Client\Model\ParametresClassement

try {
    $result = $apiInstance->classerDocument($id, $parametres_classement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->classerDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |
| **parametres_classement** | [**\OpenAPI\Client\Model\ParametresClassement**](../Model/ParametresClassement.md)|  | |

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


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
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
    echo 'Exception when calling DocumentApi->deplacerDocumentBannette: ', $e->getMessage(), PHP_EOL;
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

## `deverrouillerDocument()`

```php
deverrouillerDocument($id): \OpenAPI\Client\Model\Document
```

Déverrouiller un document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document

try {
    $result = $apiInstance->deverrouillerDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deverrouillerDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `document()`

```php
document($id): \OpenAPI\Client\Model\Document
```

Récupérer un document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document

try {
    $result = $apiInstance->document($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->document: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documents()`

```php
documents($id): \OpenAPI\Client\Model\Document[]
```

Lister les documents classés dans ce gabarit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document

try {
    $result = $apiInstance->documents($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |

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


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
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
    echo 'Exception when calling DocumentApi->documentsBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
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
    echo 'Exception when calling DocumentApi->documentsDossier: ', $e->getMessage(), PHP_EOL;
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

## `lancerProcessusDocument()`

```php
lancerProcessusDocument($id, $processus): \OpenAPI\Client\Model\ReponseLancementProcessus
```

Lancer un processus pour un document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document
$processus = 'processus_example'; // string | L'id du processus à lancer

try {
    $result = $apiInstance->lancerProcessusDocument($id, $processus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->lancerProcessusDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |
| **processus** | **string**| L&#39;id du processus à lancer | |

### Return type

[**\OpenAPI\Client\Model\ReponseLancementProcessus**](../Model/ReponseLancementProcessus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifierMetadonneesDocument()`

```php
modifierMetadonneesDocument($document, $input_metadonnee): \OpenAPI\Client\Model\Document
```

Modifier les métadonnées d'un document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | L'id du document
$input_metadonnee = array(new \OpenAPI\Client\Model\InputMetadonnee()); // \OpenAPI\Client\Model\InputMetadonnee[]

try {
    $result = $apiInstance->modifierMetadonneesDocument($document, $input_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->modifierMetadonneesDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| L&#39;id du document | |
| **input_metadonnee** | [**\OpenAPI\Client\Model\InputMetadonnee[]**](../Model/InputMetadonnee.md)|  | |

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

## `preClasser()`

```php
preClasser($id, $parametres_pre_classement): \OpenAPI\Client\Model\Document
```

Pré-classer un document dans un gabarit donné

La clé `dossier` est nécessaire uniquement lorsque le document est à pré-classer dans un dossier.  Si le document est déjà pré-classé alors toutes les métadonnées saisies seront perdues, même si le document est pré-classé dans le même gabarit de document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document
$parametres_pre_classement = new \OpenAPI\Client\Model\ParametresPreClassement(); // \OpenAPI\Client\Model\ParametresPreClassement

try {
    $result = $apiInstance->preClasser($id, $parametres_pre_classement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->preClasser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |
| **parametres_pre_classement** | [**\OpenAPI\Client\Model\ParametresPreClassement**](../Model/ParametresPreClassement.md)|  | |

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

## `previsualiserDocument()`

```php
previsualiserDocument($id): \SplFileObject
```

Récupération des données binaires permettant de prévisualiser le document dans le navigateur web

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document

try {
    $result = $apiInstance->previsualiserDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->previsualiserDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
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
    echo 'Exception when calling DocumentApi->rechercheDocuments: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
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
    echo 'Exception when calling DocumentApi->rechercheRapideDocuments: ', $e->getMessage(), PHP_EOL;
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

## `remplacerBinaire()`

```php
remplacerBinaire($id, $fichier): \OpenAPI\Client\Model\Document
```

Remplacer le binaire d'un document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document
$fichier = "/path/to/file.txt"; // \SplFileObject | Le nouveau fichier à utiliser pour le document

try {
    $result = $apiInstance->remplacerBinaire($id, $fichier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->remplacerBinaire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |
| **fichier** | **\SplFileObject****\SplFileObject**| Le nouveau fichier à utiliser pour le document | |

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

## `restaurerVersion()`

```php
restaurerVersion($id, $version): \OpenAPI\Client\Model\Document
```

Restaurer le document à cette version du binaire

Les métadonnées ne sont pas affectées

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document
$version = 56; // int | L'id de la version du document

try {
    $result = $apiInstance->restaurerVersion($id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restaurerVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |
| **version** | **int**| L&#39;id de la version du document | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supprimerDocument()`

```php
supprimerDocument($id)
```

Supprimer un document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document

try {
    $apiInstance->supprimerDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->supprimerDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |

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


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
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
    echo 'Exception when calling DocumentApi->uploaderDocument: ', $e->getMessage(), PHP_EOL;
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

## `verrouillerDocument()`

```php
verrouillerDocument($id): \OpenAPI\Client\Model\Document
```

Verrouiller un document

Cela permet d'empêcher d'autres utilisateurs de modifier le document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document

try {
    $result = $apiInstance->verrouillerDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->verrouillerDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du document | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
