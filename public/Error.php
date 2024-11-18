<?php
    require __DIR__ . '/../vendor/autoload.php';

    // function diviser(int $a, int $b){
    //     if ($b === 0) {
    //         throw new Exception("Division par 0 impossible");
            
    //     }

    //     return 
    // }

   ### Exercice : Gestion d'un Système d'Achat avec Exceptions

// Dans cet exercice, vous allez créer un système simple pour gérer un achat en ligne, incluant des étapes pour vérifier la validité du produit, la disponibilité en stock et le traitement du paiement.

// Vous allez utiliser des exceptions pour gérer les erreurs possibles, avec une hiérarchie d'exceptions pour des erreurs spécifiques comme le produit indisponible ou le paiement refusé.

// ### Objectifs

// 1. **Création de classes d'exception** : Créez une hiérarchie d'exceptions pour différentes erreurs liées à l'achat.
// 2. **Utilisation des `try-catch`** : Gérez chaque exception de manière spécifique en utilisant des blocs `try-catch`.
// 3. **Conception orientée objet** : Utilisez des classes pour modéliser les entités (produits, système de paiement) et le processus d'achat.

// ---

// ### Étapes de l'Exercice

// #### 1. Créer les Classes d'Exception

// 1. Créez une classe de base `PurchaseException` pour toutes les exceptions liées aux achats.
// 2. Créez deux exceptions qui héritent de `PurchaseException` :
//    - **`OutOfStockException`** : lancée si le produit n'est pas en stock.
//    - **`PaymentDeclinedException`** : lancée si le paiement est refusé.
// 3. Créez une troisième exception **`InvalidProductException`** indépendante de `PurchaseException` pour les cas où un produit invalide est demandé.

// #### 2. Créer les Classes `Product` et `PaymentSystem`

// 1. **Classe `Product`** :
//    - Propriétés : `name` (nom du produit), `price` (prix du produit), `stock` (quantité en stock).
//    - Méthodes :
//      - `isAvailable()`: vérifie si le produit est en stock (quantité > 0).
//      - `purchase()`: décrémente la quantité en stock si le produit est disponible ; sinon, lance une `OutOfStockException`.

// 2. **Classe `PaymentSystem`** :
//    - Méthode `processPayment(float $amount)` : simule un paiement.
//      - Si `$amount` est supérieur à 1000, lance une `PaymentDeclinedException` (comme si la carte avait un plafond).
//      - Sinon, le paiement est accepté.

// #### 3. Créer la Fonction `processPurchase`

// La fonction `processPurchase` prend en paramètres un `Product` et un `PaymentSystem` et exécute les étapes suivantes :

// 1. **Vérification du produit** : Si le produit est invalide (par exemple, `$product` est `null`), lancez une `InvalidProductException`.
// 2. **Vérification de la disponibilité** : Utilisez `isAvailable()` pour vérifier si le produit est en stock. Si ce n'est pas le cas, lancez une `OutOfStockException`.
// 3. **Traitement de l'achat** : Si le produit est disponible, appelez `purchase()` pour réduire le stock.
// 4. **Traitement du paiement** : Utilisez `processPayment` avec le prix du produit. Si le paiement est refusé, une `PaymentDeclinedException` sera lancée.

// #### 4. Gestion des Exceptions

// Dans le code principal, utilisez un bloc `try-catch` pour appeler `processPurchase` et gérer chaque exception comme suit :

// 1. Si une `OutOfStockException` est lancée, affichez un message indiquant que le produit est en rupture de stock.
// 2. Si une `PaymentDeclinedException` est lancée, affichez un message indiquant que le paiement a été refusé.
// 3. Si une `InvalidProductException` est lancée, affichez un message indiquant que le produit n'est pas valide.
// 4. Utilisez un `catch` générique pour `PurchaseException` pour toute autre erreur liée aux achats. 