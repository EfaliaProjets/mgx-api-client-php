# OpenAPIClient-php

MultiGest version 10


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://mgx.loc:1906*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**activerRechercheDansContenuPourUnGabaritDeDocument**](docs/Api/AdminApi.md#activerrecherchedanscontenupourungabaritdedocument) | **PUT** /api/gabarits-de-document/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents du gabarit de document
*AdminApi* | [**activerRechercheDansContenuPourUneBannette**](docs/Api/AdminApi.md#activerrecherchedanscontenupourunebannette) | **PUT** /api/bannettes/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents d&#39;une bannette
*AdminApi* | [**activerUtilisateur**](docs/Api/AdminApi.md#activerutilisateur) | **POST** /api/utilisateurs/{id}/activation | Activation et désactivation d&#39;un utilisateur
*AdminApi* | [**activerVersionnementGabaritDocument**](docs/Api/AdminApi.md#activerversionnementgabaritdocument) | **PUT** /api/gabarits-de-document/{id}/versionnement | Activer/désactiver le versionnement des binaires d&#39;un document
*AdminApi* | [**ajouterMetadonneeGabaritDocument**](docs/Api/AdminApi.md#ajoutermetadonneegabaritdocument) | **POST** /api/gabarits-de-document/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de document
*AdminApi* | [**ajouterMetadonneeGabaritDossier**](docs/Api/AdminApi.md#ajoutermetadonneegabaritdossier) | **POST** /api/gabarits-de-dossier/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de dossier
*AdminApi* | [**ajouterValeurFiltreAcces**](docs/Api/AdminApi.md#ajoutervaleurfiltreacces) | **POST** /api/filtres-acces/{id}/valeurs | Ajouter une valeur à un filtre d&#39;accès
*AdminApi* | [**appliquerFiltreAccesHabilitationGabaritDeDossier**](docs/Api/AdminApi.md#appliquerfiltreacceshabilitationgabaritdedossier) | **POST** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces | Application d&#39;un filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier
*AdminApi* | [**appliquerHabilitationsArmoire**](docs/Api/AdminApi.md#appliquerhabilitationsarmoire) | **PUT** /api/roles/{role}/armoires/{armoire}/habilitations | Application des habilitations d&#39;une armoire
*AdminApi* | [**appliquerHabilitationsBannettes**](docs/Api/AdminApi.md#appliquerhabilitationsbannettes) | **PUT** /api/roles/{role}/bannettes/habilitations | Application des habilitations sur les bannettes
*AdminApi* | [**archiveBaseDonnees**](docs/Api/AdminApi.md#archivebasedonnees) | **GET** /api/sauvegarde/base-de-donnees | Sauvegarde de la base de données
*AdminApi* | [**archiveFichiers**](docs/Api/AdminApi.md#archivefichiers) | **GET** /api/sauvegarde/fichiers | Sauvegarde des fichiers
*AdminApi* | [**associerArmoiresRole**](docs/Api/AdminApi.md#associerarmoiresrole) | **POST** /api/roles/{id}/armoires | Associer des armoires à un rôle
*AdminApi* | [**associerFiltreAccesGabaritDeDossier**](docs/Api/AdminApi.md#associerfiltreaccesgabaritdedossier) | **POST** /api/gabarits-de-dossier/{gabarit}/filtres-acces | Associer un filtre d&#39;accès à un gabarit de dossier
*AdminApi* | [**associerProcessusGabaritDeDocument**](docs/Api/AdminApi.md#associerprocessusgabaritdedocument) | **POST** /api/gabarits-de-document/{gabarit}/processus | Associer un processus à un gabarit de document
*AdminApi* | [**associerRolesArmoire**](docs/Api/AdminApi.md#associerrolesarmoire) | **POST** /api/armoires/{id}/roles | Associer des rôles à une armoire
*AdminApi* | [**associerUtilisateursRole**](docs/Api/AdminApi.md#associerutilisateursrole) | **POST** /api/roles/{id}/utilisateurs | Associer des utilisateurs à un rôle
*AdminApi* | [**creerArmoire**](docs/Api/AdminApi.md#creerarmoire) | **POST** /api/armoires | Créer une armoire
*AdminApi* | [**creerBannette**](docs/Api/AdminApi.md#creerbannette) | **POST** /api/bannettes | Créer une bannette
*AdminApi* | [**creerCategorieGabaritDocument**](docs/Api/AdminApi.md#creercategoriegabaritdocument) | **POST** /api/gabarits-de-dossier/{gabarit}/categories-de-gabarits-de-document | Créer une catégorie de gabarits de document dans un gabarit de dossier
*AdminApi* | [**creerFiltreAcces**](docs/Api/AdminApi.md#creerfiltreacces) | **POST** /api/filtres-acces | Créer un filtre d&#39;accès
*AdminApi* | [**creerGabaritDocumentArmoire**](docs/Api/AdminApi.md#creergabaritdocumentarmoire) | **POST** /api/armoires/{armoire}/gabarits-de-document | Créer un gabarit de document dans une armoire
*AdminApi* | [**creerGabaritDocumentCategorie**](docs/Api/AdminApi.md#creergabaritdocumentcategorie) | **POST** /api/categories-de-gabarits-de-document/{categorie}/gabarits-de-document | Créer un gabarit de document dans une catégorie
*AdminApi* | [**creerGabaritDocumentGabaritDossier**](docs/Api/AdminApi.md#creergabaritdocumentgabaritdossier) | **POST** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Créer un gabarit de document dans un gabarit de dossier
*AdminApi* | [**creerGabaritDossierArmoire**](docs/Api/AdminApi.md#creergabaritdossierarmoire) | **POST** /api/armoires/{armoire}/gabarits-de-dossier | Créer un gabarit de dossier dans une armoire
*AdminApi* | [**creerLienGabaritDossier**](docs/Api/AdminApi.md#creerliengabaritdossier) | **POST** /api/gabarits-de-dossier/{id}/liens-vers-gabarit-de-dossier | Création d&#39;un lien vers un autre gabarit de dossier
*AdminApi* | [**creerProcessus**](docs/Api/AdminApi.md#creerprocessus) | **POST** /api/processus | Créer un processus
*AdminApi* | [**creerRole**](docs/Api/AdminApi.md#creerrole) | **POST** /api/roles | Créer un rôle
*AdminApi* | [**creerUtilisateur**](docs/Api/AdminApi.md#creerutilisateur) | **POST** /api/utilisateurs | Créer un utilisateur
*AdminApi* | [**desactiverValeurFiltreAcces**](docs/Api/AdminApi.md#desactivervaleurfiltreacces) | **DELETE** /api/filtres-acces/{id}/valeurs/{valeur} | Désactiver une valeur d&#39;un filtre d&#39;accès
*AdminApi* | [**dissocierArmoiresRole**](docs/Api/AdminApi.md#dissocierarmoiresrole) | **DELETE** /api/roles/{id}/armoires | Dissocier des armoires d&#39;un rôle
*AdminApi* | [**dissocierFiltreAccesGabaritDeDossier**](docs/Api/AdminApi.md#dissocierfiltreaccesgabaritdedossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/filtres-acces/{id} | Dissocier un filtre d&#39;accès d&#39;un gabarit de dossier
*AdminApi* | [**dissocierProcessusGabaritDeDocument**](docs/Api/AdminApi.md#dissocierprocessusgabaritdedocument) | **DELETE** /api/gabarits-de-document/{gabarit}/processus/{id} | Dissocier un processus d&#39;un gabarit de document
*AdminApi* | [**dissocierRolesArmoire**](docs/Api/AdminApi.md#dissocierrolesarmoire) | **DELETE** /api/armoires/{id}/roles | Dissocier des rôles d&#39;une armoire
*AdminApi* | [**dissocierUtilisateursRole**](docs/Api/AdminApi.md#dissocierutilisateursrole) | **DELETE** /api/roles/{id}/utilisateurs | Dissocier des utilisateurs d&#39;un rôle
*AdminApi* | [**etatLdap**](docs/Api/AdminApi.md#etatldap) | **GET** /api/ldap/etat | Récupérer l&#39;état de la connexion au ldap
*AdminApi* | [**etatMGLogin**](docs/Api/AdminApi.md#etatmglogin) | **GET** /api/mglogin/etat | Récupérer l&#39;état de la connexion à MGLogin
*AdminApi* | [**filtresAcces**](docs/Api/AdminApi.md#filtresacces) | **GET** /api/filtres-acces | Lister les filtres d&#39;accès
*AdminApi* | [**habilitationsArmoire**](docs/Api/AdminApi.md#habilitationsarmoire) | **GET** /api/roles/{role}/armoires/{armoire}/habilitations | Lister les habilitations d&#39;une armoire
*AdminApi* | [**habilitationsBannettes**](docs/Api/AdminApi.md#habilitationsbannettes) | **GET** /api/roles/{role}/bannettes/habilitations | Lister les habilitations des bannettes
*AdminApi* | [**journalFonctionnel**](docs/Api/AdminApi.md#journalfonctionnel) | **GET** /api/journal-fonctionnel | Lister les entrées du journal fonctionnel
*AdminApi* | [**journalTaches**](docs/Api/AdminApi.md#journaltaches) | **GET** /api/journal-taches | Liste des entrées du journal des tâches traitées en asynchrone
*AdminApi* | [**miseAJour**](docs/Api/AdminApi.md#miseajour) | **POST** /api/mise-a-jour-automatique | Lance la mise à jour automatique de l&#39;application
*AdminApi* | [**modifierArmoire**](docs/Api/AdminApi.md#modifierarmoire) | **PUT** /api/armoires/{id} | Mise à jour de l&#39;armoire
*AdminApi* | [**modifierBannette**](docs/Api/AdminApi.md#modifierbannette) | **PUT** /api/bannettes/{id} | Mise à jour de la bannette
*AdminApi* | [**modifierGabaritDocument**](docs/Api/AdminApi.md#modifiergabaritdocument) | **PUT** /api/gabarits-de-document/{id} | Modifier un gabarit de document
*AdminApi* | [**modifierLienGabaritDossier**](docs/Api/AdminApi.md#modifierliengabaritdossier) | **PUT** /api/liens-vers-gabarit-de-dossier/{id} | Modifier un lien vers un gabarit de dossier
*AdminApi* | [**modifierMetadonneeGabaritDocument**](docs/Api/AdminApi.md#modifiermetadonneegabaritdocument) | **PUT** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de document
*AdminApi* | [**modifierMetadonneeGabaritDossier**](docs/Api/AdminApi.md#modifiermetadonneegabaritdossier) | **PUT** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de dossier
*AdminApi* | [**modifierModeleNomDynamiqueGabaritDocument**](docs/Api/AdminApi.md#modifiermodelenomdynamiquegabaritdocument) | **PUT** /api/gabarits-de-document/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de document
*AdminApi* | [**modifierModeleNomDynamiqueGabaritDossier**](docs/Api/AdminApi.md#modifiermodelenomdynamiquegabaritdossier) | **PUT** /api/gabarits-de-dossier/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de dossier
*AdminApi* | [**modifierMotDePasse**](docs/Api/AdminApi.md#modifiermotdepasse) | **PUT** /api/utilisateurs/{id}/mot-de-passe | Modifier le mot de passe d&#39;un utilisateur
*AdminApi* | [**modifierProcessus**](docs/Api/AdminApi.md#modifierprocessus) | **PUT** /api/processus/{id} | Modifier un processus
*AdminApi* | [**modifierRole**](docs/Api/AdminApi.md#modifierrole) | **PUT** /api/roles/{id} | Modification d&#39;un rôle
*AdminApi* | [**modifierUtilisateur**](docs/Api/AdminApi.md#modifierutilisateur) | **PUT** /api/utilisateurs/{id} | Modification d&#39;un utilisateur
*AdminApi* | [**processus**](docs/Api/AdminApi.md#processus) | **GET** /api/processus | Lister les processus
*AdminApi* | [**renommerCategorieGabaritDocument**](docs/Api/AdminApi.md#renommercategoriegabaritdocument) | **PUT** /api/categories-de-gabarits-de-document/{id} | Renommer une catégorie de gabarits de document
*AdminApi* | [**renommerFiltreAcces**](docs/Api/AdminApi.md#renommerfiltreacces) | **PUT** /api/filtres-acces/{id} | Renommer un filtre d&#39;accès
*AdminApi* | [**renommerGabaritDossier**](docs/Api/AdminApi.md#renommergabaritdossier) | **PUT** /api/gabarits-de-dossier/{id} | Renommer un gabarit de dossier
*AdminApi* | [**renommerValeurFiltreAcces**](docs/Api/AdminApi.md#renommervaleurfiltreacces) | **PUT** /api/filtres-acces/{id}/valeurs/{valeur} | Renommer une valeur d&#39;un filtre d&#39;accès
*AdminApi* | [**roles**](docs/Api/AdminApi.md#roles) | **GET** /api/roles | Liste des rôles
*AdminApi* | [**selectionnerFiltresAccesUtilisateur**](docs/Api/AdminApi.md#selectionnerfiltresaccesutilisateur) | **PUT** /api/utilisateurs/{id}/filtres-acces/{filtre} | Sélectionner une valeur d&#39;un filtre d&#39;accès à un utilisateur
*AdminApi* | [**supprimerArmoire**](docs/Api/AdminApi.md#supprimerarmoire) | **DELETE** /api/armoires/{id} | Suppression d&#39;une armoire
*AdminApi* | [**supprimerBannette**](docs/Api/AdminApi.md#supprimerbannette) | **DELETE** /api/bannettes/{id} | Supprimer une bannette
*AdminApi* | [**supprimerCategorieGabaritDocument**](docs/Api/AdminApi.md#supprimercategoriegabaritdocument) | **DELETE** /api/categories-de-gabarits-de-document/{id} | Supprimer une catégorie de gabarits de document
*AdminApi* | [**supprimerFiltre**](docs/Api/AdminApi.md#supprimerfiltre) | **DELETE** /api/filtres-acces/{id} | Suppression d&#39;un filtre d&#39;accès
*AdminApi* | [**supprimerFiltreAccesHabilitationGabaritDeDossier**](docs/Api/AdminApi.md#supprimerfiltreacceshabilitationgabaritdedossier) | **DELETE** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces/{filtre} | Supprimer le filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier
*AdminApi* | [**supprimerGabaritDocument**](docs/Api/AdminApi.md#supprimergabaritdocument) | **DELETE** /api/gabarits-de-document/{id} | Supprimer un gabarit de document
*AdminApi* | [**supprimerGabaritDossier**](docs/Api/AdminApi.md#supprimergabaritdossier) | **DELETE** /api/gabarits-de-dossier/{id} | Supprimer un gabarit de dossier
*AdminApi* | [**supprimerLienGabaritDossier**](docs/Api/AdminApi.md#supprimerliengabaritdossier) | **DELETE** /api/liens-vers-gabarit-de-dossier/{id} | Supprimer un lien vers un gabarit de dossier
*AdminApi* | [**supprimerMetadonneeGabaritDocument**](docs/Api/AdminApi.md#supprimermetadonneegabaritdocument) | **DELETE** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de document
*AdminApi* | [**supprimerMetadonneeGabaritDossier**](docs/Api/AdminApi.md#supprimermetadonneegabaritdossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de dossier
*AdminApi* | [**supprimerProcessus**](docs/Api/AdminApi.md#supprimerprocessus) | **DELETE** /api/processus/{id} | Suppression d&#39;un processus
*AdminApi* | [**supprimerRole**](docs/Api/AdminApi.md#supprimerrole) | **DELETE** /api/roles/{id} | Suppression d&#39;un rôle
*AdminApi* | [**supprimerUtilisateur**](docs/Api/AdminApi.md#supprimerutilisateur) | **DELETE** /api/utilisateurs/{id} | Suppression d&#39;un utilisateur
*AdminApi* | [**synchroniserLdap**](docs/Api/AdminApi.md#synchroniserldap) | **POST** /api/ldap/synchronisation | Synchroniser les utilisateurs du ldap
*AdminApi* | [**synchroniserMGLogin**](docs/Api/AdminApi.md#synchronisermglogin) | **POST** /api/mglogin/synchronisation | Synchroniser les utilisateurs de MGLogin
*AdminApi* | [**utilisateurs**](docs/Api/AdminApi.md#utilisateurs) | **GET** /api/utilisateurs | Lister les utilisateurs
*ArmoireApi* | [**creerArmoire**](docs/Api/ArmoireApi.md#creerarmoire) | **POST** /api/armoires | Créer une armoire
*ArmoireApi* | [**creerGabaritDocumentArmoire**](docs/Api/ArmoireApi.md#creergabaritdocumentarmoire) | **POST** /api/armoires/{armoire}/gabarits-de-document | Créer un gabarit de document dans une armoire
*ArmoireApi* | [**creerGabaritDossierArmoire**](docs/Api/ArmoireApi.md#creergabaritdossierarmoire) | **POST** /api/armoires/{armoire}/gabarits-de-dossier | Créer un gabarit de dossier dans une armoire
*ArmoireApi* | [**listerArmoires**](docs/Api/ArmoireApi.md#listerarmoires) | **GET** /api/armoires | Lister les armoires
*ArmoireApi* | [**listerGabaritsDocumentArmoire**](docs/Api/ArmoireApi.md#listergabaritsdocumentarmoire) | **GET** /api/armoires/{armoire}/gabarits-de-document | Lister les gabarits de document d&#39;une armoire
*ArmoireApi* | [**listerGabaritsDossierArmoire**](docs/Api/ArmoireApi.md#listergabaritsdossierarmoire) | **GET** /api/armoires/{armoire}/gabarits-de-dossier | Lister les gabarits de dossier d&#39;une armoire
*ArmoireApi* | [**modifierArmoire**](docs/Api/ArmoireApi.md#modifierarmoire) | **PUT** /api/armoires/{id} | Mise à jour de l&#39;armoire
*ArmoireApi* | [**supprimerArmoire**](docs/Api/ArmoireApi.md#supprimerarmoire) | **DELETE** /api/armoires/{id} | Suppression d&#39;une armoire
*BannetteApi* | [**activerRechercheDansContenuPourUneBannette**](docs/Api/BannetteApi.md#activerrecherchedanscontenupourunebannette) | **PUT** /api/bannettes/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents d&#39;une bannette
*BannetteApi* | [**bannettes**](docs/Api/BannetteApi.md#bannettes) | **GET** /api/bannettes | Lister les bannettes
*BannetteApi* | [**creerBannette**](docs/Api/BannetteApi.md#creerbannette) | **POST** /api/bannettes | Créer une bannette
*BannetteApi* | [**deplacerDocumentBannette**](docs/Api/BannetteApi.md#deplacerdocumentbannette) | **POST** /api/documents/{id}/changement-bannette | Déplacer un document non classé dans une autre bannette
*BannetteApi* | [**documentsBannette**](docs/Api/BannetteApi.md#documentsbannette) | **GET** /api/bannettes/{id}/documents | Lister les documents présents dans la bannette
*BannetteApi* | [**modifierBannette**](docs/Api/BannetteApi.md#modifierbannette) | **PUT** /api/bannettes/{id} | Mise à jour de la bannette
*BannetteApi* | [**supprimerBannette**](docs/Api/BannetteApi.md#supprimerbannette) | **DELETE** /api/bannettes/{id} | Supprimer une bannette
*BannetteApi* | [**uploaderDocument**](docs/Api/BannetteApi.md#uploaderdocument) | **POST** /api/bannettes/{id}/upload | Créer un document dans une bannette
*CategoriesDeGabaritsDeDocumentApi* | [**creerCategorieGabaritDocument**](docs/Api/CategoriesDeGabaritsDeDocumentApi.md#creercategoriegabaritdocument) | **POST** /api/gabarits-de-dossier/{gabarit}/categories-de-gabarits-de-document | Créer une catégorie de gabarits de document dans un gabarit de dossier
*CategoriesDeGabaritsDeDocumentApi* | [**creerGabaritDocumentCategorie**](docs/Api/CategoriesDeGabaritsDeDocumentApi.md#creergabaritdocumentcategorie) | **POST** /api/categories-de-gabarits-de-document/{categorie}/gabarits-de-document | Créer un gabarit de document dans une catégorie
*CategoriesDeGabaritsDeDocumentApi* | [**renommerCategorieGabaritDocument**](docs/Api/CategoriesDeGabaritsDeDocumentApi.md#renommercategoriegabaritdocument) | **PUT** /api/categories-de-gabarits-de-document/{id} | Renommer une catégorie de gabarits de document
*CategoriesDeGabaritsDeDocumentApi* | [**supprimerCategorieGabaritDocument**](docs/Api/CategoriesDeGabaritsDeDocumentApi.md#supprimercategoriegabaritdocument) | **DELETE** /api/categories-de-gabarits-de-document/{id} | Supprimer une catégorie de gabarits de document
*DocumentApi* | [**binaire**](docs/Api/DocumentApi.md#binaire) | **GET** /api/documents/{id}/binaire | Récupération du flux de données binaires liées au document
*DocumentApi* | [**binaireVersion**](docs/Api/DocumentApi.md#binaireversion) | **GET** /api/documents/{id}/versions/{version}/binaire | Récupération du flux de données binaires liées au document
*DocumentApi* | [**classerDirectement**](docs/Api/DocumentApi.md#classerdirectement) | **POST** /api/gabarits-de-document/{id}/classement-direct | Créer un document directement classé
*DocumentApi* | [**classerDocument**](docs/Api/DocumentApi.md#classerdocument) | **POST** /api/documents/{id}/classement | Classer un document dans un gabarit donné
*DocumentApi* | [**deplacerDocumentBannette**](docs/Api/DocumentApi.md#deplacerdocumentbannette) | **POST** /api/documents/{id}/changement-bannette | Déplacer un document non classé dans une autre bannette
*DocumentApi* | [**deverrouillerDocument**](docs/Api/DocumentApi.md#deverrouillerdocument) | **DELETE** /api/documents/{id}/verrouillage | Déverrouiller un document
*DocumentApi* | [**document**](docs/Api/DocumentApi.md#document) | **GET** /api/documents/{id} | Récupérer un document
*DocumentApi* | [**documents**](docs/Api/DocumentApi.md#documents) | **GET** /api/gabarits-de-document/{id}/documents | Lister les documents classés dans ce gabarit
*DocumentApi* | [**documentsBannette**](docs/Api/DocumentApi.md#documentsbannette) | **GET** /api/bannettes/{id}/documents | Lister les documents présents dans la bannette
*DocumentApi* | [**documentsDossier**](docs/Api/DocumentApi.md#documentsdossier) | **GET** /api/dossiers/{dossier}/documents | Lister les documents d&#39;un dossier
*DocumentApi* | [**lancerProcessusDocument**](docs/Api/DocumentApi.md#lancerprocessusdocument) | **POST** /api/documents/{id}/processus/{processus}/lancement | Lancer un processus pour un document
*DocumentApi* | [**modifierMetadonneesDocument**](docs/Api/DocumentApi.md#modifiermetadonneesdocument) | **PUT** /api/documents/{document}/metadonnees | Modifier les métadonnées d&#39;un document
*DocumentApi* | [**preClasser**](docs/Api/DocumentApi.md#preclasser) | **POST** /api/documents/{id}/pre-classement | Pré-classer un document dans un gabarit donné
*DocumentApi* | [**previsualiserDocument**](docs/Api/DocumentApi.md#previsualiserdocument) | **GET** /api/documents/{id}/previsualisation | Récupération des données binaires permettant de prévisualiser le document dans le navigateur web
*DocumentApi* | [**rechercheDocuments**](docs/Api/DocumentApi.md#recherchedocuments) | **POST** /api/recherche/documents | Recherche de documents
*DocumentApi* | [**rechercheRapideDocuments**](docs/Api/DocumentApi.md#rechercherapidedocuments) | **POST** /api/recherche/rapide/documents | Recherche rapide de documents
*DocumentApi* | [**remplacerBinaire**](docs/Api/DocumentApi.md#remplacerbinaire) | **POST** /api/documents/{id}/binaire | Remplacer le binaire d&#39;un document
*DocumentApi* | [**restaurerVersion**](docs/Api/DocumentApi.md#restaurerversion) | **POST** /api/documents/{id}/versions/{version}/restauration | Restaurer le document à cette version du binaire
*DocumentApi* | [**supprimerDocument**](docs/Api/DocumentApi.md#supprimerdocument) | **DELETE** /api/documents/{id} | Supprimer un document
*DocumentApi* | [**uploaderDocument**](docs/Api/DocumentApi.md#uploaderdocument) | **POST** /api/bannettes/{id}/upload | Créer un document dans une bannette
*DocumentApi* | [**verrouillerDocument**](docs/Api/DocumentApi.md#verrouillerdocument) | **POST** /api/documents/{id}/verrouillage | Verrouiller un document
*DossierApi* | [**creerDossier**](docs/Api/DossierApi.md#creerdossier) | **POST** /api/gabarits-de-dossier/{id}/dossiers | Créer un nouveau dossier
*DossierApi* | [**documentsDossier**](docs/Api/DossierApi.md#documentsdossier) | **GET** /api/dossiers/{dossier}/documents | Lister les documents d&#39;un dossier
*DossierApi* | [**dossier**](docs/Api/DossierApi.md#dossier) | **GET** /api/dossiers/{id} | Récupérer un dossier
*DossierApi* | [**listerContenuCibleParLiensDuDossier**](docs/Api/DossierApi.md#listercontenucibleparliensdudossier) | **GET** /api/dossiers/{id}/liens | Liste tous les contenus ciblés par des liens d&#39;un dossier
*DossierApi* | [**listerDossiers**](docs/Api/DossierApi.md#listerdossiers) | **GET** /api/gabarits-de-dossier/{id}/dossiers | Lister les dossiers existants pour ce gabarit de dossier
*DossierApi* | [**modifierMetadonneesDossier**](docs/Api/DossierApi.md#modifiermetadonneesdossier) | **PUT** /api/dossiers/{dossier}/metadonnees | Modifier les métadonnées d&#39;un dossier
*DossierApi* | [**rechercheDossiers**](docs/Api/DossierApi.md#recherchedossiers) | **POST** /api/recherche/dossiers | Recherche de dossiers
*DossierApi* | [**rechercheRapideDossiers**](docs/Api/DossierApi.md#rechercherapidedossiers) | **POST** /api/recherche/rapide/dossiers | Recherche rapide de dossiers
*DossierApi* | [**selectionnerFiltreAccesDossier**](docs/Api/DossierApi.md#selectionnerfiltreaccesdossier) | **PUT** /api/dossiers/{id}/filtres-acces/{filtre} | Sélectionner une valeur de filtre d&#39;accès pour un dossier
*DossierApi* | [**supprimerDossier**](docs/Api/DossierApi.md#supprimerdossier) | **DELETE** /api/dossiers/{id} | Supprimer un dossier
*FiltresAccesApi* | [**ajouterValeurFiltreAcces**](docs/Api/FiltresAccesApi.md#ajoutervaleurfiltreacces) | **POST** /api/filtres-acces/{id}/valeurs | Ajouter une valeur à un filtre d&#39;accès
*FiltresAccesApi* | [**creerFiltreAcces**](docs/Api/FiltresAccesApi.md#creerfiltreacces) | **POST** /api/filtres-acces | Créer un filtre d&#39;accès
*FiltresAccesApi* | [**desactiverValeurFiltreAcces**](docs/Api/FiltresAccesApi.md#desactivervaleurfiltreacces) | **DELETE** /api/filtres-acces/{id}/valeurs/{valeur} | Désactiver une valeur d&#39;un filtre d&#39;accès
*FiltresAccesApi* | [**filtresAcces**](docs/Api/FiltresAccesApi.md#filtresacces) | **GET** /api/filtres-acces | Lister les filtres d&#39;accès
*FiltresAccesApi* | [**filtresAccesUtilisateurs**](docs/Api/FiltresAccesApi.md#filtresaccesutilisateurs) | **GET** /api/filtres-acces/utilisateurs | Lister les utilisateurs pouvant être sélectionnés dans un filtre d&#39;accès
*FiltresAccesApi* | [**renommerFiltreAcces**](docs/Api/FiltresAccesApi.md#renommerfiltreacces) | **PUT** /api/filtres-acces/{id} | Renommer un filtre d&#39;accès
*FiltresAccesApi* | [**renommerValeurFiltreAcces**](docs/Api/FiltresAccesApi.md#renommervaleurfiltreacces) | **PUT** /api/filtres-acces/{id}/valeurs/{valeur} | Renommer une valeur d&#39;un filtre d&#39;accès
*FiltresAccesApi* | [**selectionnerFiltresAccesUtilisateur**](docs/Api/FiltresAccesApi.md#selectionnerfiltresaccesutilisateur) | **PUT** /api/utilisateurs/{id}/filtres-acces/{filtre} | Sélectionner une valeur d&#39;un filtre d&#39;accès à un utilisateur
*FiltresAccesApi* | [**supprimerFiltre**](docs/Api/FiltresAccesApi.md#supprimerfiltre) | **DELETE** /api/filtres-acces/{id} | Suppression d&#39;un filtre d&#39;accès
*GabaritDeDocumentApi* | [**activerRechercheDansContenuPourUnGabaritDeDocument**](docs/Api/GabaritDeDocumentApi.md#activerrecherchedanscontenupourungabaritdedocument) | **PUT** /api/gabarits-de-document/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents du gabarit de document
*GabaritDeDocumentApi* | [**activerVersionnementGabaritDocument**](docs/Api/GabaritDeDocumentApi.md#activerversionnementgabaritdocument) | **PUT** /api/gabarits-de-document/{id}/versionnement | Activer/désactiver le versionnement des binaires d&#39;un document
*GabaritDeDocumentApi* | [**ajouterMetadonneeGabaritDocument**](docs/Api/GabaritDeDocumentApi.md#ajoutermetadonneegabaritdocument) | **POST** /api/gabarits-de-document/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de document
*GabaritDeDocumentApi* | [**associerProcessusGabaritDeDocument**](docs/Api/GabaritDeDocumentApi.md#associerprocessusgabaritdedocument) | **POST** /api/gabarits-de-document/{gabarit}/processus | Associer un processus à un gabarit de document
*GabaritDeDocumentApi* | [**classerDirectement**](docs/Api/GabaritDeDocumentApi.md#classerdirectement) | **POST** /api/gabarits-de-document/{id}/classement-direct | Créer un document directement classé
*GabaritDeDocumentApi* | [**creerGabaritDocumentArmoire**](docs/Api/GabaritDeDocumentApi.md#creergabaritdocumentarmoire) | **POST** /api/armoires/{armoire}/gabarits-de-document | Créer un gabarit de document dans une armoire
*GabaritDeDocumentApi* | [**creerGabaritDocumentCategorie**](docs/Api/GabaritDeDocumentApi.md#creergabaritdocumentcategorie) | **POST** /api/categories-de-gabarits-de-document/{categorie}/gabarits-de-document | Créer un gabarit de document dans une catégorie
*GabaritDeDocumentApi* | [**creerGabaritDocumentGabaritDossier**](docs/Api/GabaritDeDocumentApi.md#creergabaritdocumentgabaritdossier) | **POST** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Créer un gabarit de document dans un gabarit de dossier
*GabaritDeDocumentApi* | [**dissocierProcessusGabaritDeDocument**](docs/Api/GabaritDeDocumentApi.md#dissocierprocessusgabaritdedocument) | **DELETE** /api/gabarits-de-document/{gabarit}/processus/{id} | Dissocier un processus d&#39;un gabarit de document
*GabaritDeDocumentApi* | [**documents**](docs/Api/GabaritDeDocumentApi.md#documents) | **GET** /api/gabarits-de-document/{id}/documents | Lister les documents classés dans ce gabarit
*GabaritDeDocumentApi* | [**gabaritDocument**](docs/Api/GabaritDeDocumentApi.md#gabaritdocument) | **GET** /api/gabarits-de-document/{id} | Recupération d&#39;un gabarit de document
*GabaritDeDocumentApi* | [**listerGabaritsDocumentArmoire**](docs/Api/GabaritDeDocumentApi.md#listergabaritsdocumentarmoire) | **GET** /api/armoires/{armoire}/gabarits-de-document | Lister les gabarits de document d&#39;une armoire
*GabaritDeDocumentApi* | [**listerGabaritsDocumentGabaritDossier**](docs/Api/GabaritDeDocumentApi.md#listergabaritsdocumentgabaritdossier) | **GET** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Lister les gabarits de document d&#39;un gabarit de dossier
*GabaritDeDocumentApi* | [**modifierGabaritDocument**](docs/Api/GabaritDeDocumentApi.md#modifiergabaritdocument) | **PUT** /api/gabarits-de-document/{id} | Modifier un gabarit de document
*GabaritDeDocumentApi* | [**modifierMetadonneeGabaritDocument**](docs/Api/GabaritDeDocumentApi.md#modifiermetadonneegabaritdocument) | **PUT** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de document
*GabaritDeDocumentApi* | [**modifierModeleNomDynamiqueGabaritDocument**](docs/Api/GabaritDeDocumentApi.md#modifiermodelenomdynamiquegabaritdocument) | **PUT** /api/gabarits-de-document/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de document
*GabaritDeDocumentApi* | [**supprimerGabaritDocument**](docs/Api/GabaritDeDocumentApi.md#supprimergabaritdocument) | **DELETE** /api/gabarits-de-document/{id} | Supprimer un gabarit de document
*GabaritDeDocumentApi* | [**supprimerMetadonneeGabaritDocument**](docs/Api/GabaritDeDocumentApi.md#supprimermetadonneegabaritdocument) | **DELETE** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de document
*GabaritDeDossierApi* | [**ajouterMetadonneeGabaritDossier**](docs/Api/GabaritDeDossierApi.md#ajoutermetadonneegabaritdossier) | **POST** /api/gabarits-de-dossier/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de dossier
*GabaritDeDossierApi* | [**associerFiltreAccesGabaritDeDossier**](docs/Api/GabaritDeDossierApi.md#associerfiltreaccesgabaritdedossier) | **POST** /api/gabarits-de-dossier/{gabarit}/filtres-acces | Associer un filtre d&#39;accès à un gabarit de dossier
*GabaritDeDossierApi* | [**creerCategorieGabaritDocument**](docs/Api/GabaritDeDossierApi.md#creercategoriegabaritdocument) | **POST** /api/gabarits-de-dossier/{gabarit}/categories-de-gabarits-de-document | Créer une catégorie de gabarits de document dans un gabarit de dossier
*GabaritDeDossierApi* | [**creerDossier**](docs/Api/GabaritDeDossierApi.md#creerdossier) | **POST** /api/gabarits-de-dossier/{id}/dossiers | Créer un nouveau dossier
*GabaritDeDossierApi* | [**creerGabaritDocumentGabaritDossier**](docs/Api/GabaritDeDossierApi.md#creergabaritdocumentgabaritdossier) | **POST** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Créer un gabarit de document dans un gabarit de dossier
*GabaritDeDossierApi* | [**creerGabaritDossierArmoire**](docs/Api/GabaritDeDossierApi.md#creergabaritdossierarmoire) | **POST** /api/armoires/{armoire}/gabarits-de-dossier | Créer un gabarit de dossier dans une armoire
*GabaritDeDossierApi* | [**creerLienGabaritDossier**](docs/Api/GabaritDeDossierApi.md#creerliengabaritdossier) | **POST** /api/gabarits-de-dossier/{id}/liens-vers-gabarit-de-dossier | Création d&#39;un lien vers un autre gabarit de dossier
*GabaritDeDossierApi* | [**dissocierFiltreAccesGabaritDeDossier**](docs/Api/GabaritDeDossierApi.md#dissocierfiltreaccesgabaritdedossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/filtres-acces/{id} | Dissocier un filtre d&#39;accès d&#39;un gabarit de dossier
*GabaritDeDossierApi* | [**gabaritDossier**](docs/Api/GabaritDeDossierApi.md#gabaritdossier) | **GET** /api/gabarits-de-dossier/{id} | Récupération d&#39;un gabarit de dossier
*GabaritDeDossierApi* | [**listerDossiers**](docs/Api/GabaritDeDossierApi.md#listerdossiers) | **GET** /api/gabarits-de-dossier/{id}/dossiers | Lister les dossiers existants pour ce gabarit de dossier
*GabaritDeDossierApi* | [**listerGabaritsDocumentGabaritDossier**](docs/Api/GabaritDeDossierApi.md#listergabaritsdocumentgabaritdossier) | **GET** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Lister les gabarits de document d&#39;un gabarit de dossier
*GabaritDeDossierApi* | [**listerGabaritsDossierArmoire**](docs/Api/GabaritDeDossierApi.md#listergabaritsdossierarmoire) | **GET** /api/armoires/{armoire}/gabarits-de-dossier | Lister les gabarits de dossier d&#39;une armoire
*GabaritDeDossierApi* | [**modifierLienGabaritDossier**](docs/Api/GabaritDeDossierApi.md#modifierliengabaritdossier) | **PUT** /api/liens-vers-gabarit-de-dossier/{id} | Modifier un lien vers un gabarit de dossier
*GabaritDeDossierApi* | [**modifierMetadonneeGabaritDossier**](docs/Api/GabaritDeDossierApi.md#modifiermetadonneegabaritdossier) | **PUT** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de dossier
*GabaritDeDossierApi* | [**modifierModeleNomDynamiqueGabaritDossier**](docs/Api/GabaritDeDossierApi.md#modifiermodelenomdynamiquegabaritdossier) | **PUT** /api/gabarits-de-dossier/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de dossier
*GabaritDeDossierApi* | [**renommerGabaritDossier**](docs/Api/GabaritDeDossierApi.md#renommergabaritdossier) | **PUT** /api/gabarits-de-dossier/{id} | Renommer un gabarit de dossier
*GabaritDeDossierApi* | [**supprimerGabaritDossier**](docs/Api/GabaritDeDossierApi.md#supprimergabaritdossier) | **DELETE** /api/gabarits-de-dossier/{id} | Supprimer un gabarit de dossier
*GabaritDeDossierApi* | [**supprimerLienGabaritDossier**](docs/Api/GabaritDeDossierApi.md#supprimerliengabaritdossier) | **DELETE** /api/liens-vers-gabarit-de-dossier/{id} | Supprimer un lien vers un gabarit de dossier
*GabaritDeDossierApi* | [**supprimerMetadonneeGabaritDossier**](docs/Api/GabaritDeDossierApi.md#supprimermetadonneegabaritdossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de dossier
*JournalApi* | [**journalFonctionnel**](docs/Api/JournalApi.md#journalfonctionnel) | **GET** /api/journal-fonctionnel | Lister les entrées du journal fonctionnel
*LdapApi* | [**etatLdap**](docs/Api/LdapApi.md#etatldap) | **GET** /api/ldap/etat | Récupérer l&#39;état de la connexion au ldap
*LdapApi* | [**synchroniserLdap**](docs/Api/LdapApi.md#synchroniserldap) | **POST** /api/ldap/synchronisation | Synchroniser les utilisateurs du ldap
*MGLoginApi* | [**etatMGLogin**](docs/Api/MGLoginApi.md#etatmglogin) | **GET** /api/mglogin/etat | Récupérer l&#39;état de la connexion à MGLogin
*MGLoginApi* | [**synchroniserMGLogin**](docs/Api/MGLoginApi.md#synchronisermglogin) | **POST** /api/mglogin/synchronisation | Synchroniser les utilisateurs de MGLogin
*MGXApi* | [**activerRechercheDansContenuPourUnGabaritDeDocument**](docs/Api/MGXApi.md#activerrecherchedanscontenupourungabaritdedocument) | **PUT** /api/gabarits-de-document/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents du gabarit de document
*MGXApi* | [**activerRechercheDansContenuPourUneBannette**](docs/Api/MGXApi.md#activerrecherchedanscontenupourunebannette) | **PUT** /api/bannettes/{id}/recherche-dans-contenu | Activer/désactiver la recherche dans le contenu des documents d&#39;une bannette
*MGXApi* | [**activerUtilisateur**](docs/Api/MGXApi.md#activerutilisateur) | **POST** /api/utilisateurs/{id}/activation | Activation et désactivation d&#39;un utilisateur
*MGXApi* | [**activerVersionnementGabaritDocument**](docs/Api/MGXApi.md#activerversionnementgabaritdocument) | **PUT** /api/gabarits-de-document/{id}/versionnement | Activer/désactiver le versionnement des binaires d&#39;un document
*MGXApi* | [**ajouterMetadonneeGabaritDocument**](docs/Api/MGXApi.md#ajoutermetadonneegabaritdocument) | **POST** /api/gabarits-de-document/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de document
*MGXApi* | [**ajouterMetadonneeGabaritDossier**](docs/Api/MGXApi.md#ajoutermetadonneegabaritdossier) | **POST** /api/gabarits-de-dossier/{id}/metadonnees | Ajout d&#39;une nouvelle métadonnée au gabarit de dossier
*MGXApi* | [**ajouterValeurFiltreAcces**](docs/Api/MGXApi.md#ajoutervaleurfiltreacces) | **POST** /api/filtres-acces/{id}/valeurs | Ajouter une valeur à un filtre d&#39;accès
*MGXApi* | [**appliquerFiltreAccesHabilitationGabaritDeDossier**](docs/Api/MGXApi.md#appliquerfiltreacceshabilitationgabaritdedossier) | **POST** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces | Application d&#39;un filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier
*MGXApi* | [**appliquerHabilitationsArmoire**](docs/Api/MGXApi.md#appliquerhabilitationsarmoire) | **PUT** /api/roles/{role}/armoires/{armoire}/habilitations | Application des habilitations d&#39;une armoire
*MGXApi* | [**appliquerHabilitationsBannettes**](docs/Api/MGXApi.md#appliquerhabilitationsbannettes) | **PUT** /api/roles/{role}/bannettes/habilitations | Application des habilitations sur les bannettes
*MGXApi* | [**archiveBaseDonnees**](docs/Api/MGXApi.md#archivebasedonnees) | **GET** /api/sauvegarde/base-de-donnees | Sauvegarde de la base de données
*MGXApi* | [**archiveFichiers**](docs/Api/MGXApi.md#archivefichiers) | **GET** /api/sauvegarde/fichiers | Sauvegarde des fichiers
*MGXApi* | [**associerArmoiresRole**](docs/Api/MGXApi.md#associerarmoiresrole) | **POST** /api/roles/{id}/armoires | Associer des armoires à un rôle
*MGXApi* | [**associerFiltreAccesGabaritDeDossier**](docs/Api/MGXApi.md#associerfiltreaccesgabaritdedossier) | **POST** /api/gabarits-de-dossier/{gabarit}/filtres-acces | Associer un filtre d&#39;accès à un gabarit de dossier
*MGXApi* | [**associerProcessusGabaritDeDocument**](docs/Api/MGXApi.md#associerprocessusgabaritdedocument) | **POST** /api/gabarits-de-document/{gabarit}/processus | Associer un processus à un gabarit de document
*MGXApi* | [**associerRolesArmoire**](docs/Api/MGXApi.md#associerrolesarmoire) | **POST** /api/armoires/{id}/roles | Associer des rôles à une armoire
*MGXApi* | [**associerUtilisateursRole**](docs/Api/MGXApi.md#associerutilisateursrole) | **POST** /api/roles/{id}/utilisateurs | Associer des utilisateurs à un rôle
*MGXApi* | [**bannettes**](docs/Api/MGXApi.md#bannettes) | **GET** /api/bannettes | Lister les bannettes
*MGXApi* | [**binaire**](docs/Api/MGXApi.md#binaire) | **GET** /api/documents/{id}/binaire | Récupération du flux de données binaires liées au document
*MGXApi* | [**binaireVersion**](docs/Api/MGXApi.md#binaireversion) | **GET** /api/documents/{id}/versions/{version}/binaire | Récupération du flux de données binaires liées au document
*MGXApi* | [**classerDirectement**](docs/Api/MGXApi.md#classerdirectement) | **POST** /api/gabarits-de-document/{id}/classement-direct | Créer un document directement classé
*MGXApi* | [**classerDocument**](docs/Api/MGXApi.md#classerdocument) | **POST** /api/documents/{id}/classement | Classer un document dans un gabarit donné
*MGXApi* | [**configuration**](docs/Api/MGXApi.md#configuration) | **GET** /configuration | Informations publiques de configuration de l&#39;instance
*MGXApi* | [**creerArmoire**](docs/Api/MGXApi.md#creerarmoire) | **POST** /api/armoires | Créer une armoire
*MGXApi* | [**creerBannette**](docs/Api/MGXApi.md#creerbannette) | **POST** /api/bannettes | Créer une bannette
*MGXApi* | [**creerCategorieGabaritDocument**](docs/Api/MGXApi.md#creercategoriegabaritdocument) | **POST** /api/gabarits-de-dossier/{gabarit}/categories-de-gabarits-de-document | Créer une catégorie de gabarits de document dans un gabarit de dossier
*MGXApi* | [**creerDossier**](docs/Api/MGXApi.md#creerdossier) | **POST** /api/gabarits-de-dossier/{id}/dossiers | Créer un nouveau dossier
*MGXApi* | [**creerFiltreAcces**](docs/Api/MGXApi.md#creerfiltreacces) | **POST** /api/filtres-acces | Créer un filtre d&#39;accès
*MGXApi* | [**creerGabaritDocumentArmoire**](docs/Api/MGXApi.md#creergabaritdocumentarmoire) | **POST** /api/armoires/{armoire}/gabarits-de-document | Créer un gabarit de document dans une armoire
*MGXApi* | [**creerGabaritDocumentCategorie**](docs/Api/MGXApi.md#creergabaritdocumentcategorie) | **POST** /api/categories-de-gabarits-de-document/{categorie}/gabarits-de-document | Créer un gabarit de document dans une catégorie
*MGXApi* | [**creerGabaritDocumentGabaritDossier**](docs/Api/MGXApi.md#creergabaritdocumentgabaritdossier) | **POST** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Créer un gabarit de document dans un gabarit de dossier
*MGXApi* | [**creerGabaritDossierArmoire**](docs/Api/MGXApi.md#creergabaritdossierarmoire) | **POST** /api/armoires/{armoire}/gabarits-de-dossier | Créer un gabarit de dossier dans une armoire
*MGXApi* | [**creerJWT**](docs/Api/MGXApi.md#creerjwt) | **POST** /login | Créer un JWT
*MGXApi* | [**creerLienGabaritDossier**](docs/Api/MGXApi.md#creerliengabaritdossier) | **POST** /api/gabarits-de-dossier/{id}/liens-vers-gabarit-de-dossier | Création d&#39;un lien vers un autre gabarit de dossier
*MGXApi* | [**creerProcessus**](docs/Api/MGXApi.md#creerprocessus) | **POST** /api/processus | Créer un processus
*MGXApi* | [**creerRole**](docs/Api/MGXApi.md#creerrole) | **POST** /api/roles | Créer un rôle
*MGXApi* | [**creerUtilisateur**](docs/Api/MGXApi.md#creerutilisateur) | **POST** /api/utilisateurs | Créer un utilisateur
*MGXApi* | [**deconnecter**](docs/Api/MGXApi.md#deconnecter) | **POST** /logout | Déconnecter l&#39;utilisateur
*MGXApi* | [**deplacerDocumentBannette**](docs/Api/MGXApi.md#deplacerdocumentbannette) | **POST** /api/documents/{id}/changement-bannette | Déplacer un document non classé dans une autre bannette
*MGXApi* | [**desactiverValeurFiltreAcces**](docs/Api/MGXApi.md#desactivervaleurfiltreacces) | **DELETE** /api/filtres-acces/{id}/valeurs/{valeur} | Désactiver une valeur d&#39;un filtre d&#39;accès
*MGXApi* | [**deverrouillerDocument**](docs/Api/MGXApi.md#deverrouillerdocument) | **DELETE** /api/documents/{id}/verrouillage | Déverrouiller un document
*MGXApi* | [**dissocierArmoiresRole**](docs/Api/MGXApi.md#dissocierarmoiresrole) | **DELETE** /api/roles/{id}/armoires | Dissocier des armoires d&#39;un rôle
*MGXApi* | [**dissocierFiltreAccesGabaritDeDossier**](docs/Api/MGXApi.md#dissocierfiltreaccesgabaritdedossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/filtres-acces/{id} | Dissocier un filtre d&#39;accès d&#39;un gabarit de dossier
*MGXApi* | [**dissocierProcessusGabaritDeDocument**](docs/Api/MGXApi.md#dissocierprocessusgabaritdedocument) | **DELETE** /api/gabarits-de-document/{gabarit}/processus/{id} | Dissocier un processus d&#39;un gabarit de document
*MGXApi* | [**dissocierRolesArmoire**](docs/Api/MGXApi.md#dissocierrolesarmoire) | **DELETE** /api/armoires/{id}/roles | Dissocier des rôles d&#39;une armoire
*MGXApi* | [**dissocierUtilisateursRole**](docs/Api/MGXApi.md#dissocierutilisateursrole) | **DELETE** /api/roles/{id}/utilisateurs | Dissocier des utilisateurs d&#39;un rôle
*MGXApi* | [**document**](docs/Api/MGXApi.md#document) | **GET** /api/documents/{id} | Récupérer un document
*MGXApi* | [**documents**](docs/Api/MGXApi.md#documents) | **GET** /api/gabarits-de-document/{id}/documents | Lister les documents classés dans ce gabarit
*MGXApi* | [**documentsBannette**](docs/Api/MGXApi.md#documentsbannette) | **GET** /api/bannettes/{id}/documents | Lister les documents présents dans la bannette
*MGXApi* | [**documentsDossier**](docs/Api/MGXApi.md#documentsdossier) | **GET** /api/dossiers/{dossier}/documents | Lister les documents d&#39;un dossier
*MGXApi* | [**dossier**](docs/Api/MGXApi.md#dossier) | **GET** /api/dossiers/{id} | Récupérer un dossier
*MGXApi* | [**etatLdap**](docs/Api/MGXApi.md#etatldap) | **GET** /api/ldap/etat | Récupérer l&#39;état de la connexion au ldap
*MGXApi* | [**etatMGLogin**](docs/Api/MGXApi.md#etatmglogin) | **GET** /api/mglogin/etat | Récupérer l&#39;état de la connexion à MGLogin
*MGXApi* | [**filtresAcces**](docs/Api/MGXApi.md#filtresacces) | **GET** /api/filtres-acces | Lister les filtres d&#39;accès
*MGXApi* | [**filtresAccesUtilisateurs**](docs/Api/MGXApi.md#filtresaccesutilisateurs) | **GET** /api/filtres-acces/utilisateurs | Lister les utilisateurs pouvant être sélectionnés dans un filtre d&#39;accès
*MGXApi* | [**gabaritDocument**](docs/Api/MGXApi.md#gabaritdocument) | **GET** /api/gabarits-de-document/{id} | Recupération d&#39;un gabarit de document
*MGXApi* | [**gabaritDossier**](docs/Api/MGXApi.md#gabaritdossier) | **GET** /api/gabarits-de-dossier/{id} | Récupération d&#39;un gabarit de dossier
*MGXApi* | [**habilitationsArmoire**](docs/Api/MGXApi.md#habilitationsarmoire) | **GET** /api/roles/{role}/armoires/{armoire}/habilitations | Lister les habilitations d&#39;une armoire
*MGXApi* | [**habilitationsBannettes**](docs/Api/MGXApi.md#habilitationsbannettes) | **GET** /api/roles/{role}/bannettes/habilitations | Lister les habilitations des bannettes
*MGXApi* | [**habilitationsUtilisateurConnecte**](docs/Api/MGXApi.md#habilitationsutilisateurconnecte) | **GET** /api/utilisateur-connecte/habilitations | Récupérer les habilitations de l&#39;utilisateur connecté
*MGXApi* | [**journalFonctionnel**](docs/Api/MGXApi.md#journalfonctionnel) | **GET** /api/journal-fonctionnel | Lister les entrées du journal fonctionnel
*MGXApi* | [**journalTaches**](docs/Api/MGXApi.md#journaltaches) | **GET** /api/journal-taches | Liste des entrées du journal des tâches traitées en asynchrone
*MGXApi* | [**lancerProcessusDocument**](docs/Api/MGXApi.md#lancerprocessusdocument) | **POST** /api/documents/{id}/processus/{processus}/lancement | Lancer un processus pour un document
*MGXApi* | [**listerArmoires**](docs/Api/MGXApi.md#listerarmoires) | **GET** /api/armoires | Lister les armoires
*MGXApi* | [**listerContenuCibleParLiensDuDossier**](docs/Api/MGXApi.md#listercontenucibleparliensdudossier) | **GET** /api/dossiers/{id}/liens | Liste tous les contenus ciblés par des liens d&#39;un dossier
*MGXApi* | [**listerDossiers**](docs/Api/MGXApi.md#listerdossiers) | **GET** /api/gabarits-de-dossier/{id}/dossiers | Lister les dossiers existants pour ce gabarit de dossier
*MGXApi* | [**listerGabaritsDocumentArmoire**](docs/Api/MGXApi.md#listergabaritsdocumentarmoire) | **GET** /api/armoires/{armoire}/gabarits-de-document | Lister les gabarits de document d&#39;une armoire
*MGXApi* | [**listerGabaritsDocumentGabaritDossier**](docs/Api/MGXApi.md#listergabaritsdocumentgabaritdossier) | **GET** /api/gabarits-de-dossier/{gabarit}/gabarits-de-document | Lister les gabarits de document d&#39;un gabarit de dossier
*MGXApi* | [**listerGabaritsDossierArmoire**](docs/Api/MGXApi.md#listergabaritsdossierarmoire) | **GET** /api/armoires/{armoire}/gabarits-de-dossier | Lister les gabarits de dossier d&#39;une armoire
*MGXApi* | [**miseAJour**](docs/Api/MGXApi.md#miseajour) | **POST** /api/mise-a-jour-automatique | Lance la mise à jour automatique de l&#39;application
*MGXApi* | [**modifierArmoire**](docs/Api/MGXApi.md#modifierarmoire) | **PUT** /api/armoires/{id} | Mise à jour de l&#39;armoire
*MGXApi* | [**modifierBannette**](docs/Api/MGXApi.md#modifierbannette) | **PUT** /api/bannettes/{id} | Mise à jour de la bannette
*MGXApi* | [**modifierGabaritDocument**](docs/Api/MGXApi.md#modifiergabaritdocument) | **PUT** /api/gabarits-de-document/{id} | Modifier un gabarit de document
*MGXApi* | [**modifierLienGabaritDossier**](docs/Api/MGXApi.md#modifierliengabaritdossier) | **PUT** /api/liens-vers-gabarit-de-dossier/{id} | Modifier un lien vers un gabarit de dossier
*MGXApi* | [**modifierMetadonneeGabaritDocument**](docs/Api/MGXApi.md#modifiermetadonneegabaritdocument) | **PUT** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de document
*MGXApi* | [**modifierMetadonneeGabaritDossier**](docs/Api/MGXApi.md#modifiermetadonneegabaritdossier) | **PUT** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Modification d&#39;une métadonnée d&#39;un gabarit de dossier
*MGXApi* | [**modifierMetadonneesDocument**](docs/Api/MGXApi.md#modifiermetadonneesdocument) | **PUT** /api/documents/{document}/metadonnees | Modifier les métadonnées d&#39;un document
*MGXApi* | [**modifierMetadonneesDossier**](docs/Api/MGXApi.md#modifiermetadonneesdossier) | **PUT** /api/dossiers/{dossier}/metadonnees | Modifier les métadonnées d&#39;un dossier
*MGXApi* | [**modifierModeleNomDynamiqueGabaritDocument**](docs/Api/MGXApi.md#modifiermodelenomdynamiquegabaritdocument) | **PUT** /api/gabarits-de-document/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de document
*MGXApi* | [**modifierModeleNomDynamiqueGabaritDossier**](docs/Api/MGXApi.md#modifiermodelenomdynamiquegabaritdossier) | **PUT** /api/gabarits-de-dossier/{id}/modele-nom-dynamique | Modifier le modèle de nom dynamique d&#39;un gabarit de dossier
*MGXApi* | [**modifierMotDePasse**](docs/Api/MGXApi.md#modifiermotdepasse) | **PUT** /api/utilisateurs/{id}/mot-de-passe | Modifier le mot de passe d&#39;un utilisateur
*MGXApi* | [**modifierProcessus**](docs/Api/MGXApi.md#modifierprocessus) | **PUT** /api/processus/{id} | Modifier un processus
*MGXApi* | [**modifierRole**](docs/Api/MGXApi.md#modifierrole) | **PUT** /api/roles/{id} | Modification d&#39;un rôle
*MGXApi* | [**modifierUtilisateur**](docs/Api/MGXApi.md#modifierutilisateur) | **PUT** /api/utilisateurs/{id} | Modification d&#39;un utilisateur
*MGXApi* | [**planDeClassement**](docs/Api/MGXApi.md#plandeclassement) | **GET** /api/plan-de-classement | Retourne l&#39;arborescence du plan de classement
*MGXApi* | [**preClasser**](docs/Api/MGXApi.md#preclasser) | **POST** /api/documents/{id}/pre-classement | Pré-classer un document dans un gabarit donné
*MGXApi* | [**previsualiserDocument**](docs/Api/MGXApi.md#previsualiserdocument) | **GET** /api/documents/{id}/previsualisation | Récupération des données binaires permettant de prévisualiser le document dans le navigateur web
*MGXApi* | [**processus**](docs/Api/MGXApi.md#processus) | **GET** /api/processus | Lister les processus
*MGXApi* | [**rechercheDocuments**](docs/Api/MGXApi.md#recherchedocuments) | **POST** /api/recherche/documents | Recherche de documents
*MGXApi* | [**rechercheDossiers**](docs/Api/MGXApi.md#recherchedossiers) | **POST** /api/recherche/dossiers | Recherche de dossiers
*MGXApi* | [**rechercheRapideDocuments**](docs/Api/MGXApi.md#rechercherapidedocuments) | **POST** /api/recherche/rapide/documents | Recherche rapide de documents
*MGXApi* | [**rechercheRapideDossiers**](docs/Api/MGXApi.md#rechercherapidedossiers) | **POST** /api/recherche/rapide/dossiers | Recherche rapide de dossiers
*MGXApi* | [**remplacerBinaire**](docs/Api/MGXApi.md#remplacerbinaire) | **POST** /api/documents/{id}/binaire | Remplacer le binaire d&#39;un document
*MGXApi* | [**renommerCategorieGabaritDocument**](docs/Api/MGXApi.md#renommercategoriegabaritdocument) | **PUT** /api/categories-de-gabarits-de-document/{id} | Renommer une catégorie de gabarits de document
*MGXApi* | [**renommerFiltreAcces**](docs/Api/MGXApi.md#renommerfiltreacces) | **PUT** /api/filtres-acces/{id} | Renommer un filtre d&#39;accès
*MGXApi* | [**renommerGabaritDossier**](docs/Api/MGXApi.md#renommergabaritdossier) | **PUT** /api/gabarits-de-dossier/{id} | Renommer un gabarit de dossier
*MGXApi* | [**renommerValeurFiltreAcces**](docs/Api/MGXApi.md#renommervaleurfiltreacces) | **PUT** /api/filtres-acces/{id}/valeurs/{valeur} | Renommer une valeur d&#39;un filtre d&#39;accès
*MGXApi* | [**restaurerVersion**](docs/Api/MGXApi.md#restaurerversion) | **POST** /api/documents/{id}/versions/{version}/restauration | Restaurer le document à cette version du binaire
*MGXApi* | [**roles**](docs/Api/MGXApi.md#roles) | **GET** /api/roles | Liste des rôles
*MGXApi* | [**selectionnerFiltreAccesDossier**](docs/Api/MGXApi.md#selectionnerfiltreaccesdossier) | **PUT** /api/dossiers/{id}/filtres-acces/{filtre} | Sélectionner une valeur de filtre d&#39;accès pour un dossier
*MGXApi* | [**selectionnerFiltresAccesUtilisateur**](docs/Api/MGXApi.md#selectionnerfiltresaccesutilisateur) | **PUT** /api/utilisateurs/{id}/filtres-acces/{filtre} | Sélectionner une valeur d&#39;un filtre d&#39;accès à un utilisateur
*MGXApi* | [**supprimerArmoire**](docs/Api/MGXApi.md#supprimerarmoire) | **DELETE** /api/armoires/{id} | Suppression d&#39;une armoire
*MGXApi* | [**supprimerBannette**](docs/Api/MGXApi.md#supprimerbannette) | **DELETE** /api/bannettes/{id} | Supprimer une bannette
*MGXApi* | [**supprimerCategorieGabaritDocument**](docs/Api/MGXApi.md#supprimercategoriegabaritdocument) | **DELETE** /api/categories-de-gabarits-de-document/{id} | Supprimer une catégorie de gabarits de document
*MGXApi* | [**supprimerDocument**](docs/Api/MGXApi.md#supprimerdocument) | **DELETE** /api/documents/{id} | Supprimer un document
*MGXApi* | [**supprimerDossier**](docs/Api/MGXApi.md#supprimerdossier) | **DELETE** /api/dossiers/{id} | Supprimer un dossier
*MGXApi* | [**supprimerFiltre**](docs/Api/MGXApi.md#supprimerfiltre) | **DELETE** /api/filtres-acces/{id} | Suppression d&#39;un filtre d&#39;accès
*MGXApi* | [**supprimerFiltreAccesHabilitationGabaritDeDossier**](docs/Api/MGXApi.md#supprimerfiltreacceshabilitationgabaritdedossier) | **DELETE** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces/{filtre} | Supprimer le filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier
*MGXApi* | [**supprimerGabaritDocument**](docs/Api/MGXApi.md#supprimergabaritdocument) | **DELETE** /api/gabarits-de-document/{id} | Supprimer un gabarit de document
*MGXApi* | [**supprimerGabaritDossier**](docs/Api/MGXApi.md#supprimergabaritdossier) | **DELETE** /api/gabarits-de-dossier/{id} | Supprimer un gabarit de dossier
*MGXApi* | [**supprimerLienGabaritDossier**](docs/Api/MGXApi.md#supprimerliengabaritdossier) | **DELETE** /api/liens-vers-gabarit-de-dossier/{id} | Supprimer un lien vers un gabarit de dossier
*MGXApi* | [**supprimerMetadonneeGabaritDocument**](docs/Api/MGXApi.md#supprimermetadonneegabaritdocument) | **DELETE** /api/gabarits-de-document/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de document
*MGXApi* | [**supprimerMetadonneeGabaritDossier**](docs/Api/MGXApi.md#supprimermetadonneegabaritdossier) | **DELETE** /api/gabarits-de-dossier/{gabarit}/metadonnees/{id} | Suppression d&#39;une métadonnée d&#39;un gabarit de dossier
*MGXApi* | [**supprimerProcessus**](docs/Api/MGXApi.md#supprimerprocessus) | **DELETE** /api/processus/{id} | Suppression d&#39;un processus
*MGXApi* | [**supprimerRole**](docs/Api/MGXApi.md#supprimerrole) | **DELETE** /api/roles/{id} | Suppression d&#39;un rôle
*MGXApi* | [**supprimerUtilisateur**](docs/Api/MGXApi.md#supprimerutilisateur) | **DELETE** /api/utilisateurs/{id} | Suppression d&#39;un utilisateur
*MGXApi* | [**synchroniserLdap**](docs/Api/MGXApi.md#synchroniserldap) | **POST** /api/ldap/synchronisation | Synchroniser les utilisateurs du ldap
*MGXApi* | [**synchroniserMGLogin**](docs/Api/MGXApi.md#synchronisermglogin) | **POST** /api/mglogin/synchronisation | Synchroniser les utilisateurs de MGLogin
*MGXApi* | [**uploaderDocument**](docs/Api/MGXApi.md#uploaderdocument) | **POST** /api/bannettes/{id}/upload | Créer un document dans une bannette
*MGXApi* | [**utilisateurs**](docs/Api/MGXApi.md#utilisateurs) | **GET** /api/utilisateurs | Lister les utilisateurs
*MGXApi* | [**verrouillerDocument**](docs/Api/MGXApi.md#verrouillerdocument) | **POST** /api/documents/{id}/verrouillage | Verrouiller un document
*PlanDeClassementApi* | [**planDeClassement**](docs/Api/PlanDeClassementApi.md#plandeclassement) | **GET** /api/plan-de-classement | Retourne l&#39;arborescence du plan de classement
*ProcessusWorkeyApi* | [**creerProcessus**](docs/Api/ProcessusWorkeyApi.md#creerprocessus) | **POST** /api/processus | Créer un processus
*ProcessusWorkeyApi* | [**modifierProcessus**](docs/Api/ProcessusWorkeyApi.md#modifierprocessus) | **PUT** /api/processus/{id} | Modifier un processus
*ProcessusWorkeyApi* | [**processus**](docs/Api/ProcessusWorkeyApi.md#processus) | **GET** /api/processus | Lister les processus
*ProcessusWorkeyApi* | [**supprimerProcessus**](docs/Api/ProcessusWorkeyApi.md#supprimerprocessus) | **DELETE** /api/processus/{id} | Suppression d&#39;un processus
*RechercheApi* | [**rechercheDocuments**](docs/Api/RechercheApi.md#recherchedocuments) | **POST** /api/recherche/documents | Recherche de documents
*RechercheApi* | [**rechercheDossiers**](docs/Api/RechercheApi.md#recherchedossiers) | **POST** /api/recherche/dossiers | Recherche de dossiers
*RechercheApi* | [**rechercheRapideDocuments**](docs/Api/RechercheApi.md#rechercherapidedocuments) | **POST** /api/recherche/rapide/documents | Recherche rapide de documents
*RechercheApi* | [**rechercheRapideDossiers**](docs/Api/RechercheApi.md#rechercherapidedossiers) | **POST** /api/recherche/rapide/dossiers | Recherche rapide de dossiers
*SecuriteApi* | [**appliquerFiltreAccesHabilitationGabaritDeDossier**](docs/Api/SecuriteApi.md#appliquerfiltreacceshabilitationgabaritdedossier) | **POST** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces | Application d&#39;un filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier
*SecuriteApi* | [**appliquerHabilitationsArmoire**](docs/Api/SecuriteApi.md#appliquerhabilitationsarmoire) | **PUT** /api/roles/{role}/armoires/{armoire}/habilitations | Application des habilitations d&#39;une armoire
*SecuriteApi* | [**appliquerHabilitationsBannettes**](docs/Api/SecuriteApi.md#appliquerhabilitationsbannettes) | **PUT** /api/roles/{role}/bannettes/habilitations | Application des habilitations sur les bannettes
*SecuriteApi* | [**associerArmoiresRole**](docs/Api/SecuriteApi.md#associerarmoiresrole) | **POST** /api/roles/{id}/armoires | Associer des armoires à un rôle
*SecuriteApi* | [**associerRolesArmoire**](docs/Api/SecuriteApi.md#associerrolesarmoire) | **POST** /api/armoires/{id}/roles | Associer des rôles à une armoire
*SecuriteApi* | [**associerUtilisateursRole**](docs/Api/SecuriteApi.md#associerutilisateursrole) | **POST** /api/roles/{id}/utilisateurs | Associer des utilisateurs à un rôle
*SecuriteApi* | [**creerJWT**](docs/Api/SecuriteApi.md#creerjwt) | **POST** /login | Créer un JWT
*SecuriteApi* | [**creerRole**](docs/Api/SecuriteApi.md#creerrole) | **POST** /api/roles | Créer un rôle
*SecuriteApi* | [**deconnecter**](docs/Api/SecuriteApi.md#deconnecter) | **POST** /logout | Déconnecter l&#39;utilisateur
*SecuriteApi* | [**dissocierArmoiresRole**](docs/Api/SecuriteApi.md#dissocierarmoiresrole) | **DELETE** /api/roles/{id}/armoires | Dissocier des armoires d&#39;un rôle
*SecuriteApi* | [**dissocierRolesArmoire**](docs/Api/SecuriteApi.md#dissocierrolesarmoire) | **DELETE** /api/armoires/{id}/roles | Dissocier des rôles d&#39;une armoire
*SecuriteApi* | [**dissocierUtilisateursRole**](docs/Api/SecuriteApi.md#dissocierutilisateursrole) | **DELETE** /api/roles/{id}/utilisateurs | Dissocier des utilisateurs d&#39;un rôle
*SecuriteApi* | [**habilitationsArmoire**](docs/Api/SecuriteApi.md#habilitationsarmoire) | **GET** /api/roles/{role}/armoires/{armoire}/habilitations | Lister les habilitations d&#39;une armoire
*SecuriteApi* | [**habilitationsBannettes**](docs/Api/SecuriteApi.md#habilitationsbannettes) | **GET** /api/roles/{role}/bannettes/habilitations | Lister les habilitations des bannettes
*SecuriteApi* | [**modifierRole**](docs/Api/SecuriteApi.md#modifierrole) | **PUT** /api/roles/{id} | Modification d&#39;un rôle
*SecuriteApi* | [**roles**](docs/Api/SecuriteApi.md#roles) | **GET** /api/roles | Liste des rôles
*SecuriteApi* | [**supprimerFiltreAccesHabilitationGabaritDeDossier**](docs/Api/SecuriteApi.md#supprimerfiltreacceshabilitationgabaritdedossier) | **DELETE** /api/roles/{role}/armoires/{armoire}/habilitations/gabarits-de-dossier/{gabarit}/filtres-acces/{filtre} | Supprimer le filtre d&#39;accès sur l&#39;habilitation d&#39;un gabarit de dossier
*SecuriteApi* | [**supprimerRole**](docs/Api/SecuriteApi.md#supprimerrole) | **DELETE** /api/roles/{id} | Suppression d&#39;un rôle
*TechniqueApi* | [**archiveBaseDonnees**](docs/Api/TechniqueApi.md#archivebasedonnees) | **GET** /api/sauvegarde/base-de-donnees | Sauvegarde de la base de données
*TechniqueApi* | [**archiveFichiers**](docs/Api/TechniqueApi.md#archivefichiers) | **GET** /api/sauvegarde/fichiers | Sauvegarde des fichiers
*TechniqueApi* | [**configuration**](docs/Api/TechniqueApi.md#configuration) | **GET** /configuration | Informations publiques de configuration de l&#39;instance
*TechniqueApi* | [**journalTaches**](docs/Api/TechniqueApi.md#journaltaches) | **GET** /api/journal-taches | Liste des entrées du journal des tâches traitées en asynchrone
*TechniqueApi* | [**miseAJour**](docs/Api/TechniqueApi.md#miseajour) | **POST** /api/mise-a-jour-automatique | Lance la mise à jour automatique de l&#39;application
*UtilisateursApi* | [**activerUtilisateur**](docs/Api/UtilisateursApi.md#activerutilisateur) | **POST** /api/utilisateurs/{id}/activation | Activation et désactivation d&#39;un utilisateur
*UtilisateursApi* | [**creerUtilisateur**](docs/Api/UtilisateursApi.md#creerutilisateur) | **POST** /api/utilisateurs | Créer un utilisateur
*UtilisateursApi* | [**habilitationsUtilisateurConnecte**](docs/Api/UtilisateursApi.md#habilitationsutilisateurconnecte) | **GET** /api/utilisateur-connecte/habilitations | Récupérer les habilitations de l&#39;utilisateur connecté
*UtilisateursApi* | [**modifierMotDePasse**](docs/Api/UtilisateursApi.md#modifiermotdepasse) | **PUT** /api/utilisateurs/{id}/mot-de-passe | Modifier le mot de passe d&#39;un utilisateur
*UtilisateursApi* | [**modifierUtilisateur**](docs/Api/UtilisateursApi.md#modifierutilisateur) | **PUT** /api/utilisateurs/{id} | Modification d&#39;un utilisateur
*UtilisateursApi* | [**selectionnerFiltresAccesUtilisateur**](docs/Api/UtilisateursApi.md#selectionnerfiltresaccesutilisateur) | **PUT** /api/utilisateurs/{id}/filtres-acces/{filtre} | Sélectionner une valeur d&#39;un filtre d&#39;accès à un utilisateur
*UtilisateursApi* | [**supprimerUtilisateur**](docs/Api/UtilisateursApi.md#supprimerutilisateur) | **DELETE** /api/utilisateurs/{id} | Suppression d&#39;un utilisateur
*UtilisateursApi* | [**utilisateurs**](docs/Api/UtilisateursApi.md#utilisateurs) | **GET** /api/utilisateurs | Lister les utilisateurs

## Models

- [APIIndisponible](docs/Model/APIIndisponible.md)
- [ActivationRechercheBannette](docs/Model/ActivationRechercheBannette.md)
- [ActivationRechercheGabarit](docs/Model/ActivationRechercheGabarit.md)
- [ActivationUtilisateur](docs/Model/ActivationUtilisateur.md)
- [ActivationVersionnement](docs/Model/ActivationVersionnement.md)
- [Armoire](docs/Model/Armoire.md)
- [AssocierProcessusGabarit](docs/Model/AssocierProcessusGabarit.md)
- [Bannette](docs/Model/Bannette.md)
- [BannetteCible](docs/Model/BannetteCible.md)
- [CategorieDeGabaritsDeDocument](docs/Model/CategorieDeGabaritsDeDocument.md)
- [ConnexionMGX](docs/Model/ConnexionMGX.md)
- [CreationArmoire](docs/Model/CreationArmoire.md)
- [CreationProcessus](docs/Model/CreationProcessus.md)
- [DConnexionUtilisateurIndisponible](docs/Model/DConnexionUtilisateurIndisponible.md)
- [Document](docs/Model/Document.md)
- [DocumentCreePar](docs/Model/DocumentCreePar.md)
- [DocumentVerrouille](docs/Model/DocumentVerrouille.md)
- [DocumentVersionsInner](docs/Model/DocumentVersionsInner.md)
- [Dossier](docs/Model/Dossier.md)
- [DossierCreePar](docs/Model/DossierCreePar.md)
- [DossierFiltresAccesInner](docs/Model/DossierFiltresAccesInner.md)
- [DossierFiltresAccesInnerOneOf](docs/Model/DossierFiltresAccesInnerOneOf.md)
- [DossierFiltresAccesInnerOneOf1](docs/Model/DossierFiltresAccesInnerOneOf1.md)
- [Droit](docs/Model/Droit.md)
- [FiltreAcces](docs/Model/FiltreAcces.md)
- [FiltreAcces1](docs/Model/FiltreAcces1.md)
- [FiltreAccesGabarit](docs/Model/FiltreAccesGabarit.md)
- [FiltreAccesGabaritDossier](docs/Model/FiltreAccesGabaritDossier.md)
- [FiltreAccesValeursInner](docs/Model/FiltreAccesValeursInner.md)
- [GabaritDeDocument](docs/Model/GabaritDeDocument.md)
- [GabaritDeDocumentGroupement](docs/Model/GabaritDeDocumentGroupement.md)
- [GabaritDeDossier](docs/Model/GabaritDeDossier.md)
- [HabilitationsArmoire](docs/Model/HabilitationsArmoire.md)
- [HabilitationsArmoireGabaritsDeDossierInner](docs/Model/HabilitationsArmoireGabaritsDeDossierInner.md)
- [HabilitationsArmoireRequest](docs/Model/HabilitationsArmoireRequest.md)
- [HabilitationsArmoireRequestGabaritsDeDocumentInner](docs/Model/HabilitationsArmoireRequestGabaritsDeDocumentInner.md)
- [HabilitationsArmoireRequestGabaritsDeDossierInner](docs/Model/HabilitationsArmoireRequestGabaritsDeDossierInner.md)
- [HabilitationsBannettesInner](docs/Model/HabilitationsBannettesInner.md)
- [IdCategorieDocument](docs/Model/IdCategorieDocument.md)
- [InformationBannette](docs/Model/InformationBannette.md)
- [InputGabaritDeDocument](docs/Model/InputGabaritDeDocument.md)
- [InputGabaritDeDocumentMetadonneesInner](docs/Model/InputGabaritDeDocumentMetadonneesInner.md)
- [InputGabaritDeDocumentMetadonneesInnerValeursInner](docs/Model/InputGabaritDeDocumentMetadonneesInnerValeursInner.md)
- [InputMetadonnee](docs/Model/InputMetadonnee.md)
- [JournalEntree](docs/Model/JournalEntree.md)
- [LienGabaritDossier](docs/Model/LienGabaritDossier.md)
- [LienGabaritDossierMetadonnee](docs/Model/LienGabaritDossierMetadonnee.md)
- [LienVersGabaritDeDossier](docs/Model/LienVersGabaritDeDossier.md)
- [ListeArmoires](docs/Model/ListeArmoires.md)
- [ListeDesUtilisateursIndisponible](docs/Model/ListeDesUtilisateursIndisponible.md)
- [ListeRoles](docs/Model/ListeRoles.md)
- [ListeUtilisateurs](docs/Model/ListeUtilisateurs.md)
- [LoginValide](docs/Model/LoginValide.md)
- [MesHabilitations](docs/Model/MesHabilitations.md)
- [MesHabilitationsBannettesInner](docs/Model/MesHabilitationsBannettesInner.md)
- [MesHabilitationsGabaritsDeDocumentInner](docs/Model/MesHabilitationsGabaritsDeDocumentInner.md)
- [MesHabilitationsGabaritsDeDossierInner](docs/Model/MesHabilitationsGabaritsDeDossierInner.md)
- [Metadonnee](docs/Model/Metadonnee.md)
- [MetadonneeFormat](docs/Model/MetadonneeFormat.md)
- [ModificationArmoire](docs/Model/ModificationArmoire.md)
- [ModifierLienGabaritDossierRequest](docs/Model/ModifierLienGabaritDossierRequest.md)
- [ModifierProcessusRequest](docs/Model/ModifierProcessusRequest.md)
- [MotDePasseModifie](docs/Model/MotDePasseModifie.md)
- [NomCategorieDocument](docs/Model/NomCategorieDocument.md)
- [NomRole](docs/Model/NomRole.md)
- [NonHabilite](docs/Model/NonHabilite.md)
- [ParametresClassement](docs/Model/ParametresClassement.md)
- [ParametresCreationDossier](docs/Model/ParametresCreationDossier.md)
- [ParametresGabaritDocument](docs/Model/ParametresGabaritDocument.md)
- [ParametresGabaritDocumentGroupement](docs/Model/ParametresGabaritDocumentGroupement.md)
- [ParametresGabaritDossier](docs/Model/ParametresGabaritDossier.md)
- [ParametresModeleNomDynamique](docs/Model/ParametresModeleNomDynamique.md)
- [ParametresPreClassement](docs/Model/ParametresPreClassement.md)
- [ParametresRecherche](docs/Model/ParametresRecherche.md)
- [ParametresRechercheConditionsInner](docs/Model/ParametresRechercheConditionsInner.md)
- [ParametresRechercheRapide](docs/Model/ParametresRechercheRapide.md)
- [PlanDeClassementInner](docs/Model/PlanDeClassementInner.md)
- [PlanDeClassementInnerAllOf](docs/Model/PlanDeClassementInnerAllOf.md)
- [PlanDeClassementInnerAllOfGabaritsDeDossierInner](docs/Model/PlanDeClassementInnerAllOfGabaritsDeDossierInner.md)
- [PlanDeClassementInnerAllOfGabaritsDeDossierInnerAllOf](docs/Model/PlanDeClassementInnerAllOfGabaritsDeDossierInnerAllOf.md)
- [PlanDeClassementInnerAllOfGabaritsDeDossierInnerAllOfCategoriesDeGabaritsDeDocumentInner](docs/Model/PlanDeClassementInnerAllOfGabaritsDeDossierInnerAllOfCategoriesDeGabaritsDeDocumentInner.md)
- [PlanDeClassementInnerAllOfGabaritsDeDossierInnerAllOfCategoriesDeGabaritsDeDocumentInnerAllOf](docs/Model/PlanDeClassementInnerAllOfGabaritsDeDossierInnerAllOfCategoriesDeGabaritsDeDocumentInnerAllOf.md)
- [Processus](docs/Model/Processus.md)
- [RenommerFiltreAccesRequest](docs/Model/RenommerFiltreAccesRequest.md)
- [RenommerValeurFiltreAccesRequest](docs/Model/RenommerValeurFiltreAccesRequest.md)
- [ReponseConfiguration](docs/Model/ReponseConfiguration.md)
- [ReponseConfigurationApparence](docs/Model/ReponseConfigurationApparence.md)
- [ReponseConfigurationMglogin](docs/Model/ReponseConfigurationMglogin.md)
- [ReponseDossiersCibles](docs/Model/ReponseDossiersCibles.md)
- [ReponseDossiersCiblesLiensVersDossiersInner](docs/Model/ReponseDossiersCiblesLiensVersDossiersInner.md)
- [ReponseEtatLdap](docs/Model/ReponseEtatLdap.md)
- [ReponseEtatLdapConfiguration](docs/Model/ReponseEtatLdapConfiguration.md)
- [ReponseEtatLdapConfigurationAttributs](docs/Model/ReponseEtatLdapConfigurationAttributs.md)
- [ReponseEtatMGLogin](docs/Model/ReponseEtatMGLogin.md)
- [ReponseEtatMGLoginConfiguration](docs/Model/ReponseEtatMGLoginConfiguration.md)
- [ReponseFiltreAccesUtilisateursInner](docs/Model/ReponseFiltreAccesUtilisateursInner.md)
- [ReponseJournalTaches](docs/Model/ReponseJournalTaches.md)
- [ReponseLancementProcessus](docs/Model/ReponseLancementProcessus.md)
- [ReponseRechercheDocuments](docs/Model/ReponseRechercheDocuments.md)
- [ReponseRechercheDossiers](docs/Model/ReponseRechercheDossiers.md)
- [ReponseRechercheRapideDocuments](docs/Model/ReponseRechercheRapideDocuments.md)
- [RequeteInvalide](docs/Model/RequeteInvalide.md)
- [RequeteLoginAvecCodeMGLogin](docs/Model/RequeteLoginAvecCodeMGLogin.md)
- [RequeteLoginAvecLoginMotDePasse](docs/Model/RequeteLoginAvecLoginMotDePasse.md)
- [RessourceIntrouvable](docs/Model/RessourceIntrouvable.md)
- [ResultatRecherche](docs/Model/ResultatRecherche.md)
- [ResultatRechercheArmoire](docs/Model/ResultatRechercheArmoire.md)
- [ResultatRechercheBannette](docs/Model/ResultatRechercheBannette.md)
- [ResultatRechercheDossier](docs/Model/ResultatRechercheDossier.md)
- [ResultatRechercheDossierArmoire](docs/Model/ResultatRechercheDossierArmoire.md)
- [ResultatRechercheDossierGabarit](docs/Model/ResultatRechercheDossierGabarit.md)
- [ResultatRechercheGabarit](docs/Model/ResultatRechercheGabarit.md)
- [ResultatRechercheMetadonneesInner](docs/Model/ResultatRechercheMetadonneesInner.md)
- [Role](docs/Model/Role.md)
- [SelectionnerFiltreAccesDossierRequest](docs/Model/SelectionnerFiltreAccesDossierRequest.md)
- [SelectionnerFiltreAccesDossierRequestOneOf](docs/Model/SelectionnerFiltreAccesDossierRequestOneOf.md)
- [SelectionnerFiltreAccesDossierRequestOneOf1](docs/Model/SelectionnerFiltreAccesDossierRequestOneOf1.md)
- [SelectionnerFiltresAccesUtilisateurRequest](docs/Model/SelectionnerFiltresAccesUtilisateurRequest.md)
- [StructureMetadonnee](docs/Model/StructureMetadonnee.md)
- [StructureMetadonneeValeursInner](docs/Model/StructureMetadonneeValeursInner.md)
- [Utilisateur](docs/Model/Utilisateur.md)
- [ValeurFiltreAcces](docs/Model/ValeurFiltreAcces.md)
- [ValeurMetadonnee](docs/Model/ValeurMetadonnee.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `canari-11`
    - Package version: `canari-11`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
