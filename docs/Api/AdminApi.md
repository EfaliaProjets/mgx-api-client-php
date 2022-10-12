# OpenAPI\Client\AdminApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activerRechercheDansContenuPourUnGabaritDeDocument()**](AdminApi.md#activerRechercheDansContenuPourUnGabaritDeDocument) | **PUT** /api/gabarits-de-document/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents du gabarit de document |
| [**activerRechercheDansContenuPourUneBannette()**](AdminApi.md#activerRechercheDansContenuPourUneBannette) | **PUT** /api/bannettes/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents d&#39;une bannette |
| [**activerUtilisateur()**](AdminApi.md#activerUtilisateur) | **POST** /api/utilisateurs/{id}/activation | Activation et désactivation d&#39;un utilisateur |
| [**activerVersionnementGabaritDocument()**](AdminApi.md#activerVersionnementGabaritDocument) | **PUT** /api/gabarits-de-document/{id}/versionnement | Activer/désactiver le versionnement des binaires d&#39;un document |
| [**ajouterMetadonneeGabaritDocument()**](AdminApi.md#ajouterMetadonneeGabaritDocument) | **POST** /api/gabarits-de-document/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de document |
| [**ajouterMetadonneeGabaritDossier()**](AdminApi.md#ajouterMetadonneeGabaritDossier) | **POST** /api/gabarits-de-dossier/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de dossier |
| [**ajouterValeurFiltreAcces()**](AdminApi.md#ajouterValeurFiltreAcces) | **POST** /api/filtres-acces/{id}/valeurs | Ajouter une valeur à un filtre d&#39;accès |
| [**appliquerFiltreAccesHabilitationGabaritDeDossier()**](AdminApi.md#appliquerFiltreAccesHabilitationGabaritDeDossier) | **POST** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces | Application d&#39;un filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier |
| [**appliquerHabilitationsArmoire()**](AdminApi.md#appliquerHabilitationsArmoire) | **PUT** /api/roles/{role}/armoires/{armoire}/habilitations | Application des habilitations d&#39;une armoire |
| [**appliquerHabilitationsBannettes()**](AdminApi.md#appliquerHabilitationsBannettes) | **PUT** /api/roles/{role}/bannettes/habilitations | Application des habilitations sur les bannettes |
| [**archiveBaseDonnees()**](AdminApi.md#archiveBaseDonnees) | **GET** /api/sauvegarde/base-de-donnees | Sauvegarde de la base de données |
| [**archiveFichiers()**](AdminApi.md#archiveFichiers) | **GET** /api/sauvegarde/fichiers | Sauvegarde des fichiers |
| [**associerArmoiresRole()**](AdminApi.md#associerArmoiresRole) | **POST** /api/roles/{id}/armoires | Associer des armoires à un rôle |
| [**associerFiltreAccesGabaritDeDossier()**](AdminApi.md#associerFiltreAccesGabaritDeDossier) | **POST** /api/gabarits-de-dossier/{gabarit}/filtres-acces | Associer un filtre d&#39;accès à un gabarit de dossier |
| [**associerProcessusGabaritDeDocument()**](AdminApi.md#associerProcessusGabaritDeDocument) | **POST** /api/gabarits-de-document/{gabarit}/processus | Associer un processus à un gabarit de document |
| [**associerRolesArmoire()**](AdminApi.md#associerRolesArmoire) | **POST** /api/armoires/{id}/roles | Associer des rôles à une armoire |
| [**associerUtilisateursRole()**](AdminApi.md#associerUtilisateursRole) | **POST** /api/roles/{id}/utilisateurs | Associer des utilisateurs à un rôle |
| [**creerArmoire()**](AdminApi.md#creerArmoire) | **POST** /api/armoires | Créer une armoire |
| [**creerBannette()**](AdminApi.md#creerBannette) | **POST** /api/bannettes | Créer une bannette |
| [**creerCategorieGabaritDocument()**](AdminApi.md#creerCategorieGabaritDocument) | **POST** /api/gabarits-de-dossier/{gabarit}/categories-de-gabarits-de-document | Créer une catégorie de gabarits de document dans un gabarit de dossier |
| [**creerFiltreAcces()**](AdminApi.md#creerFiltreAcces) | **POST** /api/filtres-acces | Créer un filtre d&#39;accès |
| [**creerGabaritDocumentArmoire()**](AdminApi.md#creerGabaritDocumentArmoire) | **POST** /api/armoires/{armoire}/gabarits-de-document | Créer un gabarit de document dans une armoire |
| [**creerGabaritDocumentCategorie()**](AdminApi.md#creerGabaritDocumentCategorie) | **POST** /api/categories-de-gabarits-de-document/{categorie}/gabarits-de-document | Créer un gabarit de document dans une catégorie |
| [**creerGabaritDocumentGabaritDossier()**](AdminApi.md#creerGabaritDocumentGabaritDossier) | **POST** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Créer un gabarit de document dans un gabarit de dossier |
| [**creerGabaritDossierArmoire()**](AdminApi.md#creerGabaritDossierArmoire) | **POST** /api/armoires/{armoire}/gabarits-de-dossier | Créer un gabarit de dossier dans une armoire |
| [**creerLienGabaritDossier()**](AdminApi.md#creerLienGabaritDossier) | **POST** /api/gabarits-de-dossier/{id}/liens-vers-gabarit-de-dossier | Création d&#39;un lien vers un autre gabarit de dossier |
| [**creerProcessus()**](AdminApi.md#creerProcessus) | **POST** /api/processus | Créer un processus |
| [**creerRole()**](AdminApi.md#creerRole) | **POST** /api/roles | Créer un rôle |
| [**creerUtilisateur()**](AdminApi.md#creerUtilisateur) | **POST** /api/utilisateurs | Créer un utilisateur |
| [**desactiverValeurFiltreAcces()**](AdminApi.md#desactiverValeurFiltreAcces) | **DELETE** /api/filtres-acces/{id}/valeurs/{valeur} | Désactiver une valeur d&#39;un filtre d&#39;accès |
| [**dissocierArmoiresRole()**](AdminApi.md#dissocierArmoiresRole) | **DELETE** /api/roles/{id}/armoires | Dissocier des armoires d&#39;un rôle |
| [**dissocierFiltreAccesGabaritDeDossier()**](AdminApi.md#dissocierFiltreAccesGabaritDeDossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/filtres-acces/{id} | Dissocier un filtre d&#39;accès d&#39;un gabarit de dossier |
| [**dissocierProcessusGabaritDeDocument()**](AdminApi.md#dissocierProcessusGabaritDeDocument) | **DELETE** /api/gabarits-de-document/{gabarit}/processus/{id} | Dissocier un processus d&#39;un gabarit de document |
| [**dissocierRolesArmoire()**](AdminApi.md#dissocierRolesArmoire) | **DELETE** /api/armoires/{id}/roles | Dissocier des rôles d&#39;une armoire |
| [**dissocierUtilisateursRole()**](AdminApi.md#dissocierUtilisateursRole) | **DELETE** /api/roles/{id}/utilisateurs | Dissocier des utilisateurs d&#39;un rôle |
| [**etatLdap()**](AdminApi.md#etatLdap) | **GET** /api/ldap/etat | Récupérer l&#39;état de la connexion au ldap |
| [**etatMGLogin()**](AdminApi.md#etatMGLogin) | **GET** /api/mglogin/etat | Récupérer l&#39;état de la connexion à MGLogin |
| [**filtresAcces()**](AdminApi.md#filtresAcces) | **GET** /api/filtres-acces | Lister les filtres d&#39;accès |
| [**habilitationsArmoire()**](AdminApi.md#habilitationsArmoire) | **GET** /api/roles/{role}/armoires/{armoire}/habilitations | Lister les habilitations d&#39;une armoire |
| [**habilitationsBannettes()**](AdminApi.md#habilitationsBannettes) | **GET** /api/roles/{role}/bannettes/habilitations | Lister les habilitations des bannettes |
| [**journalFonctionnel()**](AdminApi.md#journalFonctionnel) | **GET** /api/journal-fonctionnel | Lister les entrées du journal fonctionnel |
| [**journalTaches()**](AdminApi.md#journalTaches) | **GET** /api/journal-taches | Liste des entrées du journal des tâches traitées en asynchrone |
| [**miseAJour()**](AdminApi.md#miseAJour) | **POST** /api/mise-a-jour-automatique | Lance la mise à jour automatique de l&#39;application |
| [**modifierArmoire()**](AdminApi.md#modifierArmoire) | **PUT** /api/armoires/{id} | Mise à jour de l&#39;armoire |
| [**modifierBannette()**](AdminApi.md#modifierBannette) | **PUT** /api/bannettes/{id} | Mise à jour de la bannette |
| [**modifierGabaritDocument()**](AdminApi.md#modifierGabaritDocument) | **PUT** /api/gabarits-de-document/{id} | Modifier un gabarit de document |
| [**modifierLienGabaritDossier()**](AdminApi.md#modifierLienGabaritDossier) | **PUT** /api/liens-vers-gabarit-de-dossier/{id} | Modifier un lien vers un gabarit de dossier |
| [**modifierMetadonneeGabaritDocument()**](AdminApi.md#modifierMetadonneeGabaritDocument) | **PUT** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de document |
| [**modifierMetadonneeGabaritDossier()**](AdminApi.md#modifierMetadonneeGabaritDossier) | **PUT** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de dossier |
| [**modifierModeleNomDynamiqueGabaritDocument()**](AdminApi.md#modifierModeleNomDynamiqueGabaritDocument) | **PUT** /api/gabarits-de-document/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de document |
| [**modifierModeleNomDynamiqueGabaritDossier()**](AdminApi.md#modifierModeleNomDynamiqueGabaritDossier) | **PUT** /api/gabarits-de-dossier/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de dossier |
| [**modifierMotDePasse()**](AdminApi.md#modifierMotDePasse) | **PUT** /api/utilisateurs/{id}/mot-de-passe | Modifier le mot de passe d&#39;un utilisateur |
| [**modifierProcessus()**](AdminApi.md#modifierProcessus) | **PUT** /api/processus/{id} | Modifier un processus |
| [**modifierRole()**](AdminApi.md#modifierRole) | **PUT** /api/roles/{id} | Modification d&#39;un rôle |
| [**modifierUtilisateur()**](AdminApi.md#modifierUtilisateur) | **PUT** /api/utilisateurs/{id} | Modification d&#39;un utilisateur |
| [**processus()**](AdminApi.md#processus) | **GET** /api/processus | Lister les processus |
| [**renommerCategorieGabaritDocument()**](AdminApi.md#renommerCategorieGabaritDocument) | **PUT** /api/categories-de-gabarits-de-document/{id} | Renommer une catégorie de gabarits de document |
| [**renommerFiltreAcces()**](AdminApi.md#renommerFiltreAcces) | **PUT** /api/filtres-acces/{id} | Renommer un filtre d&#39;accès |
| [**renommerGabaritDossier()**](AdminApi.md#renommerGabaritDossier) | **PUT** /api/gabarits-de-dossier/{id} | Renommer un gabarit de dossier |
| [**renommerValeurFiltreAcces()**](AdminApi.md#renommerValeurFiltreAcces) | **PUT** /api/filtres-acces/{id}/valeurs/{valeur} | Renommer une valeur d&#39;un filtre d&#39;accès |
| [**roles()**](AdminApi.md#roles) | **GET** /api/roles | Liste des rôles |
| [**selectionnerFiltresAccesUtilisateur()**](AdminApi.md#selectionnerFiltresAccesUtilisateur) | **PUT** /api/utilisateurs/{id}/filtres-acces/{filtre} | Sélectionner une valeur d&#39;un filtre d&#39;accès à un utilisateur |
| [**supprimerArmoire()**](AdminApi.md#supprimerArmoire) | **DELETE** /api/armoires/{id} | Suppression d&#39;une armoire |
| [**supprimerBannette()**](AdminApi.md#supprimerBannette) | **DELETE** /api/bannettes/{id} | Supprimer une bannette |
| [**supprimerCategorieGabaritDocument()**](AdminApi.md#supprimerCategorieGabaritDocument) | **DELETE** /api/categories-de-gabarits-de-document/{id} | Supprimer une catégorie de gabarits de document |
| [**supprimerFiltre()**](AdminApi.md#supprimerFiltre) | **DELETE** /api/filtres-acces/{id} | Suppression d&#39;un filtre d&#39;accès |
| [**supprimerFiltreAccesHabilitationGabaritDeDossier()**](AdminApi.md#supprimerFiltreAccesHabilitationGabaritDeDossier) | **DELETE** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces/{filtre} | Supprimer le filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier |
| [**supprimerGabaritDocument()**](AdminApi.md#supprimerGabaritDocument) | **DELETE** /api/gabarits-de-document/{id} | Supprimer un gabarit de document |
| [**supprimerGabaritDossier()**](AdminApi.md#supprimerGabaritDossier) | **DELETE** /api/gabarits-de-dossier/{id} | Supprimer un gabarit de dossier |
| [**supprimerLienGabaritDossier()**](AdminApi.md#supprimerLienGabaritDossier) | **DELETE** /api/liens-vers-gabarit-de-dossier/{id} | Supprimer un lien vers un gabarit de dossier |
| [**supprimerMetadonneeGabaritDocument()**](AdminApi.md#supprimerMetadonneeGabaritDocument) | **DELETE** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de document |
| [**supprimerMetadonneeGabaritDossier()**](AdminApi.md#supprimerMetadonneeGabaritDossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de dossier |
| [**supprimerProcessus()**](AdminApi.md#supprimerProcessus) | **DELETE** /api/processus/{id} | Suppression d&#39;un processus |
| [**supprimerRole()**](AdminApi.md#supprimerRole) | **DELETE** /api/roles/{id} | Suppression d&#39;un rôle |
| [**supprimerUtilisateur()**](AdminApi.md#supprimerUtilisateur) | **DELETE** /api/utilisateurs/{id} | Suppression d&#39;un utilisateur |
| [**synchroniserLdap()**](AdminApi.md#synchroniserLdap) | **POST** /api/ldap/synchronisation | Synchroniser les utilisateurs du ldap |
| [**synchroniserMGLogin()**](AdminApi.md#synchroniserMGLogin) | **POST** /api/mglogin/synchronisation | Synchroniser les utilisateurs de MGLogin |
| [**utilisateurs()**](AdminApi.md#utilisateurs) | **GET** /api/utilisateurs | Lister les utilisateurs |


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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->activerRechercheDansContenuPourUnGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->activerRechercheDansContenuPourUneBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->activerUtilisateur: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->activerVersionnementGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->ajouterMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->ajouterMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->ajouterValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->appliquerFiltreAccesHabilitationGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->appliquerHabilitationsArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->appliquerHabilitationsBannettes: ', $e->getMessage(), PHP_EOL;
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

## `archiveBaseDonnees()`

```php
archiveBaseDonnees(): \SplFileObject
```

Sauvegarde de la base de données

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->archiveBaseDonnees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->archiveBaseDonnees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/gzip`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveFichiers()`

```php
archiveFichiers(): \SplFileObject
```

Sauvegarde des fichiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->archiveFichiers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->archiveFichiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`, `application/json`

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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->associerArmoiresRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->associerFiltreAccesGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->associerProcessusGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->associerRolesArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->associerUtilisateursRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerGabaritDocumentArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerGabaritDocumentCategorie: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerGabaritDocumentGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerGabaritDossierArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
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

## `creerProcessus()`

```php
creerProcessus($creation_processus): \OpenAPI\Client\Model\Processus
```

Créer un processus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creation_processus = new \OpenAPI\Client\Model\CreationProcessus(); // \OpenAPI\Client\Model\CreationProcessus

try {
    $result = $apiInstance->creerProcessus($creation_processus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->creerProcessus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creation_processus** | [**\OpenAPI\Client\Model\CreationProcessus**](../Model/CreationProcessus.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Processus**](../Model/Processus.md)

### Authorization

[Bearer](../../README.md#Bearer)

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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->creerUtilisateur: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->desactiverValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->dissocierArmoiresRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->dissocierFiltreAccesGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->dissocierProcessusGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->dissocierRolesArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->dissocierUtilisateursRole: ', $e->getMessage(), PHP_EOL;
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

## `etatLdap()`

```php
etatLdap(): \OpenAPI\Client\Model\ReponseEtatLdap
```

Récupérer l'état de la connexion au ldap

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->etatLdap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->etatLdap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ReponseEtatLdap**](../Model/ReponseEtatLdap.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `etatMGLogin()`

```php
etatMGLogin(): \OpenAPI\Client\Model\ReponseEtatMGLogin
```

Récupérer l'état de la connexion à MGLogin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->etatMGLogin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->etatMGLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ReponseEtatMGLogin**](../Model/ReponseEtatMGLogin.md)

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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->filtresAcces();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->filtresAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->habilitationsArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->habilitationsBannettes: ', $e->getMessage(), PHP_EOL;
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

## `journalFonctionnel()`

```php
journalFonctionnel(): \OpenAPI\Client\Model\JournalEntree[]
```

Lister les entrées du journal fonctionnel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->journalFonctionnel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->journalFonctionnel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\JournalEntree[]**](../Model/JournalEntree.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalTaches()`

```php
journalTaches(): \OpenAPI\Client\Model\ReponseJournalTaches[]
```

Liste des entrées du journal des tâches traitées en asynchrone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->journalTaches();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->journalTaches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ReponseJournalTaches[]**](../Model/ReponseJournalTaches.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `miseAJour()`

```php
miseAJour()
```

Lance la mise à jour automatique de l'application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->miseAJour();
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->miseAJour: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierModeleNomDynamiqueGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierModeleNomDynamiqueGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierMotDePasse: ', $e->getMessage(), PHP_EOL;
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

## `modifierProcessus()`

```php
modifierProcessus($id, $modifier_processus_request): \OpenAPI\Client\Model\Processus
```

Modifier un processus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du processus
$modifier_processus_request = new \OpenAPI\Client\Model\ModifierProcessusRequest(); // \OpenAPI\Client\Model\ModifierProcessusRequest

try {
    $result = $apiInstance->modifierProcessus($id, $modifier_processus_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->modifierProcessus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du processus | |
| **modifier_processus_request** | [**\OpenAPI\Client\Model\ModifierProcessusRequest**](../Model/ModifierProcessusRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Processus**](../Model/Processus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->modifierUtilisateur: ', $e->getMessage(), PHP_EOL;
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

## `processus()`

```php
processus(): \OpenAPI\Client\Model\Processus[]
```

Lister les processus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->processus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->processus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Processus[]**](../Model/Processus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->renommerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->renommerFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->renommerGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->renommerValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->roles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->roles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->selectionnerFiltresAccesUtilisateur: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'armoire

try {
    $apiInstance->supprimerArmoire($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la bannette

try {
    $apiInstance->supprimerBannette($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la catégorie de gabarits de document

try {
    $apiInstance->supprimerCategorieGabaritDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du filtre

try {
    $apiInstance->supprimerFiltre($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerFiltre: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->supprimerFiltreAccesHabilitationGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document

try {
    $apiInstance->supprimerGabaritDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier

try {
    $apiInstance->supprimerGabaritDossier($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du lien

try {
    $apiInstance->supprimerLienGabaritDossier($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->supprimerMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
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
    echo 'Exception when calling AdminApi->supprimerMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
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

## `supprimerProcessus()`

```php
supprimerProcessus($id)
```

Suppression d'un processus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du processus

try {
    $apiInstance->supprimerProcessus($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerProcessus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| L&#39;id du processus | |

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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle

try {
    $apiInstance->supprimerRole($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'utilisateur

try {
    $apiInstance->supprimerUtilisateur($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->supprimerUtilisateur: ', $e->getMessage(), PHP_EOL;
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

## `synchroniserLdap()`

```php
synchroniserLdap()
```

Synchroniser les utilisateurs du ldap

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->synchroniserLdap();
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->synchroniserLdap: ', $e->getMessage(), PHP_EOL;
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

## `synchroniserMGLogin()`

```php
synchroniserMGLogin()
```

Synchroniser les utilisateurs de MGLogin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->synchroniserMGLogin();
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->synchroniserMGLogin: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->utilisateurs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->utilisateurs: ', $e->getMessage(), PHP_EOL;
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
