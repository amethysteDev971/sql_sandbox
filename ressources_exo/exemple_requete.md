
Exemple : Table de jointure orders (id, id_user,id_pro,createdAtDate)


-> selectionne les users dont le prenom commence strictement par dru et finis par n'importe quoi

SELECT users.prenom,produits.nom, orders.createdAtDate
FROM orders
JOIN users ON users.id = orders.id_user
JOIN produits ON produits.id = orders.id_pro
WHERE users.prenom like 'dru%';


-> selectionne les users dont le prenom commence strictement par dru et finis par n'importe quoi
    ou dont la date de naissance est après le 1er janvier 1990

SELECT users.prenom,produits.nom, orders.createdAtDate
FROM orders
JOIN users ON users.id = orders.id_user
JOIN produits ON produits.id = orders.id_pro
WHERE users.prenom like 'dru%' OR users.naissance < '1990-01-01';


-> attribut comme un tag au nom d'une colonne

SELECT users.prenom,produits.nom AS nom_produit, orders.createdAtDate
FROM orders
JOIN users ON users.id = orders.id_user
JOIN produits ON produits.id = orders.id_pro
WHERE users.prenom like 'dru%' OR users.naissance < '1990-01-01';


-> Contrainte dans la requete, selectionner tous les users de moins de 45 ans avec WHERE users.naissance > DATE_SUB(NOW(), INTERVAL 45 YEAR);

SELECT users.prenom,produits.nom AS nom_produit, orders.createdAtDate,users.naissance AS dateNaissance
FROM orders
JOIN users ON users.id = orders.id_user
JOIN produits ON produits.id = orders.id_pro
WHERE users.naissance > DATE_SUB(NOW(), INTERVAL 45 YEAR);

