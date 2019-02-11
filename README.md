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

### Template
- Créer ```templates/pages/new-page.html.twig```
```
    {% extends 'base.html.twig' %}

    {% block title %}New Page{% endblock %}

    {% block main %}
    <div class="container marketing mt-5">
        <h1>New Opage</h1>
    </div>
    {% endblock %}

    {% block stylesheets %}
        {{ parent() }}
        {{ encore_entry_link_tags('new-page') }}
    {% endblock %}
```

### Webpack
```
    .addEntry('new-page', './assets/js/new-page.js')
```

### JS
- Créer ```assets/js/new-page.js```
```
import '../css/new-page.scss';
```

### CSS
- Créer ```assets/css/new-page.scss```


Relancer la commande ```yarn run encore dev --watch```
