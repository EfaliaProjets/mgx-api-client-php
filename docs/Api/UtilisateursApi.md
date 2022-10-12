# OpenAPI\Client\UtilisateursApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activerUtilisateur()**](UtilisateursApi.md#activerUtilisateur) | **POST** /api/utilisateurs/{id}/activation | Activation et désactivation d&#39;un utilisateur |
| [**creerUtilisateur()**](UtilisateursApi.md#creerUtilisateur) | **POST** /api/utilisateurs | Créer un utilisateur |
| [**habilitationsUtilisateurConnecte()**](UtilisateursApi.md#habilitationsUtilisateurConnecte) | **GET** /api/utilisateur-connecte/habilitations | Récupérer les habilitations de l&#39;utilisateur connecté |
| [**modifierMotDePasse()**](UtilisateursApi.md#modifierMotDePasse) | **PUT** /api/utilisateurs/{id}/mot-de-passe | Modifier le mot de passe d&#39;un utilisateur |
| [**modifierUtilisateur()**](UtilisateursApi.md#modifierUtilisateur) | **PUT** /api/utilisateurs/{id} | Modification d&#39;un utilisateur |
| [**selectionnerFiltresAccesUtilisateur()**](UtilisateursApi.md#selectionnerFiltresAccesUtilisateur) | **PUT** /api/utilisateurs/{id}/filtres-acces/{filtre} | Sélectionner une valeur d&#39;un filtre d&#39;accès à un utilisateur |
| [**supprimerUtilisateur()**](UtilisateursApi.md#supprimerUtilisateur) | **DELETE** /api/utilisateurs/{id} | Suppression d&#39;un utilisateur |
| [**utilisateurs()**](UtilisateursApi.md#utilisateurs) | **GET** /api/utilisateurs | Lister les utilisateurs |


## `activerUtilisateur()`

```php
activerUtilisateur($id, $activation_utilisateur): \OpenAPI\Client\Model\Utilisateur
```

Activation et désactivation d'un utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'utilisateur
$activation_utilisateur = new \OpenAPI\Client\Model\ActivationUtilisateur(); // \OpenAPI\Client\Model\ActivationUtilisateur

try {
    $result = $apiInstance->activerUtilisateur($id, $activation_utilisateur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->activerUtilisateur: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de l&#39;utilisateur | |
| **activation_utilisateur** | [**\OpenAPI\Client\Model\ActivationUtilisateur**](../Model/ActivationUtilisateur.md)|  | |

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

## `creerUtilisateur()`

```php
creerUtilisateur($utilisateur): \OpenAPI\Client\Model\Utilisateur
```

Créer un utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$utilisateur = new \OpenAPI\Client\Model\Utilisateur(); // \OpenAPI\Client\Model\Utilisateur

try {
    $result = $apiInstance->creerUtilisateur($utilisateur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->creerUtilisateur: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **utilisateur** | [**\OpenAPI\Client\Model\Utilisateur**](../Model/Utilisateur.md)|  | |

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

## `habilitationsUtilisateurConnecte()`

```php
habilitationsUtilisateurConnecte(): \OpenAPI\Client\Model\MesHabilitations
```

Récupérer les habilitations de l'utilisateur connecté

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->habilitationsUtilisateurConnecte();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->habilitationsUtilisateurConnecte: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MesHabilitations**](../Model/MesHabilitations.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifierMotDePasse()`

```php
modifierMotDePasse($id, $mot_de_passe_modifie): \OpenAPI\Client\Model\Utilisateur
```

Modifier le mot de passe d'un utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'utilisateur
$mot_de_passe_modifie = new \OpenAPI\Client\Model\MotDePasseModifie(); // \OpenAPI\Client\Model\MotDePasseModifie

try {
    $result = $apiInstance->modifierMotDePasse($id, $mot_de_passe_modifie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->modifierMotDePasse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de l&#39;utilisateur | |
| **mot_de_passe_modifie** | [**\OpenAPI\Client\Model\MotDePasseModifie**](../Model/MotDePasseModifie.md)|  | |

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

## `modifierUtilisateur()`

```php
modifierUtilisateur($id, $utilisateur): \OpenAPI\Client\Model\Utilisateur
```

Modification d'un utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'utilisateur
$utilisateur = new \OpenAPI\Client\Model\Utilisateur(); // \OpenAPI\Client\Model\Utilisateur

try {
    $result = $apiInstance->modifierUtilisateur($id, $utilisateur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->modifierUtilisateur: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de l&#39;utilisateur | |
| **utilisateur** | [**\OpenAPI\Client\Model\Utilisateur**](../Model/Utilisateur.md)|  | |

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


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
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
    echo 'Exception when calling UtilisateursApi->selectionnerFiltresAccesUtilisateur: ', $e->getMessage(), PHP_EOL;
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

## `supprimerUtilisateur()`

```php
supprimerUtilisateur($id)
```

Suppression d'un utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'utilisateur

try {
    $apiInstance->supprimerUtilisateur($id);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->supprimerUtilisateur: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id de l&#39;utilisateur | |

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

## `utilisateurs()`

```php
utilisateurs(): \OpenAPI\Client\Model\Utilisateur[]
```

Lister les utilisateurs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->utilisateurs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->utilisateurs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Utilisateur[]**](../Model/Utilisateur.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
