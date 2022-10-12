# OpenAPI\Client\SecuriteApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appliquerFiltreAccesHabilitationGabaritDeDossier()**](SecuriteApi.md#appliquerFiltreAccesHabilitationGabaritDeDossier) | **POST** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces | Application d&#39;un filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier |
| [**appliquerHabilitationsArmoire()**](SecuriteApi.md#appliquerHabilitationsArmoire) | **PUT** /api/roles/{role}/armoires/{armoire}/habilitations | Application des habilitations d&#39;une armoire |
| [**appliquerHabilitationsBannettes()**](SecuriteApi.md#appliquerHabilitationsBannettes) | **PUT** /api/roles/{role}/bannettes/habilitations | Application des habilitations sur les bannettes |
| [**associerArmoiresRole()**](SecuriteApi.md#associerArmoiresRole) | **POST** /api/roles/{id}/armoires | Associer des armoires à un rôle |
| [**associerRolesArmoire()**](SecuriteApi.md#associerRolesArmoire) | **POST** /api/armoires/{id}/roles | Associer des rôles à une armoire |
| [**associerUtilisateursRole()**](SecuriteApi.md#associerUtilisateursRole) | **POST** /api/roles/{id}/utilisateurs | Associer des utilisateurs à un rôle |
| [**creerJWT()**](SecuriteApi.md#creerJWT) | **POST** /login | Créer un JWT |
| [**creerRole()**](SecuriteApi.md#creerRole) | **POST** /api/roles | Créer un rôle |
| [**deconnecter()**](SecuriteApi.md#deconnecter) | **POST** /logout | Déconnecter l&#39;utilisateur |
| [**dissocierArmoiresRole()**](SecuriteApi.md#dissocierArmoiresRole) | **DELETE** /api/roles/{id}/armoires | Dissocier des armoires d&#39;un rôle |
| [**dissocierRolesArmoire()**](SecuriteApi.md#dissocierRolesArmoire) | **DELETE** /api/armoires/{id}/roles | Dissocier des rôles d&#39;une armoire |
| [**dissocierUtilisateursRole()**](SecuriteApi.md#dissocierUtilisateursRole) | **DELETE** /api/roles/{id}/utilisateurs | Dissocier des utilisateurs d&#39;un rôle |
| [**habilitationsArmoire()**](SecuriteApi.md#habilitationsArmoire) | **GET** /api/roles/{role}/armoires/{armoire}/habilitations | Lister les habilitations d&#39;une armoire |
| [**habilitationsBannettes()**](SecuriteApi.md#habilitationsBannettes) | **GET** /api/roles/{role}/bannettes/habilitations | Lister les habilitations des bannettes |
| [**modifierRole()**](SecuriteApi.md#modifierRole) | **PUT** /api/roles/{id} | Modification d&#39;un rôle |
| [**roles()**](SecuriteApi.md#roles) | **GET** /api/roles | Liste des rôles |
| [**supprimerFiltreAccesHabilitationGabaritDeDossier()**](SecuriteApi.md#supprimerFiltreAccesHabilitationGabaritDeDossier) | **DELETE** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces/{filtre} | Supprimer le filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier |
| [**supprimerRole()**](SecuriteApi.md#supprimerRole) | **DELETE** /api/roles/{id} | Suppression d&#39;un rôle |


## `appliquerFiltreAccesHabilitationGabaritDeDossier()`

```php
appliquerFiltreAccesHabilitationGabaritDeDossier($role, $armoire, $gabarit, $filtre_acces_gabarit_dossier)
```

Application d'un filtre d'accès sur l'habilitation d'un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 'role_example'; // string | L'id du rôle
$armoire = 'armoire_example'; // string | L'id de l'armoire
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier
$filtre_acces_gabarit_dossier = new \OpenAPI\Client\Model\FiltreAccesGabaritDossier(); // \OpenAPI\Client\Model\FiltreAccesGabaritDossier

try {
    $apiInstance->appliquerFiltreAccesHabilitationGabaritDeDossier($role, $armoire, $gabarit, $filtre_acces_gabarit_dossier);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->appliquerFiltreAccesHabilitationGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **string**| L&#39;id du rôle | |
| **armoire** | **string**| L&#39;id de l&#39;armoire | |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |
| **filtre_acces_gabarit_dossier** | [**\OpenAPI\Client\Model\FiltreAccesGabaritDossier**](../Model/FiltreAccesGabaritDossier.md)|  | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appliquerHabilitationsArmoire()`

```php
appliquerHabilitationsArmoire($role, $armoire, $habilitations_armoire_request): \OpenAPI\Client\Model\HabilitationsArmoire
```

Application des habilitations d'une armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 'role_example'; // string | L'id du rôle
$armoire = 'armoire_example'; // string | L'id de l'armoire
$habilitations_armoire_request = new \OpenAPI\Client\Model\HabilitationsArmoireRequest(); // \OpenAPI\Client\Model\HabilitationsArmoireRequest

try {
    $result = $apiInstance->appliquerHabilitationsArmoire($role, $armoire, $habilitations_armoire_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->appliquerHabilitationsArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **string**| L&#39;id du rôle | |
| **armoire** | **string**| L&#39;id de l&#39;armoire | |
| **habilitations_armoire_request** | [**\OpenAPI\Client\Model\HabilitationsArmoireRequest**](../Model/HabilitationsArmoireRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\HabilitationsArmoire**](../Model/HabilitationsArmoire.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appliquerHabilitationsBannettes()`

```php
appliquerHabilitationsBannettes($role, $habilitations_bannettes_inner): \OpenAPI\Client\Model\HabilitationsBannettesInner[]
```

Application des habilitations sur les bannettes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 'role_example'; // string | L'id du rôle
$habilitations_bannettes_inner = array(new \OpenAPI\Client\Model\HabilitationsBannettesInner()); // \OpenAPI\Client\Model\HabilitationsBannettesInner[]

try {
    $result = $apiInstance->appliquerHabilitationsBannettes($role, $habilitations_bannettes_inner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->appliquerHabilitationsBannettes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **string**| L&#39;id du rôle | |
| **habilitations_bannettes_inner** | [**\OpenAPI\Client\Model\HabilitationsBannettesInner[]**](../Model/HabilitationsBannettesInner.md)|  | |

### Return type

[**\OpenAPI\Client\Model\HabilitationsBannettesInner[]**](../Model/HabilitationsBannettesInner.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `associerArmoiresRole()`

```php
associerArmoiresRole($id, $liste_armoires): \OpenAPI\Client\Model\Role
```

Associer des armoires à un rôle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle
$liste_armoires = new \OpenAPI\Client\Model\ListeArmoires(); // \OpenAPI\Client\Model\ListeArmoires

try {
    $result = $apiInstance->associerArmoiresRole($id, $liste_armoires);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->associerArmoiresRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du rôle | |
| **liste_armoires** | [**\OpenAPI\Client\Model\ListeArmoires**](../Model/ListeArmoires.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `associerRolesArmoire()`

```php
associerRolesArmoire($id, $liste_roles): \OpenAPI\Client\Model\Armoire
```

Associer des rôles à une armoire

Il s'agit du même principe que l'endpoint `Associer des armoires à un rôle`, cet endpoint n'est qu'un raccourci pour ajouter en masse des rôles à une armoire pour éviter de boucler sur l'autre endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle
$liste_roles = new \OpenAPI\Client\Model\ListeRoles(); // \OpenAPI\Client\Model\ListeRoles

try {
    $result = $apiInstance->associerRolesArmoire($id, $liste_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->associerRolesArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du rôle | |
| **liste_roles** | [**\OpenAPI\Client\Model\ListeRoles**](../Model/ListeRoles.md)|  | |

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

## `associerUtilisateursRole()`

```php
associerUtilisateursRole($id, $liste_utilisateurs): \OpenAPI\Client\Model\Utilisateur[]
```

Associer des utilisateurs à un rôle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle
$liste_utilisateurs = new \OpenAPI\Client\Model\ListeUtilisateurs(); // \OpenAPI\Client\Model\ListeUtilisateurs

try {
    $result = $apiInstance->associerUtilisateursRole($id, $liste_utilisateurs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->associerUtilisateursRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du rôle | |
| **liste_utilisateurs** | [**\OpenAPI\Client\Model\ListeUtilisateurs**](../Model/ListeUtilisateurs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Utilisateur[]**](../Model/Utilisateur.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creerJWT()`

```php
creerJWT($connexion_mgx): \OpenAPI\Client\Model\LoginValide
```

Créer un JWT

Cet endpoint crée un JWT à partir d'un couple login/password qui devra ensuite être utilisé dans tous les appels à l'API via le header `Authorization: Bearer {jwt}`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connexion_mgx = new \OpenAPI\Client\Model\ConnexionMGX(); // \OpenAPI\Client\Model\ConnexionMGX

try {
    $result = $apiInstance->creerJWT($connexion_mgx);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->creerJWT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connexion_mgx** | [**\OpenAPI\Client\Model\ConnexionMGX**](../Model/ConnexionMGX.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LoginValide**](../Model/LoginValide.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creerRole()`

```php
creerRole($nom_role): \OpenAPI\Client\Model\Role
```

Créer un rôle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nom_role = new \OpenAPI\Client\Model\NomRole(); // \OpenAPI\Client\Model\NomRole

try {
    $result = $apiInstance->creerRole($nom_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->creerRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nom_role** | [**\OpenAPI\Client\Model\NomRole**](../Model/NomRole.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deconnecter()`

```php
deconnecter()
```

Déconnecter l'utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deconnecter();
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->deconnecter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `dissocierArmoiresRole()`

```php
dissocierArmoiresRole($id, $liste_armoires): \OpenAPI\Client\Model\Role
```

Dissocier des armoires d'un rôle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle
$liste_armoires = new \OpenAPI\Client\Model\ListeArmoires(); // \OpenAPI\Client\Model\ListeArmoires

try {
    $result = $apiInstance->dissocierArmoiresRole($id, $liste_armoires);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->dissocierArmoiresRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du rôle | |
| **liste_armoires** | [**\OpenAPI\Client\Model\ListeArmoires**](../Model/ListeArmoires.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dissocierRolesArmoire()`

```php
dissocierRolesArmoire($id, $liste_roles): \OpenAPI\Client\Model\Armoire
```

Dissocier des rôles d'une armoire

Il s'agit du même principe que l'endpoint `Dissocier des armoires d'un rôle`, cet endpoint n'est qu'un raccourci pour dissocier en masse des rôles d'une armoire pour éviter de boucler sur l'autre endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle
$liste_roles = new \OpenAPI\Client\Model\ListeRoles(); // \OpenAPI\Client\Model\ListeRoles

try {
    $result = $apiInstance->dissocierRolesArmoire($id, $liste_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->dissocierRolesArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du rôle | |
| **liste_roles** | [**\OpenAPI\Client\Model\ListeRoles**](../Model/ListeRoles.md)|  | |

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

## `dissocierUtilisateursRole()`

```php
dissocierUtilisateursRole($id, $liste_utilisateurs): \OpenAPI\Client\Model\Utilisateur[]
```

Dissocier des utilisateurs d'un rôle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle
$liste_utilisateurs = new \OpenAPI\Client\Model\ListeUtilisateurs(); // \OpenAPI\Client\Model\ListeUtilisateurs

try {
    $result = $apiInstance->dissocierUtilisateursRole($id, $liste_utilisateurs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->dissocierUtilisateursRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du rôle | |
| **liste_utilisateurs** | [**\OpenAPI\Client\Model\ListeUtilisateurs**](../Model/ListeUtilisateurs.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Utilisateur[]**](../Model/Utilisateur.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `habilitationsArmoire()`

```php
habilitationsArmoire($role, $armoire): \OpenAPI\Client\Model\HabilitationsArmoire
```

Lister les habilitations d'une armoire

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 'role_example'; // string | L'id du rôle
$armoire = 'armoire_example'; // string | L'id de l'armoire

try {
    $result = $apiInstance->habilitationsArmoire($role, $armoire);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->habilitationsArmoire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **string**| L&#39;id du rôle | |
| **armoire** | **string**| L&#39;id de l&#39;armoire | |

### Return type

[**\OpenAPI\Client\Model\HabilitationsArmoire**](../Model/HabilitationsArmoire.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `habilitationsBannettes()`

```php
habilitationsBannettes($role): \OpenAPI\Client\Model\HabilitationsBannettesInner[]
```

Lister les habilitations des bannettes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 'role_example'; // string | L'id du rôle

try {
    $result = $apiInstance->habilitationsBannettes($role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->habilitationsBannettes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **string**| L&#39;id du rôle | |

### Return type

[**\OpenAPI\Client\Model\HabilitationsBannettesInner[]**](../Model/HabilitationsBannettesInner.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifierRole()`

```php
modifierRole($id, $nom_role): \OpenAPI\Client\Model\Role
```

Modification d'un rôle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle
$nom_role = new \OpenAPI\Client\Model\NomRole(); // \OpenAPI\Client\Model\NomRole

try {
    $result = $apiInstance->modifierRole($id, $nom_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->modifierRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du rôle | |
| **nom_role** | [**\OpenAPI\Client\Model\NomRole**](../Model/NomRole.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `roles()`

```php
roles(): \OpenAPI\Client\Model\Role[]
```

Liste des rôles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->roles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->roles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Role[]**](../Model/Role.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supprimerFiltreAccesHabilitationGabaritDeDossier()`

```php
supprimerFiltreAccesHabilitationGabaritDeDossier($role, $armoire, $gabarit, $filtre)
```

Supprimer le filtre d'accès sur l'habilitation d'un gabarit de dossier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 'role_example'; // string | L'id du rôle
$armoire = 'armoire_example'; // string | L'id de l'armoire
$gabarit = 'gabarit_example'; // string | L'id du gabarit de dossier
$filtre = 'filtre_example'; // string | L'id du filtre d'accès

try {
    $apiInstance->supprimerFiltreAccesHabilitationGabaritDeDossier($role, $armoire, $gabarit, $filtre);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->supprimerFiltreAccesHabilitationGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **string**| L&#39;id du rôle | |
| **armoire** | **string**| L&#39;id de l&#39;armoire | |
| **gabarit** | **string**| L&#39;id du gabarit de dossier | |
| **filtre** | **string**| L&#39;id du filtre d&#39;accès | |

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

## `supprimerRole()`

```php
supprimerRole($id)
```

Suppression d'un rôle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecuriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle

try {
    $apiInstance->supprimerRole($id);
} catch (Exception $e) {
    echo 'Exception when calling SecuriteApi->supprimerRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du rôle | |

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
