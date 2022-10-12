# OpenAPI\Client\MGXApi

All URIs are relative to http://mgx.loc:1906, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activerRechercheDansContenuPourUnGabaritDeDocument()**](MGXApi.md#activerRechercheDansContenuPourUnGabaritDeDocument) | **PUT** /api/gabarits-de-document/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents du gabarit de document |
| [**activerRechercheDansContenuPourUneBannette()**](MGXApi.md#activerRechercheDansContenuPourUneBannette) | **PUT** /api/bannettes/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents d&#39;une bannette |
| [**activerUtilisateur()**](MGXApi.md#activerUtilisateur) | **POST** /api/utilisateurs/{id}/activation | Activation et désactivation d&#39;un utilisateur |
| [**activerVersionnementGabaritDocument()**](MGXApi.md#activerVersionnementGabaritDocument) | **PUT** /api/gabarits-de-document/{id}/versionnement | Activer/désactiver le versionnement des binaires d&#39;un document |
| [**ajouterMetadonneeGabaritDocument()**](MGXApi.md#ajouterMetadonneeGabaritDocument) | **POST** /api/gabarits-de-document/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de document |
| [**ajouterMetadonneeGabaritDossier()**](MGXApi.md#ajouterMetadonneeGabaritDossier) | **POST** /api/gabarits-de-dossier/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de dossier |
| [**ajouterValeurFiltreAcces()**](MGXApi.md#ajouterValeurFiltreAcces) | **POST** /api/filtres-acces/{id}/valeurs | Ajouter une valeur à un filtre d&#39;accès |
| [**appliquerFiltreAccesHabilitationGabaritDeDossier()**](MGXApi.md#appliquerFiltreAccesHabilitationGabaritDeDossier) | **POST** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces | Application d&#39;un filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier |
| [**appliquerHabilitationsArmoire()**](MGXApi.md#appliquerHabilitationsArmoire) | **PUT** /api/roles/{role}/armoires/{armoire}/habilitations | Application des habilitations d&#39;une armoire |
| [**appliquerHabilitationsBannettes()**](MGXApi.md#appliquerHabilitationsBannettes) | **PUT** /api/roles/{role}/bannettes/habilitations | Application des habilitations sur les bannettes |
| [**archiveBaseDonnees()**](MGXApi.md#archiveBaseDonnees) | **GET** /api/sauvegarde/base-de-donnees | Sauvegarde de la base de données |
| [**archiveFichiers()**](MGXApi.md#archiveFichiers) | **GET** /api/sauvegarde/fichiers | Sauvegarde des fichiers |
| [**associerArmoiresRole()**](MGXApi.md#associerArmoiresRole) | **POST** /api/roles/{id}/armoires | Associer des armoires à un rôle |
| [**associerFiltreAccesGabaritDeDossier()**](MGXApi.md#associerFiltreAccesGabaritDeDossier) | **POST** /api/gabarits-de-dossier/{gabarit}/filtres-acces | Associer un filtre d&#39;accès à un gabarit de dossier |
| [**associerProcessusGabaritDeDocument()**](MGXApi.md#associerProcessusGabaritDeDocument) | **POST** /api/gabarits-de-document/{gabarit}/processus | Associer un processus à un gabarit de document |
| [**associerRolesArmoire()**](MGXApi.md#associerRolesArmoire) | **POST** /api/armoires/{id}/roles | Associer des rôles à une armoire |
| [**associerUtilisateursRole()**](MGXApi.md#associerUtilisateursRole) | **POST** /api/roles/{id}/utilisateurs | Associer des utilisateurs à un rôle |
| [**bannettes()**](MGXApi.md#bannettes) | **GET** /api/bannettes | Lister les bannettes |
| [**binaire()**](MGXApi.md#binaire) | **GET** /api/documents/{id}/binaire | Récupération du flux de données binaires liées au document |
| [**binaireVersion()**](MGXApi.md#binaireVersion) | **GET** /api/documents/{id}/versions/{version}/binaire | Récupération du flux de données binaires liées au document |
| [**classerDirectement()**](MGXApi.md#classerDirectement) | **POST** /api/gabarits-de-document/{id}/classement-direct | Créer un document directement classé |
| [**classerDocument()**](MGXApi.md#classerDocument) | **POST** /api/documents/{id}/classement | Classer un document dans un gabarit donné |
| [**configuration()**](MGXApi.md#configuration) | **GET** /configuration | Informations publiques de configuration de l&#39;instance |
| [**creerArmoire()**](MGXApi.md#creerArmoire) | **POST** /api/armoires | Créer une armoire |
| [**creerBannette()**](MGXApi.md#creerBannette) | **POST** /api/bannettes | Créer une bannette |
| [**creerCategorieGabaritDocument()**](MGXApi.md#creerCategorieGabaritDocument) | **POST** /api/gabarits-de-dossier/{gabarit}/categories-de-gabarits-de-document | Créer une catégorie de gabarits de document dans un gabarit de dossier |
| [**creerDossier()**](MGXApi.md#creerDossier) | **POST** /api/gabarits-de-dossier/{id}/dossiers | Créer un nouveau dossier |
| [**creerFiltreAcces()**](MGXApi.md#creerFiltreAcces) | **POST** /api/filtres-acces | Créer un filtre d&#39;accès |
| [**creerGabaritDocumentArmoire()**](MGXApi.md#creerGabaritDocumentArmoire) | **POST** /api/armoires/{armoire}/gabarits-de-document | Créer un gabarit de document dans une armoire |
| [**creerGabaritDocumentCategorie()**](MGXApi.md#creerGabaritDocumentCategorie) | **POST** /api/categories-de-gabarits-de-document/{categorie}/gabarits-de-document | Créer un gabarit de document dans une catégorie |
| [**creerGabaritDocumentGabaritDossier()**](MGXApi.md#creerGabaritDocumentGabaritDossier) | **POST** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Créer un gabarit de document dans un gabarit de dossier |
| [**creerGabaritDossierArmoire()**](MGXApi.md#creerGabaritDossierArmoire) | **POST** /api/armoires/{armoire}/gabarits-de-dossier | Créer un gabarit de dossier dans une armoire |
| [**creerJWT()**](MGXApi.md#creerJWT) | **POST** /login | Créer un JWT |
| [**creerLienGabaritDossier()**](MGXApi.md#creerLienGabaritDossier) | **POST** /api/gabarits-de-dossier/{id}/liens-vers-gabarit-de-dossier | Création d&#39;un lien vers un autre gabarit de dossier |
| [**creerProcessus()**](MGXApi.md#creerProcessus) | **POST** /api/processus | Créer un processus |
| [**creerRole()**](MGXApi.md#creerRole) | **POST** /api/roles | Créer un rôle |
| [**creerUtilisateur()**](MGXApi.md#creerUtilisateur) | **POST** /api/utilisateurs | Créer un utilisateur |
| [**deconnecter()**](MGXApi.md#deconnecter) | **POST** /logout | Déconnecter l&#39;utilisateur |
| [**deplacerDocumentBannette()**](MGXApi.md#deplacerDocumentBannette) | **POST** /api/documents/{id}/changement-bannette | Déplacer un document non classé dans une autre bannette |
| [**desactiverValeurFiltreAcces()**](MGXApi.md#desactiverValeurFiltreAcces) | **DELETE** /api/filtres-acces/{id}/valeurs/{valeur} | Désactiver une valeur d&#39;un filtre d&#39;accès |
| [**deverrouillerDocument()**](MGXApi.md#deverrouillerDocument) | **DELETE** /api/documents/{id}/verrouillage | Déverrouiller un document |
| [**dissocierArmoiresRole()**](MGXApi.md#dissocierArmoiresRole) | **DELETE** /api/roles/{id}/armoires | Dissocier des armoires d&#39;un rôle |
| [**dissocierFiltreAccesGabaritDeDossier()**](MGXApi.md#dissocierFiltreAccesGabaritDeDossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/filtres-acces/{id} | Dissocier un filtre d&#39;accès d&#39;un gabarit de dossier |
| [**dissocierProcessusGabaritDeDocument()**](MGXApi.md#dissocierProcessusGabaritDeDocument) | **DELETE** /api/gabarits-de-document/{gabarit}/processus/{id} | Dissocier un processus d&#39;un gabarit de document |
| [**dissocierRolesArmoire()**](MGXApi.md#dissocierRolesArmoire) | **DELETE** /api/armoires/{id}/roles | Dissocier des rôles d&#39;une armoire |
| [**dissocierUtilisateursRole()**](MGXApi.md#dissocierUtilisateursRole) | **DELETE** /api/roles/{id}/utilisateurs | Dissocier des utilisateurs d&#39;un rôle |
| [**document()**](MGXApi.md#document) | **GET** /api/documents/{id} | Récupérer un document |
| [**documents()**](MGXApi.md#documents) | **GET** /api/gabarits-de-document/{id}/documents | Lister les documents classés dans ce gabarit |
| [**documentsBannette()**](MGXApi.md#documentsBannette) | **GET** /api/bannettes/{id}/documents | Lister les documents présents dans la bannette |
| [**documentsDossier()**](MGXApi.md#documentsDossier) | **GET** /api/dossiers/{dossier}/documents | Lister les documents d&#39;un dossier |
| [**dossier()**](MGXApi.md#dossier) | **GET** /api/dossiers/{id} | Récupérer un dossier |
| [**etatLdap()**](MGXApi.md#etatLdap) | **GET** /api/ldap/etat | Récupérer l&#39;état de la connexion au ldap |
| [**etatMGLogin()**](MGXApi.md#etatMGLogin) | **GET** /api/mglogin/etat | Récupérer l&#39;état de la connexion à MGLogin |
| [**filtresAcces()**](MGXApi.md#filtresAcces) | **GET** /api/filtres-acces | Lister les filtres d&#39;accès |
| [**filtresAccesUtilisateurs()**](MGXApi.md#filtresAccesUtilisateurs) | **GET** /api/filtres-acces/utilisateurs | Lister les utilisateurs pouvant être sélectionnés dans un filtre d&#39;accès |
| [**gabaritDocument()**](MGXApi.md#gabaritDocument) | **GET** /api/gabarits-de-document/{id} | Recupération d&#39;un gabarit de document |
| [**gabaritDossier()**](MGXApi.md#gabaritDossier) | **GET** /api/gabarits-de-dossier/{id} | Récupération d&#39;un gabarit de dossier |
| [**habilitationsArmoire()**](MGXApi.md#habilitationsArmoire) | **GET** /api/roles/{role}/armoires/{armoire}/habilitations | Lister les habilitations d&#39;une armoire |
| [**habilitationsBannettes()**](MGXApi.md#habilitationsBannettes) | **GET** /api/roles/{role}/bannettes/habilitations | Lister les habilitations des bannettes |
| [**habilitationsUtilisateurConnecte()**](MGXApi.md#habilitationsUtilisateurConnecte) | **GET** /api/utilisateur-connecte/habilitations | Récupérer les habilitations de l&#39;utilisateur connecté |
| [**journalFonctionnel()**](MGXApi.md#journalFonctionnel) | **GET** /api/journal-fonctionnel | Lister les entrées du journal fonctionnel |
| [**journalTaches()**](MGXApi.md#journalTaches) | **GET** /api/journal-taches | Liste des entrées du journal des tâches traitées en asynchrone |
| [**lancerProcessusDocument()**](MGXApi.md#lancerProcessusDocument) | **POST** /api/documents/{id}/processus/{processus}/lancement | Lancer un processus pour un document |
| [**listerArmoires()**](MGXApi.md#listerArmoires) | **GET** /api/armoires | Lister les armoires |
| [**listerContenuCibleParLiensDuDossier()**](MGXApi.md#listerContenuCibleParLiensDuDossier) | **GET** /api/dossiers/{id}/liens | Liste tous les contenus ciblés par des liens d&#39;un dossier |
| [**listerDossiers()**](MGXApi.md#listerDossiers) | **GET** /api/gabarits-de-dossier/{id}/dossiers | Lister les dossiers existants pour ce gabarit de dossier |
| [**listerGabaritsDocumentArmoire()**](MGXApi.md#listerGabaritsDocumentArmoire) | **GET** /api/armoires/{armoire}/gabarits-de-document | Lister les gabarits de document d&#39;une armoire |
| [**listerGabaritsDocumentGabaritDossier()**](MGXApi.md#listerGabaritsDocumentGabaritDossier) | **GET** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Lister les gabarits de document d&#39;un gabarit de dossier |
| [**listerGabaritsDossierArmoire()**](MGXApi.md#listerGabaritsDossierArmoire) | **GET** /api/armoires/{armoire}/gabarits-de-dossier | Lister les gabarits de dossier d&#39;une armoire |
| [**miseAJour()**](MGXApi.md#miseAJour) | **POST** /api/mise-a-jour-automatique | Lance la mise à jour automatique de l&#39;application |
| [**modifierArmoire()**](MGXApi.md#modifierArmoire) | **PUT** /api/armoires/{id} | Mise à jour de l&#39;armoire |
| [**modifierBannette()**](MGXApi.md#modifierBannette) | **PUT** /api/bannettes/{id} | Mise à jour de la bannette |
| [**modifierGabaritDocument()**](MGXApi.md#modifierGabaritDocument) | **PUT** /api/gabarits-de-document/{id} | Modifier un gabarit de document |
| [**modifierLienGabaritDossier()**](MGXApi.md#modifierLienGabaritDossier) | **PUT** /api/liens-vers-gabarit-de-dossier/{id} | Modifier un lien vers un gabarit de dossier |
| [**modifierMetadonneeGabaritDocument()**](MGXApi.md#modifierMetadonneeGabaritDocument) | **PUT** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de document |
| [**modifierMetadonneeGabaritDossier()**](MGXApi.md#modifierMetadonneeGabaritDossier) | **PUT** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de dossier |
| [**modifierMetadonneesDocument()**](MGXApi.md#modifierMetadonneesDocument) | **PUT** /api/documents/{document}/metadonnees | Modifier les métadonnées d&#39;un document |
| [**modifierMetadonneesDossier()**](MGXApi.md#modifierMetadonneesDossier) | **PUT** /api/dossiers/{dossier}/metadonnees | Modifier les métadonnées d&#39;un dossier |
| [**modifierModeleNomDynamiqueGabaritDocument()**](MGXApi.md#modifierModeleNomDynamiqueGabaritDocument) | **PUT** /api/gabarits-de-document/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de document |
| [**modifierModeleNomDynamiqueGabaritDossier()**](MGXApi.md#modifierModeleNomDynamiqueGabaritDossier) | **PUT** /api/gabarits-de-dossier/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de dossier |
| [**modifierMotDePasse()**](MGXApi.md#modifierMotDePasse) | **PUT** /api/utilisateurs/{id}/mot-de-passe | Modifier le mot de passe d&#39;un utilisateur |
| [**modifierProcessus()**](MGXApi.md#modifierProcessus) | **PUT** /api/processus/{id} | Modifier un processus |
| [**modifierRole()**](MGXApi.md#modifierRole) | **PUT** /api/roles/{id} | Modification d&#39;un rôle |
| [**modifierUtilisateur()**](MGXApi.md#modifierUtilisateur) | **PUT** /api/utilisateurs/{id} | Modification d&#39;un utilisateur |
| [**planDeClassement()**](MGXApi.md#planDeClassement) | **GET** /api/plan-de-classement | Retourne l&#39;arborescence du plan de classement |
| [**preClasser()**](MGXApi.md#preClasser) | **POST** /api/documents/{id}/pre-classement | Pré-classer un document dans un gabarit donné |
| [**previsualiserDocument()**](MGXApi.md#previsualiserDocument) | **GET** /api/documents/{id}/previsualisation | Récupération des données binaires permettant de prévisualiser le document dans le navigateur web |
| [**processus()**](MGXApi.md#processus) | **GET** /api/processus | Lister les processus |
| [**rechercheDocuments()**](MGXApi.md#rechercheDocuments) | **POST** /api/recherche/documents | Recherche de documents |
| [**rechercheDossiers()**](MGXApi.md#rechercheDossiers) | **POST** /api/recherche/dossiers | Recherche de dossiers |
| [**rechercheRapideDocuments()**](MGXApi.md#rechercheRapideDocuments) | **POST** /api/recherche/rapide/documents | Recherche rapide de documents |
| [**rechercheRapideDossiers()**](MGXApi.md#rechercheRapideDossiers) | **POST** /api/recherche/rapide/dossiers | Recherche rapide de dossiers |
| [**remplacerBinaire()**](MGXApi.md#remplacerBinaire) | **POST** /api/documents/{id}/binaire | Remplacer le binaire d&#39;un document |
| [**renommerCategorieGabaritDocument()**](MGXApi.md#renommerCategorieGabaritDocument) | **PUT** /api/categories-de-gabarits-de-document/{id} | Renommer une catégorie de gabarits de document |
| [**renommerFiltreAcces()**](MGXApi.md#renommerFiltreAcces) | **PUT** /api/filtres-acces/{id} | Renommer un filtre d&#39;accès |
| [**renommerGabaritDossier()**](MGXApi.md#renommerGabaritDossier) | **PUT** /api/gabarits-de-dossier/{id} | Renommer un gabarit de dossier |
| [**renommerValeurFiltreAcces()**](MGXApi.md#renommerValeurFiltreAcces) | **PUT** /api/filtres-acces/{id}/valeurs/{valeur} | Renommer une valeur d&#39;un filtre d&#39;accès |
| [**restaurerVersion()**](MGXApi.md#restaurerVersion) | **POST** /api/documents/{id}/versions/{version}/restauration | Restaurer le document à cette version du binaire |
| [**roles()**](MGXApi.md#roles) | **GET** /api/roles | Liste des rôles |
| [**selectionnerFiltreAccesDossier()**](MGXApi.md#selectionnerFiltreAccesDossier) | **PUT** /api/dossiers/{id}/filtres-acces/{filtre} | Sélectionner une valeur de filtre d&#39;accès pour un dossier |
| [**selectionnerFiltresAccesUtilisateur()**](MGXApi.md#selectionnerFiltresAccesUtilisateur) | **PUT** /api/utilisateurs/{id}/filtres-acces/{filtre} | Sélectionner une valeur d&#39;un filtre d&#39;accès à un utilisateur |
| [**supprimerArmoire()**](MGXApi.md#supprimerArmoire) | **DELETE** /api/armoires/{id} | Suppression d&#39;une armoire |
| [**supprimerBannette()**](MGXApi.md#supprimerBannette) | **DELETE** /api/bannettes/{id} | Supprimer une bannette |
| [**supprimerCategorieGabaritDocument()**](MGXApi.md#supprimerCategorieGabaritDocument) | **DELETE** /api/categories-de-gabarits-de-document/{id} | Supprimer une catégorie de gabarits de document |
| [**supprimerDocument()**](MGXApi.md#supprimerDocument) | **DELETE** /api/documents/{id} | Supprimer un document |
| [**supprimerDossier()**](MGXApi.md#supprimerDossier) | **DELETE** /api/dossiers/{id} | Supprimer un dossier |
| [**supprimerFiltre()**](MGXApi.md#supprimerFiltre) | **DELETE** /api/filtres-acces/{id} | Suppression d&#39;un filtre d&#39;accès |
| [**supprimerFiltreAccesHabilitationGabaritDeDossier()**](MGXApi.md#supprimerFiltreAccesHabilitationGabaritDeDossier) | **DELETE** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces/{filtre} | Supprimer le filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier |
| [**supprimerGabaritDocument()**](MGXApi.md#supprimerGabaritDocument) | **DELETE** /api/gabarits-de-document/{id} | Supprimer un gabarit de document |
| [**supprimerGabaritDossier()**](MGXApi.md#supprimerGabaritDossier) | **DELETE** /api/gabarits-de-dossier/{id} | Supprimer un gabarit de dossier |
| [**supprimerLienGabaritDossier()**](MGXApi.md#supprimerLienGabaritDossier) | **DELETE** /api/liens-vers-gabarit-de-dossier/{id} | Supprimer un lien vers un gabarit de dossier |
| [**supprimerMetadonneeGabaritDocument()**](MGXApi.md#supprimerMetadonneeGabaritDocument) | **DELETE** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de document |
| [**supprimerMetadonneeGabaritDossier()**](MGXApi.md#supprimerMetadonneeGabaritDossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de dossier |
| [**supprimerProcessus()**](MGXApi.md#supprimerProcessus) | **DELETE** /api/processus/{id} | Suppression d&#39;un processus |
| [**supprimerRole()**](MGXApi.md#supprimerRole) | **DELETE** /api/roles/{id} | Suppression d&#39;un rôle |
| [**supprimerUtilisateur()**](MGXApi.md#supprimerUtilisateur) | **DELETE** /api/utilisateurs/{id} | Suppression d&#39;un utilisateur |
| [**synchroniserLdap()**](MGXApi.md#synchroniserLdap) | **POST** /api/ldap/synchronisation | Synchroniser les utilisateurs du ldap |
| [**synchroniserMGLogin()**](MGXApi.md#synchroniserMGLogin) | **POST** /api/mglogin/synchronisation | Synchroniser les utilisateurs de MGLogin |
| [**uploaderDocument()**](MGXApi.md#uploaderDocument) | **POST** /api/bannettes/{id}/upload | Créer un document dans une bannette |
| [**utilisateurs()**](MGXApi.md#utilisateurs) | **GET** /api/utilisateurs | Lister les utilisateurs |
| [**verrouillerDocument()**](MGXApi.md#verrouillerDocument) | **POST** /api/documents/{id}/verrouillage | Verrouiller un document |


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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->activerRechercheDansContenuPourUnGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->activerRechercheDansContenuPourUneBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->activerUtilisateur: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->activerVersionnementGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->ajouterMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->ajouterMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->ajouterValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->appliquerFiltreAccesHabilitationGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->appliquerHabilitationsArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->appliquerHabilitationsBannettes: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->archiveBaseDonnees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->archiveBaseDonnees: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->archiveFichiers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->archiveFichiers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->associerArmoiresRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->associerFiltreAccesGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->associerProcessusGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->associerRolesArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->associerUtilisateursRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bannettes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->bannettes: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->binaire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->binaireVersion: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->classerDirectement: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->classerDocument: ', $e->getMessage(), PHP_EOL;
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

## `configuration()`

```php
configuration(): \OpenAPI\Client\Model\ReponseConfiguration
```

Informations publiques de configuration de l'instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configuration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->configuration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ReponseConfiguration**](../Model/ReponseConfiguration.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerGabaritDocumentArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerGabaritDocumentCategorie: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerGabaritDocumentGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerGabaritDossierArmoire: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connexion_mgx = new \OpenAPI\Client\Model\ConnexionMGX(); // \OpenAPI\Client\Model\ConnexionMGX

try {
    $result = $apiInstance->creerJWT($connexion_mgx);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->creerJWT: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerProcessus: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->creerUtilisateur: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deconnecter();
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->deconnecter: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->deplacerDocumentBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->desactiverValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->deverrouillerDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->dissocierArmoiresRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->dissocierFiltreAccesGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->dissocierProcessusGabaritDeDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->dissocierRolesArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->dissocierUtilisateursRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->document: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->documents: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->documentsBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->documentsDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->dossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->etatLdap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->etatLdap: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->etatMGLogin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->etatMGLogin: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->filtresAcces();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->filtresAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->filtresAccesUtilisateurs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->filtresAccesUtilisateurs: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->gabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->gabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->habilitationsArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->habilitationsBannettes: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->habilitationsUtilisateurConnecte();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->habilitationsUtilisateurConnecte: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->journalFonctionnel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->journalFonctionnel: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->journalTaches();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->journalTaches: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->lancerProcessusDocument: ', $e->getMessage(), PHP_EOL;
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

## `listerArmoires()`

```php
listerArmoires(): \OpenAPI\Client\Model\Armoire[]
```

Lister les armoires

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listerArmoires();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->listerArmoires: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Armoire[]**](../Model/Armoire.md)

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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->listerContenuCibleParLiensDuDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->listerDossiers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->listerGabaritsDocumentArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->listerGabaritsDocumentGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->listerGabaritsDossierArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->miseAJour();
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->miseAJour: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierMetadonneesDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierMetadonneesDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierModeleNomDynamiqueGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierModeleNomDynamiqueGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierMotDePasse: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierProcessus: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->modifierUtilisateur: ', $e->getMessage(), PHP_EOL;
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

## `planDeClassement()`

```php
planDeClassement(): \OpenAPI\Client\Model\PlanDeClassementInner[]
```

Retourne l'arborescence du plan de classement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->planDeClassement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->planDeClassement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PlanDeClassementInner[]**](../Model/PlanDeClassementInner.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->preClasser: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->previsualiserDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->processus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->processus: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->rechercheDocuments: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->rechercheDossiers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->rechercheRapideDocuments: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->rechercheRapideDossiers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->remplacerBinaire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->renommerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->renommerFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->renommerGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->renommerValeurFiltreAcces: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->restaurerVersion: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->roles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->roles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->selectionnerFiltreAccesDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->selectionnerFiltresAccesUtilisateur: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'armoire

try {
    $apiInstance->supprimerArmoire($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerArmoire: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la bannette

try {
    $apiInstance->supprimerBannette($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerBannette: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de la catégorie de gabarits de document

try {
    $apiInstance->supprimerCategorieGabaritDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerCategorieGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du document

try {
    $apiInstance->supprimerDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du dossier

try {
    $apiInstance->supprimerDossier($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du filtre

try {
    $apiInstance->supprimerFiltre($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerFiltre: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->supprimerFiltreAccesHabilitationGabaritDeDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de document

try {
    $apiInstance->supprimerGabaritDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du gabarit de dossier

try {
    $apiInstance->supprimerGabaritDossier($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du lien

try {
    $apiInstance->supprimerLienGabaritDossier($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerLienGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->supprimerMetadonneeGabaritDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->supprimerMetadonneeGabaritDossier: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du processus

try {
    $apiInstance->supprimerProcessus($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerProcessus: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id du rôle

try {
    $apiInstance->supprimerRole($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | L'id de l'utilisateur

try {
    $apiInstance->supprimerUtilisateur($id);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->supprimerUtilisateur: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->synchroniserLdap();
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->synchroniserLdap: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->synchroniserMGLogin();
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->synchroniserMGLogin: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->uploaderDocument: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->utilisateurs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MGXApi->utilisateurs: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\MGXApi(
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
    echo 'Exception when calling MGXApi->verrouillerDocument: ', $e->getMessage(), PHP_EOL;
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
