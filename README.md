# Dépendances
- Git
- Yarn
- Composer
- NodeJS
- PHP 7.0.8

# Création du projet en local
- Clonage du boilerplate
```
git clone https://github.com/shakealot/symfony-client-boilerplate.git [new_projet] |
cd [new_projet]
git remote add upstream https://github.com/shakealot/symfony-client-boilerplate.git
git remote set-url origin git@github.com:shakealot/[new_project].git
git push origin master
composer install
yarn install
yarn run encore dev --watch
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

### Controller
```
    /**
     * @Route("/new-page", name="new_page")
     */
    public function newPage()
    {
        return $this->render('pages/new-page.html.twig');
    }
```

### Template, JS, CSS
```
chmod +x commands.sh
./commands.sh {new-page}
```

### Webpack
```
    .addEntry('new-page', './assets/js/new-page.js')
```


Relancer la commande ```yarn run encore dev --watch```

### SCRIPTED
```
chmod +x commands.sh
./commands.sh
```