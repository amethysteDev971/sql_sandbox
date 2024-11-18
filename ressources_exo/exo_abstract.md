Bien sûr ! Voici l'énoncé complet de l'exercice, sans référence aux échanges précédents.

---

### Exercice : Gestion de Documents avec Classe Abstraite

Dans cet exercice, tu vas créer un système de gestion de documents pour une entreprise. L'entreprise utilise différents types de documents, chacun ayant des exigences spécifiques en termes de contenu et de préparation. Tu vas structurer ce système en utilisant une classe abstraite pour définir les comportements de base, tout en laissant chaque type de document définir ses propres particularités.

---

#### Objectifs

1. Utiliser une classe abstraite pour regrouper les propriétés et méthodes communes des documents.
2. Créer des méthodes concrètes pour partager des comportements entre les documents.
3. Créer deux méthodes abstraites pour que chaque type de document puisse les implémenter différemment en fonction de ses besoins.

---

#### Consignes

1. **Classe abstraite `Document`** :
   - Crée une classe abstraite `Document` qui représente la base de tous les documents de l'entreprise.
   - Ajoute les propriétés suivantes :
     - `$title` (string) : le titre du document.
     - `$content` (string) : le contenu du document.
     - `$author` (string) : l’auteur du document.
     - `$createdAt` (DateTime) : la date de création du document, initialisée automatiquement à la création de l'instance.

   - Ajoute un **constructeur** dans `Document` qui initialise les propriétés `$title`, `$content`, et `$author`.

   - Ajoute les **méthodes concrètes** suivantes :
     - `getSummary()` : cette méthode doit retourner un extrait des 50 premiers caractères du contenu du document, suivi de "...".
     - `printDetails()` : cette méthode affiche les informations de base du document (titre, auteur, date de création, et résumé du contenu en utilisant `getSummary()`).
     - `save()` : cette méthode simule la sauvegarde du document (par exemple, dans une base de données) en affichant un message indiquant que le document a été sauvegardé.

   - Ajoute deux **méthodes abstraites** :
     - `generate()` : cette méthode sera utilisée pour structurer le contenu du document (par exemple, en ajoutant une introduction et une conclusion).
     - `prepare()` : cette méthode sera utilisée pour appliquer des préparations spécifiques à chaque type de document (par exemple, ajouter une page de garde pour un rapport, des signatures pour un contrat, etc.).

2. **Classes dérivées `Report`, `Contract`, et `Presentation`** :
   - Crée trois classes dérivées (`Report`, `Contract`, et `Presentation`) qui héritent de la classe abstraite `Document`.
   
   - **Report** :
     - Implémente la méthode `generate()` pour structurer le rapport avec un en-tête, le corps du contenu, et une conclusion.
     - Implémente la méthode `prepare()` pour ajouter une page de garde et vérifier le format du rapport.
   
   - **Contract** :
     - Implémente la méthode `generate()` pour structurer le contrat avec une section pour les conditions générales et une section pour les clauses spécifiques.
     - Implémente la méthode `prepare()` pour ajouter un espace pour les signatures et vérifier les clauses.

   - **Presentation** :
     - Implémente la méthode `generate()` pour structurer la présentation en plusieurs diapositives (par exemple, en ajoutant une introduction, le contenu principal, et une conclusion).
     - Implémente la méthode `prepare()` pour ajouter une page de couverture et organiser les diapositives.

3. **Affichage des informations et tests** :
   - Crée une instance de chaque type de document avec des informations fictives (titre, contenu, auteur).
   - Appelle les méthodes `generate()` et `prepare()` pour structurer et préparer chaque document.
   - Affiche les informations de chaque document en utilisant la méthode `printDetails()`.
   - Simule la sauvegarde de chaque document en appelant la méthode `save()`.

---

#### Exemple de Code (si besoin d'inspiration)

Voici un exemple pour te donner une idée de la structure générale de la classe abstraite `Document`. **Remarque : l'implémentation complète est laissée à toi !**

```php
<?php

abstract class Document {
    protected $title;
    protected $content;
    protected $author;
    protected $createdAt;

    public function __construct($title, $content, $author) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->createdAt = new DateTime();
    }

    public function getSummary() {
        return substr($this->content, 0, 50) . '...';
    }

    public function printDetails() {
        echo "Titre : $this->title\n";
        echo "Auteur : $this->author\n";
        echo "Créé le : " . $this->createdAt->format('Y-m-d') . "\n";
        echo "Résumé : " . $this->getSummary() . "\n";
    }

    public function save() {
        echo "Le document '$this->title' a été sauvegardé.\n";
    }

    abstract public function generate();
    abstract public function prepare();
}
```

---

#### Objectif pédagogique

Cet exercice te permet de comprendre comment structurer un code avec une classe abstraite qui définit des comportements communs (méthodes concrètes) tout en obligeant chaque sous-classe à implémenter ses propres méthodes pour des besoins spécifiques (méthodes abstraites). 

Bonne chance, et amuse-toi à structurer et gérer ces documents !