# OpenAPI\Client\GabaritDeDocumentApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activerRechercheDansContenuPourUnGabaritDeDocument()**](GabaritDeDocumentApi.md#activerRechercheDansContenuPourUnGabaritDeDocument) | **PUT** /api/gabarits-de-document/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents du gabarit de document |
| [**activerVersionnementGabaritDocument()**](GabaritDeDocumentApi.md#activerVersionnementGabaritDocument) | **PUT** /api/gabarits-de-document/{id}/versionnement | Activer/désactiver le versionnement des binaires d&#39;un document |
| [**ajouterMetadonneeGabaritDocument()**](GabaritDeDocumentApi.md#ajouterMetadonneeGabaritDocument) | **POST** /api/gabarits-de-document/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de document |
| [**associerProcessusGabaritDeDocument()**](GabaritDeDocumentApi.md#associerProcessusGabaritDeDocument) | **POST** /api/gabarits-de-document/{gabarit}/processus | Associer un processus à un gabarit de document |
| [**classerDirectement()**](GabaritDeDocumentApi.md#classerDirectement) | **POST** /api/gabarits-de-document/{id}/classement-direct | Créer un document directement classé |
| [**creerGabaritDocumentArmoire()**](GabaritDeDocumentApi.md#creerGabaritDocumentArmoire) | **POST** /api/armoires/{armoire}/gabarits-de-document | Créer un gabarit de document dans une armoire |
| [**creerGabaritDocumentCategorie()**](GabaritDeDocumentApi.md#creerGabaritDocumentCategorie) | **POST** /api/categories-de-gabarits-de-document/{categorie}/gabarits-de-document | Créer un gabarit de document dans une catégorie |
| [**creerGabaritDocumentGabaritDossier()**](GabaritDeDocumentApi.md#creerGabaritDocumentGabaritDossier) | **POST** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Créer un gabarit de document dans un gabarit de dossier |
| [**dissocierProcessusGabaritDeDocument()**](GabaritDeDocumentApi.md#dissocierProcessusGabaritDeDocument) | **DELETE** /api/gabarits-de-document/{gabarit}/processus/{id} | Dissocier un processus d&#39;un gabarit de document |
| [**documents()**](GabaritDeDocumentApi.md#documents) | **GET** /api/gabarits-de-document/{id}/documents | Lister les documents classés dans ce gabarit |
| [**gabaritDocument()**](GabaritDeDocumentApi.md#gabaritDocument) | **GET** /api/gabarits-de-document/{id} | Recupération d&#39;un gabarit de document |
| [**listerGabaritsDocumentArmoire()**](GabaritDeDocumentApi.md#listerGabaritsDocumentArmoire) | **GET** /api/armoires/{armoire}/gabarits-de-document | Lister les gabarits de document d&#39;une armoire |
| [**listerGabaritsDocumentGabaritDossier()**](GabaritDeDocumentApi.md#listerGabaritsDocumentGabaritDossier) | **GET** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Lister les gabarits de document d&#39;un gabarit de dossier |
| [**modifierGabaritDocument()**](GabaritDeDocumentApi.md#modifierGabaritDocument) | **PUT** /api/gabarits-de-document/{id} | Modifier un gabarit de document |
| [**modifierMetadonneeGabaritDocument()**](GabaritDeDocumentApi.md#modifierMetadonneeGabaritDocument) | **PUT** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de document |
| [**modifierModeleNomDynamiqueGabaritDocument()**](GabaritDeDocumentApi.md#modifierModeleNomDynamiqueGabaritDocument) | **PUT** /api/gabarits-de-document/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de document |
| [**supprimerGabaritDocument()**](GabaritDeDocumentApi.md#supprimerGabaritDocument) | **DELETE** /api/gabarits-de-document/{id} | Supprimer un gabarit de document |
| [**supprimerMetadonneeGabaritDocument()**](GabaritDeDocumentApi.md#supprimerMetadonneeGabaritDocument) | **DELETE** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de document |


## `activerRechercheDansContenuPourUnGabaritDeDocument()`

```php
activerRechercheDansContenuPourUnGabaritDeDocument($id, $activation_recherche_gabarit): \OpenAPI\Client\Model\GabaritDeDocument
```

Activer/désactiver la recherche dans le contenu des documents du gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document
$activation_recherche_gabarit = new \OpenAPI\Client\Model\ActivationRechercheGabarit(); // \OpenAPI\Client\Model\ActivationRechercheGabarit

try {
    $result = $apiInstance->activerRechercheDansContenuPourUnGabaritDeDocument($id, $activation_recherche_gabarit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->activerRechercheDansContenuPourUnGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |
| **activation_recherche_gabarit** | [**\OpenAPI\Client\Model\ActivationRechercheGabarit**](../Model/ActivationRechercheGabarit.md)|  | |

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

## `activerVersionnementGabaritDocument()`

```php
activerVersionnementGabaritDocument($id, $activation_versionnement): \OpenAPI\Client\Model\GabaritDeDocument
```

Activer/désactiver le versionnement des binaires d'un document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document
$activation_versionnement = new \OpenAPI\Client\Model\ActivationVersionnement(); // \OpenAPI\Client\Model\ActivationVersionnement

try {
    $result = $apiInstance->activerVersionnementGabaritDocument($id, $activation_versionnement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->activerVersionnementGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |
| **activation_versionnement** | [**\OpenAPI\Client\Model\ActivationVersionnement**](../Model/ActivationVersionnement.md)|  | |

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

## `ajouterMetadonneeGabaritDocument()`

```php
ajouterMetadonneeGabaritDocument($id, $structure_metadonnee): \OpenAPI\Client\Model\GabaritDeDocument
```

Ajout d'une nouvelle métadonnée au gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document
$structure_metadonnee = new \OpenAPI\Client\Model\StructureMetadonnee(); // \OpenAPI\Client\Model\StructureMetadonnee

try {
    $result = $apiInstance->ajouterMetadonneeGabaritDocument($id, $structure_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->ajouterMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |
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

## `associerProcessusGabaritDeDocument()`

```php
associerProcessusGabaritDeDocument($gabarit, $associer_processus_gabarit): \OpenAPI\Client\Model\GabaritDeDocument
```

Associer un processus à un gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de document
$associer_processus_gabarit = new \OpenAPI\Client\Model\AssocierProcessusGabarit(); // \OpenAPI\Client\Model\AssocierProcessusGabarit

try {
    $result = $apiInstance->associerProcessusGabaritDeDocument($gabarit, $associer_processus_gabarit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->associerProcessusGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de document | |
| **associer_processus_gabarit** | [**\OpenAPI\Client\Model\AssocierProcessusGabarit**](../Model/AssocierProcessusGabarit.md)|  | |

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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
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
    echo 'Exception when calling GabaritDeDocumentApi->classerDirectement: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
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
    echo 'Exception when calling GabaritDeDocumentApi->creerGabaritDocumentArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
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
    echo 'Exception when calling GabaritDeDocumentApi->creerGabaritDocumentCategorie: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
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
    echo 'Exception when calling GabaritDeDocumentApi->creerGabaritDocumentGabaritDossier: ', $e->getMessage(), PHP_EOL;
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

## `dissocierProcessusGabaritDeDocument()`

```php
dissocierProcessusGabaritDeDocument($gabarit, $id): \OpenAPI\Client\Model\GabaritDeDocument
```

Dissocier un processus d'un gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de document
$id = 'id_example'; // string | L'id du processus à supprimer

try {
    $result = $apiInstance->dissocierProcessusGabaritDeDocument($gabarit, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->dissocierProcessusGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de document | |
| **id** | **string**| L&#39;id du processus à supprimer | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDocument**](../Model/GabaritDeDocument.md)

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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
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
    echo 'Exception when calling GabaritDeDocumentApi->documents: ', $e->getMessage(), PHP_EOL;
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

## `gabaritDocument()`

```php
gabaritDocument($id): \OpenAPI\Client\Model\GabaritDeDocument
```

Recupération d'un gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document

try {
    $result = $apiInstance->gabaritDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->gabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDocument**](../Model/GabaritDeDocument.md)

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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
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
    echo 'Exception when calling GabaritDeDocumentApi->listerGabaritsDocumentArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
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
    echo 'Exception when calling GabaritDeDocumentApi->listerGabaritsDocumentGabaritDossier: ', $e->getMessage(), PHP_EOL;
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

## `modifierGabaritDocument()`

```php
modifierGabaritDocument($id, $parametres_gabarit_document): \OpenAPI\Client\Model\GabaritDeDocument
```

Modifier un gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document
$parametres_gabarit_document = new \OpenAPI\Client\Model\ParametresGabaritDocument(); // \OpenAPI\Client\Model\ParametresGabaritDocument

try {
    $result = $apiInstance->modifierGabaritDocument($id, $parametres_gabarit_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->modifierGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |
| **parametres_gabarit_document** | [**\OpenAPI\Client\Model\ParametresGabaritDocument**](../Model/ParametresGabaritDocument.md)|  | |

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

## `modifierMetadonneeGabaritDocument()`

```php
modifierMetadonneeGabaritDocument($gabarit, $id, $structure_metadonnee): \OpenAPI\Client\Model\GabaritDeDocument
```

Modification d'une métadonnée d'un gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de document
$id = 'id_example'; // string | L'id de la métadonnée
$structure_metadonnee = new \OpenAPI\Client\Model\StructureMetadonnee(); // \OpenAPI\Client\Model\StructureMetadonnee

try {
    $result = $apiInstance->modifierMetadonneeGabaritDocument($gabarit, $id, $structure_metadonnee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->modifierMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de document | |
| **id** | **string**| L&#39;id de la métadonnée | |
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

## `modifierModeleNomDynamiqueGabaritDocument()`

```php
modifierModeleNomDynamiqueGabaritDocument($id, $parametres_modele_nom_dynamique): \OpenAPI\Client\Model\GabaritDeDocument
```

Modifier le modèle de nom dynamique d'un gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document
$parametres_modele_nom_dynamique = new \OpenAPI\Client\Model\ParametresModeleNomDynamique(); // \OpenAPI\Client\Model\ParametresModeleNomDynamique

try {
    $result = $apiInstance->modifierModeleNomDynamiqueGabaritDocument($id, $parametres_modele_nom_dynamique);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->modifierModeleNomDynamiqueGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |
| **parametres_modele_nom_dynamique** | [**\OpenAPI\Client\Model\ParametresModeleNomDynamique**](../Model/ParametresModeleNomDynamique.md)|  | |

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

## `supprimerGabaritDocument()`

```php
supprimerGabaritDocument($id)
```

Supprimer un gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document

try {
    $apiInstance->supprimerGabaritDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->supprimerGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du gabarit de document | |

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

## `supprimerMetadonneeGabaritDocument()`

```php
supprimerMetadonneeGabaritDocument($gabarit, $id): \OpenAPI\Client\Model\GabaritDeDocument
```

Suppression d'une métadonnée d'un gabarit de document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GabaritDeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gabarit = 'gabarit_example'; // string | L'id du gabarit de document
$id = 'id_example'; // string | L'id de la métadonnée à supprimer

try {
    $result = $apiInstance->supprimerMetadonneeGabaritDocument($gabarit, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GabaritDeDocumentApi->supprimerMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gabarit** | **string**| L&#39;id du gabarit de document | |
| **id** | **string**| L&#39;id de la métadonnée à supprimer | |

### Return type

[**\OpenAPI\Client\Model\GabaritDeDocument**](../Model/GabaritDeDocument.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
