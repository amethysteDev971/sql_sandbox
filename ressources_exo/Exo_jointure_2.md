Écrivez des requêtes SQL pour obtenir les résultats suivants en utilisant les clauses GROUP BY,  HAVING et les fonctions d'agrégation COUNT, SUM, AVG, MIN, MAX.

Calculer le nombre total de commandes passées par chaque client.
Affichez le nom du client et le nombre total de commandes.
```sql
SELECT c.name, COUNT(c.id) nb_commande
FROM orders o
LEFT JOIN customers c ON c.id = o.customers_id
GROUP BY c.id;
```

Calculer le montant total des commandes pour chaque client.
Affichez le nom du client et le montant total des commandes.
````sql
SELECT c.name, p.name, p.price, o.quantity, (p.price * o.quantity) AS TOTAL
FROM customers c
INNER JOIN orders o ON o.customers_id = c.id
INNER JOIN product p ON p.id = o.product_id
GROUP BY c.id;
```

````sql
SELECT c.name, SUM(p.price * o.quantity) AS TOTAL_AMOUNT
FROM customers c
LEFT JOIN orders o ON o.customers_id = c.id
LEFT JOIN product p ON p.id = o.product_id
GROUP BY c.id;
```

Trouver le montant moyen des commandes passées par chaque client.
Affichez le nom du client et le montant moyen de ses commandes.
````sql
SELECT c.name, AVG(p.price * o.quantity) AS AVG_AMOUNT
FROM customers c
LEFT JOIN orders o ON o.customers_id = c.id
LEFT JOIN product p ON p.id = o.product_id
GROUP BY c.id;
````

Déterminer le montant minimum et maximum des commandes passées par chaque client.
Affichez le nom du client, le montant minimum et maximum de ses commandes.
````sql
SELECT c.name, MIN(p.price * o.quantity) AS MIN_ORDERS_AMOUNT, MAX(p.price * o.quantity) AS MAX_ORDERS_AMOUNT
FROM customers c
LEFT JOIN orders o ON o.customers_id = c.id
LEFT JOIN product p ON p.id = o.product_id
GROUP BY c.id;
````

Trouver le nombre total de commandes, le montant total, le montant moyen, le montant minimum et maximum des commandes.
````sql
SELECT COUNT(o.id) AS total_commandes ,SUM(p.price * o.quantity) AS total_commandes, AVG(p.price * o.quantity) AS mont_moyen
FROM orders o
LEFT JOIN customers c ON c.id = o.customers_id
LEFT JOIN product p ON p.id = o.product_id;
````

Pour chaque client, afficher le *[nombre de produits différents] commandés, le montant total, moyen, minimum et maximum de ses commandes.
* voir DISTINCT
````sql
SELECT 
    c.name as 'client',
    COUNT(DISTINCT(p.id)) as 'different',
    SUM(o.quantity * p.price) as 'total SUM',
    AVG(o.quantity * p.price) as 'total AVG',
    MIN(o.quantity * p.price) as 'total MIN',
    MAX(o.quantity * p.price) as 'total MAX'
FROM customers c
INNER JOIN orders o ON o.customers_id = c.id
INNER JOIN product p ON p.id = o.product_id
GROUP BY c.id;
````

Identifier les clients ayant dépensé plus de 2000 € au total.
Affichez leur nom et le montant total dépensé.
````sql
SELECT 
    c.name as 'client',
    SUM(o.quantity * p.price) as 'total SUM'
FROM customers c
INNER JOIN orders o ON o.customers_id = c.id
INNER JOIN product p ON p.id = o.product_id
GROUP BY c.id
HAVING SUM(o.quantity * p.price) > 2000;
````

Calculer le montant moyen des commandes pour l'ensemble des clients, puis afficher les clients dont le montant moyen des commandes est supérieur à cette moyenne globale.
Affichez leur nom et leur montant moyen des commandes.

````sql
SELECT AVG(p.price * o.quantity) 
FROM `orders`o
INNER JOIN product p ON p.id = o.product_id;
````

2ème requête
````sql
SELECT c.id, c.name,p.price, o.quantity, (p.price * o.quantity) AS TOTAL
FROM customers c
INNER JOIN orders o ON o.customers_id = c.id
INNER JOIN product p ON o.product_id = p.id;
````

3ème requete
````sql

SELECT c.id, c.name, AVG(p.price * o.quantity) AS Moyenne
FROM customers c
INNER JOIN orders o ON o.customers_id = c.id
INNER JOIN product p ON o.product_id = p.id
GROUP BY c.id;
````

Requête final
````sql
SELECT c.id, c.name, AVG(p.price * o.quantity) AS Moyenne
FROM customers c
INNER JOIN orders o ON o.customers_id = c.id
INNER JOIN product p ON o.product_id = p.id
GROUP BY c.id
HAVING AVG(p.price * o.quantity) > 1200;
````

Requête optimisée
````sql
SELECT c.id, c.name, AVG(p.price * o.quantity) AS 'MOYENNE'
FROM customers c
INNER JOIN orders o ON o.customers_id = c.id
INNER JOIN product p ON o.product_id = p.id
GROUP BY c.id
HAVING AVG(p.price * o.quantity) > (SELECT AVG(p.price * o.quantity) FROM `orders`o INNER JOIN product p ON p.id = o.product_id);
````