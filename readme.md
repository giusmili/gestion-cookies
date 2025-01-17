# 🚀gestion des cookies coté utilisateur
## 📝Fonctionnement
1. L'utilisateur est accueilli par une bannière de gestion des cookies.
2. Trois options sont proposées :

    * Accepter : Les cookies sont acceptés.
    * Refuser : Les cookies sont rejetés.
    * Personnaliser : Redirection vers une page pour configurer les cookies spécifiques.

> *Une fois un choix fait, un cookie est défini pour éviter de redemander*.
```php

    // Dans cet exemple on utilise le chainage optionnel à la place des formes conditionnelles classiques
    $_tab = ["nom" => "Doe", "prénom" => "John"];

    # Vérifie si "ville" n'existe pas ou sinon ajouter
    $_tab["ville"] ??= "Paris";

    print_r($_tab);


```
