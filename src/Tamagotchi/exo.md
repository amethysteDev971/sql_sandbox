Bien sûr ! Voici l'énoncé de l'exercice pour vos élèves :

---

# Exercice PHP : Tamagotchi Virtuel

## Contexte

Dans cet exercice, vous allez créer un **Tamagotchi virtuel** en PHP. Un Tamagotchi est un petit animal virtuel qui nécessite des soins : vous pouvez le nourrir, jouer avec lui, le faire dormir, etc. Si le Tamagotchi est trop fatigué ou a trop faim, il devient moins heureux, et il peut même tomber malade ! L’objectif de cet exercice est de gérer l’énergie et la faim de plusieurs Tamagotchis en créant un programme PHP utilisant des concepts orientés objet, des interfaces, des exceptions, et des boucles.

## Objectifs de l'exercice

1. **Créer une classe `Tamagotchi`** qui représente un animal virtuel avec des propriétés d’énergie et de faim.
2. **Définir des types de Tamagotchis** (par exemple, `Chien`, `Chat`, `Poisson`), chacun avec ses propres actions spécifiques.
3. **Implémenter des actions** pour interagir avec les Tamagotchis, comme jouer, manger, dormir, et des actions spécifiques comme aboyer ou miauler.
4. **Gérer les exceptions** si un Tamagotchi ne peut pas réaliser une action. Dans ce cas, une **action alternative** doit être exécutée (repos pour récupérer de l’énergie).
5. **Utiliser des boucles** pour faire en sorte que chaque Tamagotchi réalise des actions répétées jusqu’à épuisement de son énergie ou augmentation excessive de sa faim.

## Instructions

1. **Classe `Tamagotchi` (Classe Abstraite)** :
   - Créez une classe abstraite `Tamagotchi` avec les propriétés suivantes :
     - `name` : le nom du Tamagotchi.
     - `type` : le type de Tamagotchi (par exemple, `Chien`, `Chat`, `Poisson`).
     - `energy` : l’énergie du Tamagotchi, qui commence à 100 et diminue après chaque action.
     - `hunger` : la faim du Tamagotchi, qui commence à 0 et augmente après certaines actions.
   - Ajoutez une méthode abstraite `performAction($action)` pour permettre aux Tamagotchis de réaliser des actions.
   - Ajoutez une méthode `rest()` qui agit comme une action alternative, permettant au Tamagotchi de récupérer 10 points d’énergie.

2. **Types de Tamagotchis** :
   - Créez des classes dérivées de `Tamagotchi` comme `DogTamagotchi`, `CatTamagotchi`, et `FishTamagotchi`, chacune ayant des règles spécifiques.
   - Exemple :
     - Un `DogTamagotchi` peut jouer, manger, dormir, et aboyer.
     - Un `CatTamagotchi` peut jouer, manger, dormir, et miauler.
     - Un `FishTamagotchi` peut nager, manger, et dormir.
   - À chaque action, l’énergie diminue et la faim augmente (par exemple, jouer diminue l’énergie de 10 et augmente la faim de 5).

3. **Interface `ActionInterface`** :
   - Créez une interface `ActionInterface` avec les méthodes :
     - `getEnergyCost()` : retourne le coût énergétique de l’action.
     - `getHungerIncrease()` : retourne la quantité de faim générée par l’action.

4. **Classe `Action`** :
   - Créez une classe `Action` implémentant `ActionInterface` avec des actions comme `Play`, `Eat`, `Sleep`, et des actions spécifiques comme `Bark` (aboyer) et `Meow` (miauler).
   - Chaque action a un coût d’énergie et augmente la faim de façon différente, et certaines actions sont réservées à des types spécifiques de Tamagotchis.

5. **Gestion des Exceptions et Action Alternative** :
   - Créez une exception personnalisée `InvalidActionException` qui sera déclenchée si :
     - Un Tamagotchi essaie de réaliser une action non compatible avec son type.
     - Le Tamagotchi n’a pas assez d’énergie pour l’action.
   - Lorsque cette exception est déclenchée, le Tamagotchi exécute automatiquement l’action `rest()` pour récupérer de l’énergie. Affichez un message pour indiquer qu’une action alternative a été exécutée.

6. **Classe `TamagotchiGarden`** :
   - Créez une classe `TamagotchiGarden` qui contient une liste de Tamagotchis.
   - Ajoutez une méthode `performActions($actions)` qui exécute une liste d’actions sur chaque Tamagotchi. Si une action échoue, elle doit être remplacée par l’action `rest()`.

7. **Simulation avec Boucles** :
   - Ajoutez plusieurs Tamagotchis dans le jardin virtuel et faites-les réaliser des actions en boucle.
   - Arrêtez les actions si l’énergie descend en dessous de 20 ou si la faim atteint 50 (à ce moment-là, le Tamagotchi doit être nourri).

## Exemple de rendu attendu

1. **Affichage de l’état initial** :
   ```
   Tamagotchi : Rex (Chien) - Énergie : 100 - Faim : 0
   Tamagotchi : Minou (Chat) - Énergie : 100 - Faim : 0
   ```

2. **Exécution des actions** :
   ```
   Rex joue, perd 10 points d’énergie, gagne 5 points de faim. Énergie : 90, Faim : 5
   Rex mange, gagne 5 points d’énergie, faim réduite de 20. Énergie : 95, Faim : 0
   Rex aboie, mais l’énergie est insuffisante. Action de repos exécutée. Énergie : 105

   Minou miaule, perd 5 points d’énergie, faim reste la même. Énergie : 95, Faim : 0
   Minou joue, mais cette action n’est pas compatible. Action de repos exécutée. Énergie : 105
   ```

3. **Fin de la simulation** :
   ```
   Rex est trop fatigué et doit se reposer.
   Minou a trop faim et doit être nourri.
   ```

## Bonus

- Ajoutez une méthode `recover()` pour aider les Tamagotchis épuisés à se rétablir.
- Créez une boucle pour vérifier régulièrement l’état de chaque Tamagotchi et arrêtez la simulation si tous les Tamagotchis sont épuisés ou affamés.

## Objectifs pédagogiques

Cet exercice vous permettra de pratiquer :
- Les concepts d’orienté objet : classes, héritage, interfaces.
- La gestion des erreurs et les exceptions avec des actions alternatives.
- L’utilisation des boucles pour des actions répétées et des vérifications d’états.

---

Cet exercice est un excellent moyen de simuler un petit jeu en PHP tout en intégrant des fonctionnalités pratiques de programmation. Bonne chance !