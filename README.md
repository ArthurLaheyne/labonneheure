# Dépendances
- Git
- Yarn
- Composer
- NodeJS
- PHP 7.0.8

# Création du projet en local
- Clonage du boilerplate
```
git clone https://github.com/shakealot/symfony-boilerplate.git
composer install
yarn install
yarn run encore dev --watch
```
- Envoi du projet sur le repo du projet
```
git push origin master
```

# Installation sur OVH
- Composer
```
curl -sS https://getcomposer.org/installer | php
```
- Installation du projet
```
git clone http://{projet}
```
- Générer les assets de production
```
yarn encore production
```

# Créer une nouvelle page

### CSS JS
- Créer ```assets/css/nouvelle_page.scss```
- Créer ```assets/js/nouvelle_page.js```
```
// assets/js/nouvelle_page.js
import '../css/nouvelle_page.scss';
```
```
// webpack.config.js
Encore
    // ...
    .addEntry('app', './assets/js/app.js')
+     .addEntry('checkout', './assets/js/nouvelle_page.js')
    // ...
```
- Relancer la commande ```yarn run encore dev --watch```
