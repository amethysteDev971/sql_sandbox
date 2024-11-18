Exercice : Les différents types de jointures SQL avec deux tables
#### Contexte
Vous gérez une base de données pour un système de suivi des commandes dans un magasin. Vous disposez de deux tables :

Customers : contient la liste des clients du magasin.
Orders : contient la liste des commandes passées par les clients.

Structure des tables et données
Customers

| customer_id | name         |
|-------------|--------------|
| 1           | Alice Martin |
| 2           | Bob Durand   |
| 3           | Clara Duval  |
| 4           | David Roger  |

Orders

| order_id | customer_id | product         | quantity |
|----------|-------------|-----------------|----------|
| 101      | 1           | Télévision      | 1        |
| 102      | 1           | Réfrigérateur   | 1        |
| 103      | 2           | Lave-vaisselle  | 1        |
| 104      | 3           | Machine à laver | 1        |

Instructions
Écrivez des requêtes SQL pour obtenir les résultats suivants en utilisant des jointures différentes.


Récupérez la liste des clients qui ont passé au moins une commande. Affichez leur nom, l’ID de la commande, le produit, et la quantité.

- voici les deux requêtes que j'ai effectués, affiches plusieurs fois les resultats
car je ne donne pas vraiment de conditions sur mon `ON`
```sql
SELECT c.name, c.customer_id, o.product, o.quantity
FROM customers AS c
INNER JOIN orders AS o
ON o.customer_id

SELECT c.name, o.customer_id, o.product, o.quantity
FROM orders AS o
INNER JOIN customers AS c
ON o.customer_id;
```
- `INNER JOIN`
- `voici la bonne requête` :
```sql
SELECT c.name, o.customer_id, o.product, o.quantity
FROM orders AS o
INNER JOIN customers AS c
ON o.customer_id = c.customer_id;
```



- Récupérez la liste de tous les clients et les commandes qu'ils ont passées, y compris ceux qui n'ont pas passé de commande. Affichez leur nom, l’ID de la commande, le produit, et la quantité. Les champs de commande doivent être vides pour les clients sans commande.
```sql
SELECT c.name, o.customer_id, o.product, o.quantity
FROM customers AS c
LEFT JOIN orders AS o
ON c.customer_id = o.customer_id;
```
<img src="./assets/md/Capture d’écran 2024-10-28 à 10.37.27.png">


Récupérez la liste de toutes les commandes et des clients associés, même si certains clients n'existent plus. Affichez l'ID de la commande, le produit, la quantité et le nom du client (si disponible).

- `Ma requête :`
- `RIGHT JOIN`
```sql
SELECT o.id id_commande, o.product, o.quantity, c.name
FROM customers AS c
RIGHT JOIN orders AS o
ON c.customer_id = o.customer_id;
```
<img src="./assets/md/Capture d’écran 2024-10-28 à 11.49.26.png">

4.
   Récupérez une liste complète des clients et des commandes, affichant les informations pour chaque client ou commande, même s'il n'y a pas de correspondance.

```sql
SELECT * FROM customers CROSS JOIN orders ON orders.customer_id = customers.customer_id;
```

Écrivez des requêtes SQL pour obtenir les résultats suivants en utilisant les clauses GROUP BY,  HAVING et les fonctions d'agrégation COUNT, SUM, AVG, MIN, MAX.

Calculer le nombre total de commandes passées par chaque client.
Affichez le nom du client et le nombre total de commandes.
```sql
SELECT c.name, COUNT(o.amont) nombre_commande
FROM orders o
INNER JOIN customers c ON o.customer_id = c.customer_id
GROUP BY c.name;
```

Calculer le montant total des commandes pour chaque client.
Affichez le nom du client et le montant total des commandes.
```sql
-- SELECT c.name, SUM(o.amont) total_amont
-- FROM orders o
-- INNER JOIN customers c ON o.customer_id = c.customer_id
-- GROUP BY c.name;
SELECT c.name, SUM(o.amont) total_amont
FROM customers c
LEFT JOIN orders o ON o.customer_id = c.customer_id
GROUP BY c.name;
```

Trouver le montant moyen des commandes passées par chaque client.
Affichez le nom du client et le montant moyen de ses commandes.
```sql
SELECT c.name, AVG(o.amont) total_amont_moyenne
FROM orders o
INNER JOIN customers c ON o.customer_id = c.customer_id
GROUP BY c.name;
```

Déterminer le montant minimum et maximum des commandes passées par chaque client.
Affichez le nom du client, le montant minimum et maximum de ses commandes.
```sql
SELECT c.name, MIN(o.amont) min_amount, MAX(o.amont) max_amont
FROM orders o
INNER JOIN customers c ON o.customer_id = c.customer_id
GROUP BY c.name;
```


Trouver le nombre total de commandes, le montant total, le montant moyen, le montant minimum et maximum des commandes.
```sql
SELECT COUNT(o.id) nbr_order, SUM(o.amont) * o.quantity total_order, AVG(o.amont) moyenne_order, MIN(o.amont) min_amount, MAX(o.amont) max_amount
FROM orders o
LEFT JOIN customers c ON c.customer_id = o.customer_id;
```

Pour chaque client, afficher le nombre de produits différents commandés, le montant total, moyen, minimum et maximum de ses commandes.

Identifier les clients ayant dépensé plus de 1000 € au total.
Affichez leur nom et le montant total dépensé.

Trouver les produits dont le montant total des ventes est inférieur à 1000 €.
Affichez le nom du produit et le montant total des ventes.

Calculer le montant moyen des commandes pour l'ensemble des clients, puis afficher les clients dont le montant moyen des commandes est supérieur à cette moyenne globale.
Affichez leur nom et leur montant moyen des commandes.