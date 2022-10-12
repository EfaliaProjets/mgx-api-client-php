# OpenAPI\Client\FiltresAccesApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ajouterValeurFiltreAcces()**](FiltresAccesApi.md#ajouterValeurFiltreAcces) | **POST** /api/filtres-acces/{id}/valeurs | Ajouter une valeur à un filtre d&#39;accès |
| [**creerFiltreAcces()**](FiltresAccesApi.md#creerFiltreAcces) | **POST** /api/filtres-acces | Créer un filtre d&#39;accès |
| [**desactiverValeurFiltreAcces()**](FiltresAccesApi.md#desactiverValeurFiltreAcces) | **DELETE** /api/filtres-acces/{id}/valeurs/{valeur} | Désactiver une valeur d&#39;un filtre d&#39;accès |
| [**filtresAcces()**](FiltresAccesApi.md#filtresAcces) | **GET** /api/filtres-acces | Lister les filtres d&#39;accès |
| [**filtresAccesUtilisateurs()**](FiltresAccesApi.md#filtresAccesUtilisateurs) | **GET** /api/filtres-acces/utilisateurs | Lister les utilisateurs pouvant être sélectionnés dans un filtre d&#39;accès |
| [**renommerFiltreAcces()**](FiltresAccesApi.md#renommerFiltreAcces) | **PUT** /api/filtres-acces/{id} | Renommer un filtre d&#39;accès |
| [**renommerValeurFiltreAcces()**](FiltresAccesApi.md#renommerValeurFiltreAcces) | **PUT** /api/filtres-acces/{id}/valeurs/{valeur} | Renommer une valeur d&#39;un filtre d&#39;accès |
| [**selectionnerFiltresAccesUtilisateur()**](FiltresAccesApi.md#selectionnerFiltresAccesUtilisateur) | **PUT** /api/utilisateurs/{id}/filtres-acces/{filtre} | Sélectionner une valeur d&#39;un filtre d&#39;accès à un utilisateur |
| [**supprimerFiltre()**](FiltresAccesApi.md#supprimerFiltre) | **DELETE** /api/filtres-acces/{id} | Suppression d&#39;un filtre d&#39;accès |


## `ajouterValeurFiltreAcces()`

```php
ajouterValeurFiltreAcces($id, $valeur_filtre_acces): \OpenAPI\Client\Model\FiltreAcces
```

Ajouter une valeur à un filtre d'accès

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du filtre
$valeur_filtre_acces = new \OpenAPI\Client\Model\ValeurFiltreAcces(); // \OpenAPI\Client\Model\ValeurFiltreAcces

try {
    $result = $apiInstance->ajouterValeurFiltreAcces($id, $valeur_filtre_acces);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->ajouterValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du filtre | |
| **valeur_filtre_acces** | [**\OpenAPI\Client\Model\ValeurFiltreAcces**](../Model/ValeurFiltreAcces.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FiltreAcces**](../Model/FiltreAcces.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creerFiltreAcces()`

```php
creerFiltreAcces($filtre_acces1): \OpenAPI\Client\Model\FiltreAcces
```

Créer un filtre d'accès

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filtre_acces1 = new \OpenAPI\Client\Model\FiltreAcces1(); // \OpenAPI\Client\Model\FiltreAcces1

try {
    $result = $apiInstance->creerFiltreAcces($filtre_acces1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->creerFiltreAcces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filtre_acces1** | [**\OpenAPI\Client\Model\FiltreAcces1**](../Model/FiltreAcces1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FiltreAcces**](../Model/FiltreAcces.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `desactiverValeurFiltreAcces()`

```php
desactiverValeurFiltreAcces($id, $valeur): \OpenAPI\Client\Model\FiltreAcces
```

Désactiver une valeur d'un filtre d'accès

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du filtre
$valeur = 'valeur_example'; // string | L'id de la valeur du filtre

try {
    $result = $apiInstance->desactiverValeurFiltreAcces($id, $valeur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->desactiverValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du filtre | |
| **valeur** | **string**| L&#39;id de la valeur du filtre | |

### Return type

[**\OpenAPI\Client\Model\FiltreAcces**](../Model/FiltreAcces.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filtresAcces()`

```php
filtresAcces(): \OpenAPI\Client\Model\FiltreAcces[]
```

Lister les filtres d'accès

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->filtresAcces();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->filtresAcces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FiltreAcces[]**](../Model/FiltreAcces.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filtresAccesUtilisateurs()`

```php
filtresAccesUtilisateurs(): \OpenAPI\Client\Model\ReponseFiltreAccesUtilisateursInner[]
```

Lister les utilisateurs pouvant être sélectionnés dans un filtre d'accès

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->filtresAccesUtilisateurs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->filtresAccesUtilisateurs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ReponseFiltreAccesUtilisateursInner[]**](../Model/ReponseFiltreAccesUtilisateursInner.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renommerFiltreAcces()`

```php
renommerFiltreAcces($id, $renommer_filtre_acces_request): \OpenAPI\Client\Model\FiltreAcces
```

Renommer un filtre d'accès

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du filtre
$renommer_filtre_acces_request = new \OpenAPI\Client\Model\RenommerFiltreAccesRequest(); // \OpenAPI\Client\Model\RenommerFiltreAccesRequest

try {
    $result = $apiInstance->renommerFiltreAcces($id, $renommer_filtre_acces_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->renommerFiltreAcces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du filtre | |
| **renommer_filtre_acces_request** | [**\OpenAPI\Client\Model\RenommerFiltreAccesRequest**](../Model/RenommerFiltreAccesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FiltreAcces**](../Model/FiltreAcces.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renommerValeurFiltreAcces()`

```php
renommerValeurFiltreAcces($id, $valeur, $renommer_valeur_filtre_acces_request): \OpenAPI\Client\Model\FiltreAcces
```

Renommer une valeur d'un filtre d'accès

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du filtre
$valeur = 'valeur_example'; // string | L'id de la valeur du filtre
$renommer_valeur_filtre_acces_request = new \OpenAPI\Client\Model\RenommerValeurFiltreAccesRequest(); // \OpenAPI\Client\Model\RenommerValeurFiltreAccesRequest

try {
    $result = $apiInstance->renommerValeurFiltreAcces($id, $valeur, $renommer_valeur_filtre_acces_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->renommerValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du filtre | |
| **valeur** | **string**| L&#39;id de la valeur du filtre | |
| **renommer_valeur_filtre_acces_request** | [**\OpenAPI\Client\Model\RenommerValeurFiltreAccesRequest**](../Model/RenommerValeurFiltreAccesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FiltreAcces**](../Model/FiltreAcces.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectionnerFiltresAccesUtilisateur()`

```php
selectionnerFiltresAccesUtilisateur($id, $filtre, $selectionner_filtres_acces_utilisateur_request): \OpenAPI\Client\Model\Utilisateur
```

Sélectionner une valeur d'un filtre d'accès à un utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'utilisateur
$filtre = 'filtre_example'; // string | L'id du filtre d'accès
$selectionner_filtres_acces_utilisateur_request = new \OpenAPI\Client\Model\SelectionnerFiltresAccesUtilisateurRequest(); // \OpenAPI\Client\Model\SelectionnerFiltresAccesUtilisateurRequest

try {
    $result = $apiInstance->selectionnerFiltresAccesUtilisateur($id, $filtre, $selectionner_filtres_acces_utilisateur_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->selectionnerFiltresAccesUtilisateur: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de l&#39;utilisateur | |
| **filtre** | **string**| L&#39;id du filtre d&#39;accès | |
| **selectionner_filtres_acces_utilisateur_request** | [**\OpenAPI\Client\Model\SelectionnerFiltresAccesUtilisateurRequest**](../Model/SelectionnerFiltresAccesUtilisateurRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Utilisateur**](../Model/Utilisateur.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supprimerFiltre()`

```php
supprimerFiltre($id)
```

Suppression d'un filtre d'accès

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FiltresAccesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du filtre

try {
    $apiInstance->supprimerFiltre($id);
} catch (Exception $e) {
    echo 'Exception when calling FiltresAccesApi->supprimerFiltre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du filtre | |

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
