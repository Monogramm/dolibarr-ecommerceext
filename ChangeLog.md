# ChangeLog

## 4.0.20.0

- Correction erreur lors de la synchronisation des classes de TVA. (Correction du fichier de langue)
- Cacher le message de warning concernant le repertoire de cache WSDL pour la connexion soap (si ce n'est pas un site magento).
- Correction de l'enregistrement de la date de la commande lors de la synchro de ECommerce vers Dolibarr.

## 4.0.19.0

- Parametrage de la synchronisation des statuts des commandes.
- Les variables globales ECOMMERCENG_WOOCOMMERCE_FORCE_ORDER_STATUS_TO_DRAFT, ECOMMERCENG_WOOCOMMERCE_ORDER_PROCESSING_STATUS_TO_DRAFT ont été supprimées.

## 4.0.18.0

- Correction et généralisation de la mise à jour des liens lors d'une fiche lié à un site ou portant le tag du site. (gestion de la mise a jour des elements de la boutique vers dolibarr à revoir, la date de mise a jour etant la plus recente date de mise a jour des liens aux elements et non une date de la derniere mise a jour manuelle) 
- Création ou mise à jour du produit sur la boutique (si lors de la modification d'un produit non lié mais ayant le tag de la boutique, la reference du produit est trouvée sur la boutique)  
- Correction de la verification de l'appartenance du produit a la categorie de la boutique lors de la modification d'un produit sur Dolibarr.

## 4.0.17.0

- Correction d'un warning lors de la syncho.
- Correction de la liste des variantes du produit à mettre à jour qui se base la date de mise à jour de la variante (mise a jour sur la modification du stock via une commande) ou la date de mise à jour du produit parent (pour les autres cas).

## 4.0.16.0

- Correction de la fonction de suppression des produits dans la "Partie dangereuse" de la fiche du site, dut à un changement de paramètres passés à la fonction "delete" de la classe "Product" de la version 5.0 à la 6.0.
- Correction de la liste des variantes du produit à mettre à jour qui ne se base plus sur la date de mise à jour de la variante (elle n'est pas mise à jour et reste égale à la date de création).
- Correction de ne pas mettre à jour le stock si le produit est un service dans le cas de la synchro des stocks de Ecommerce vers Dolibarr.
- Correction de la synchro des images de Dolibarr vers Ecommerce (Attention l'API ne permet pas de supprimer l'image des variantes, ont ne peut que la réécraser).
- Correction de l'envoi des PDF des factures et des expéditions de Dolibarr vers Ecommerce à la validation et à la génération manuelle du document.
- Mise à jour de la date de mise à jour des liens "Ecommerce/Dolibarr" à la modification d'un élément dans Dolibarr (société, produit, ...) synchronisés vers Ecommerce.
- Correction de l'API client de Woocommerce pour récupérer les erreurs de l'API.

## 4.0.15.0

- Generation automatique du code barre que lors de la creation du produit sur Dolibarr lors de la synchro des produits.

## 4.0.14.0

- Precision sur les messages d'erreurs lors de la synchro des produits.

## 4.0.13.0

- Correction du test d'un produit deja existant par sa Ref lors de la synchro ECommerce vers Dolibarr.

## 4.0.12.0

- Correction de la liste des catégories d'une variante d'un produit récuperées depuis ECommerce.

## 4.0.11.0

- Correction d'une erreur de frappe sur le log system lors de la synchro du stock, pendant la synchro des produits, de ECommerce vers Dolibarr.

## 4.0.10.0

- Correction sur la precision de messages d'erreurs lors de la synchro

## 4.0.9.0

- Corrections suite au changement du format des données reçues par l'API Woocommerce depuis sa mise à jour en 2.0.0
- Correction mineur de la mise à jour des images lors de la modification d'un produit sur Dolibarr

## 4.0.8.0

- Mise a jour de l'api client Woocommerce 1.2.0 en 2.0.0
- Correction de la construction de l'url de callback pour OAuth2 pour qu'il garde le protocole https du site dans sa construction.

## 4.0.7.0

- Report de la construction de l'url de callback pour OAuth2 dans l'écran de paramètrage du site à l'identique de celle définie dans le script de la page de callback.

## 4.0.6.0

- Ajout de l'option query_string_auth lors de la connexion a WooCommerce si l'adresse de la boutique est en https.

## 4.0.5.0

- Désactivation de la mise à jour du client à la modification du tiers (il n'y avais que l'email de renseigné et qui n'a pas à être modifié)

## 4.0.4.0

- Modification de la gestion de mise à jour du statut de la commande

## 4.0.3.0

- Enregistre la société pour les clients anonymes pour chaque site et non dans l'option ECOMMERCENG_USE_THIS_THIRDPARTY_FOR_NONLOGGED_CUSTOMER 
- Correction de la quantités des éléments lié au site pour la fiche du site (en non pour tous les sites)
- Ajout d'une option ECOMMERCENG_NO_COUNT_UPDATE pour ne pas récupérer les quantités à mettre à jour et afficher tous les boutons de synchronisation sur la fiche du site.
- Correction de la recherche de correspondance lors de la synchro des catégories
- Correction de la récupération des produits et de ses variantes
- Correction de la recherche de la ref du produits dans Dolibarr lors de la synchro
- Ne re-télécharge pas les informations du client pour recupérer les adresses du clients lors de la synchro des sociétés
- Lors de la synchro des contacts, rempli le nom si vide par "\[nom non renseigné\]" ou "Pas de nom/prénom renseigné" en fonction des cas
- Similaire pour les nom des tiers
- Ajout de l'option ECOMMERCENG_WOOCOMMERCE_ORDER_PROCESSING_STATUS_TO_DRAFT pour ne forcer les commandes woocommerce au statut "En cours" redescende au statut "Brouillon" dans Dolibarr
- Les commandes woocommerce au statut "Remboursées" redescende au statut "Annulée" dans Dolibarr
- Definie la description d'une ligne de produit vide par "L'api n'a pas pu récupérer la description du produit"
- Cherche la societe du contact d'une commande par son adresse mail si fourni pour les commandes anonymes
- Correction de la recherche d'un contact par ses informations
- Correction d'une partie de la gestion des erreurs
- Les logs bas niveaux woocommerce sont au niveau DEBUG et plus au niveau INFO
- Corrections mineures
- Changement du nom du module en Woosync et version supportant que Woocommerce

## 4.0.2.0

- D'un champ complémetaire oublié pour la fiche d'un produit d'un site woocommerce
- Affiche du lien de test sur les parametres du site que si l'adresse du site est renseigné
- Ajout de la description de l'erreur lors du fonctionnement de l'OAuth 2
- Corrections mineures

## 4.0.1.0

- Ajout OAuth2 pour Wordpress
- Mise en commun du type de prix renvoyé par la boutique (HT / TTC)
- Lien de test en fonction du type du site
- Creation de champ complémentaire à l'ajout d'un site Woocommerce
- Ajout de la gestion des classes de TVA Woocommerce pour les produits + Dictionnaire
- Ajout des fonctions de recherche, insert et update à la classe eCommerceDict
- Ajout et modification de traductions
- Corrections du decodage de la reponse de l'API Woocommerce
- Ajout de la synchronisation du produit lors de l'ajout de la catégorie mère "E-Commerce" (Trigger)
- Ne synchronise pas le produit lorsque l'on envèle la catégorie mère "E-Commerce" (Trigger)
- Creation du produit sur le site depuis dolibarr (Trigger)
- Correction du statut réel de la commande lors de la synchro de Dolibarr vers E-Commerce (Trigger)
- Ajout test connection a l'appel de la fonction connect de la classe remote access de Woocommerce
- Correction de la gestion des dates lors des fonctions ToUpdate de Woocommerce
- Modification gestion des tiers (avec recherche doublon par email, nom, ...) et distinctions entreprise/particulier
- Modification gestion des contacts/adresses avec recherche doublon
- Modification gestion des catégories avec recherche doublon
- Modification de mise a jour du prix du produit
- Ajout de gestion des extrafields sur les produits et commandes
- Ajout de la synchro methode de paiment sur la commande dans la synchro E-Commerce vers Dolibarr
- Ajout ECOMMERCENG_WOOCOMMERCE_FORCE_ORDER_STATUS_TO_DRAFT pour forcer le statut de la commande en brouillon lors de la synchro Woocommerce vers Dolibarr- Ajout de la possibilité d'ignorer les commandes anonyme avec la variable ECOMMERCENG_PASS_ORDER_FOR_NONLOGGED_CUSTOMER
- Ajout synchronisation des images avec E-commerce (possibilité de l'activer avec la variable ECOMMERCENG_ENABLE_SYNCHRO_IMAGES) (Necessite paramétrage OAuth2 pour l'envoi des images vers Woocommerce)
- Ajout envoie PDF facture / expedition à la génération du PDF sur la commande Woocommerce via Wordpress (Necessite paramétrage OAuth2) (l'activer avec la variable ECOMMERCENG_ENABLE_SEND_FILE_TO_ORDER)
- Ajout synchro des catégories de Woocommerce vers Dolibarr
- Corrections diverses

## 3.9.1.0

- Add option ECOMMERCENG_THIRDPARTY_UNIQUE_ON to search existing thirdparties from email instead of name.
- Can define to_date=YYYYMMDDHHMMSS in url to limit date when searching updated records.
- Add option ECOMMERCENG_DEBUG to log Soap requests with magento.
- Add support for Woocommerce.
- Support for price level.
- A lot of fix/enhancement in error management.

## 3.9.0.0

- Initial version.