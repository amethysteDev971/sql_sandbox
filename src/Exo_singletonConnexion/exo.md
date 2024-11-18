### Exercice Pratique : Gestion de Configuration et Connexion à une Base de Données avec Singleton

Dans cet exercice, vous allez créer une classe `Configuration` en utilisant le pattern Singleton pour centraliser les paramètres de configuration d'une application. Ensuite, vous utiliserez cette classe dans une autre classe, `DatabaseConnection`, pour gérer la connexion à une base de données en récupérant les paramètres de connexion depuis `Configuration`.

L’objectif est de comprendre comment utiliser le Singleton pour accéder à des paramètres de configuration dans toute l'application, et de voir comment une configuration centralisée peut simplifier la gestion de composants dépendants, comme une connexion à la base de données.

---

### Étapes de l'Exercice

#### 1. Création de la Classe `Configuration`

1. Implémentez une classe `Configuration` qui utilise le pattern Singleton pour garantir qu'une seule instance de la configuration est chargée et accessible.
2. Dans le constructeur de `Configuration`, chargez les paramètres de configuration à partir d’un fichier `config.ini`.
3. Ajoutez une méthode `get(string $key): ?string` qui permettra d’accéder aux paramètres par clé. Vous utiliserez une notation pointée (par exemple, `database.host`) pour accéder aux sous-sections du fichier de configuration.

#### 2. Création du Fichier `config.ini`

Dans le même répertoire que votre script, créez un fichier `config.ini` avec les informations de configuration suivantes :

```ini
[database]
host = localhost
username = root
password = example
dbname = my_database

[app]
debug = true
```

> **Remarque** : Adaptez les valeurs de `host`, `username`, `password`, et `dbname` selon votre propre configuration de base de données locale.

#### 3. Création de la Classe `DatabaseConnection`

La classe `DatabaseConnection` va utiliser `Configuration` pour accéder aux paramètres de connexion à la base de données et établir une connexion PDO.

1. Dans le constructeur, récupérez les paramètres de connexion (hôte, nom de base de données, nom d'utilisateur, et mot de passe) via `Configuration::getInstance()`.
2. Utilisez ces paramètres pour créer une connexion PDO avec la base de données spécifiée.
3. Ajoutez une méthode `getConnection()` qui retourne l’instance PDO.
4. Gérez les erreurs de connexion en attrapant les exceptions PDO et en affichant un message d'erreur en cas d'échec de connexion.

---

### Exemple de Code pour `DatabaseConnection`

```php
<?php

class DatabaseConnection
{
    private \PDO $connection;

    public function __construct()
    {
        $config = Configuration::getInstance();

        $host = $config->get("database.host");
        $dbname = $config->get("database.dbname");
        $username = $config->get("database.username");
        $password = $config->get("database.password");

        try {
            $this->connection = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function getConnection(): \PDO
    {
        return $this->connection;
    }
}
```

---

### 4. Tester la Connexion à la Base de Données

Dans un fichier de test, créez une instance de `DatabaseConnection` et récupérez une connexion PDO. Utilisez cette connexion pour exécuter une requête simple (par exemple, `SELECT * FROM users`) et afficher les résultats. Assurez-vous que les paramètres de connexion sont bien chargés via la classe `Configuration` et que la connexion s’établit sans erreur.

---

### Critères d’Évaluation

1. **Singleton correctement implémenté** : La classe `Configuration` est correctement implémentée en Singleton, avec un constructeur privé et une méthode `getInstance()` qui garantit une instance unique.
2. **Chargement et accès aux paramètres** : Les paramètres sont chargés depuis le fichier `config.ini` et accessibles via la méthode `get`.
3. **Connexion à la base de données** : La classe `DatabaseConnection` utilise `Configuration` pour récupérer les informations de connexion et les appliquer à une connexion PDO.
4. **Gestion des erreurs** : La classe `DatabaseConnection` gère les exceptions PDO et affiche un message approprié si la connexion échoue.

---

### Pour Aller Plus Loin

1. **Ajouter une méthode `set(string $key, string $value): void`** dans `Configuration` pour mettre à jour temporairement des paramètres (sans enregistrer ces changements dans le fichier `config.ini`).
2. **Rechargement des paramètres** : Implémentez une méthode `reload()` dans `Configuration` pour recharger les paramètres à partir de `config.ini`.

Cet exercice vous permettra de mieux comprendre l'importance de centraliser les configurations dans une application, et d'apprendre comment faciliter l’accès aux paramètres de configuration dans différents composants.