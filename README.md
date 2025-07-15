# Symfony 6.x Monolithique avec Twig

Ce projet est une application web Symfony 6.x monolithique utilisant Twig pour le rendu des vues.

## Démarrage

1. Installer les dépendances :
   ```bash
   composer install
   ```
2. Lancer le serveur de développement :
   ```bash
   php -S localhost:8000 -t public
   ```
2. Lancer le serveur de bdd :
   ```bash
      docker compose up -d database
   ```
4. Faites une migration de la base de données :
   ```bash
   php bin/console doctrine:migrations:diff
   php bin/console doctrine:migrations:migrate
   ```
5. Ouvrez votre navigateur et accédez à `http://localhost:8000` pour accéder à l'application.

## Structure
- Le code source se trouve dans `src/`
- Les templates Twig sont dans `templates/`
- Les configurations sont dans `config/`

## Documentation
Consultez la documentation officielle : https://symfony.com/doc/current/index.html
