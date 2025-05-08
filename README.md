
## POURQUOI AGBANDE

AGBANWA innove afin de garantir à ses clients 
une visibilité optimale sur leurs coûts logistiques tout en leur permettant de visualiser 
les possibilités d’optimisation, en mutualisant les chargements, par exemple

## Development Technology

- PHP
- Laravel Framework

## Execution Procedure

Accéder au projet
```bash
$ git clone https://github.com/joelppj/AGBANDE_API.git
$ cd AGBANDE_API

```
Installer les dépendances
```bash

==== INSATALLATION DES DEPENDANCES  ============
composer require laravel/passport
composer require barryvdh/laravel-dompdf


```
Configuration de la base de donnée
```bash

==== DB CONFIGURATION  ============
    ==> Créer une base de donnée
    ==> Allez dans le fichier .env puis renseigner les coordonnées de votre DB que vous venez de créer

```
Migration des data par defaut dans la DB
```bash

==== DB migration  ============
    Tapez::
    ==> $ php artisan migrate --seed(pour migrer les factories par defaut)

```
Démarrer le serveur en développement
```bash

==== DEMARRAGE REEL DU PROJET ============
$ php artisan passport:install
$ php artisan serve
```
Acceder au Projet par :http://127.0.0.1:8000

## CONSOMMATION DE L'API & UTILISATION DES ROUTES

Accéder à AGBANDE_API/DOCUMENTATION.txt POUR VOIR TOUTES LES ROUTES AINSI QUE LEURS MODES D'EMPLOI.

## TEST DE L'API

Importer  FINANFA.postman_collection.json sur Postman puis passer au test de l'API
