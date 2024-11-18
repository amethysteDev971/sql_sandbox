
### Énoncé de l'exercice complet

#### 1. **Créer une base de données** :
   - Crée une base de données nommée `company_db`.

#### 2. **Utiliser la base de données** :
   - Sélectionne la base de données `company_db` pour y travailler.

#### 3. **Créer une table** :
   - Crée une table `employees` avec les colonnes suivantes :
     - `id` : Identifiant unique (clé primaire, auto-incrément).
     - `name` : Nom de l'employé.
     - `position` : Poste de l'employé dans l'entreprise.
     - `salary` : Salaire de l'employé (en décimal).
     - `department` : Département où travaille l'employé.

#### 4. **Insérer des données** :
   - Insère au moins 5 enregistrements dans la table `employees` avec des informations fictives (nom, poste, salaire, département).

#### 5. **Modifier un enregistrement spécifique** :
   - Modifie le salaire d'un employé spécifique (par exemple, `John Doe`) et mets-le à jour avec un nouveau salaire.

#### 6. **Lister des enregistrements avec des conditions imbriquées** :
   - Affiche tous les employés qui travaillent soit dans le département `IT` ou `Marketing` **et** qui ont un salaire supérieur à `45000`.

    - Ma requête :
    
```sql
SELECT employees.name, employees.department, employees.salary
FROM employees
WHERE 
	(employees.department LIKE 'IT' OR employees.department LIKE 'Marketing')
    AND employees.salary > 45000;

```

- moyenne avec AVG()
```sql
SELECT AVG(salary) FROM employees;
```

- Dans mon cas, il n'y a aucun resultats retourné car aucun salarié n'a un salaire de plus de `45000`.

#### 7. **Lister des enregistrements sous conditions multiples** :
   - Affiche les employés qui :
     - Travaillent soit dans le département `IT` ou `HR`.
     - Ont un salaire supérieur à `48000` **ou** occupent un poste de `Marketing Manager`.

```sql
SELECT employees.name, employees.position, employees.department, employees.salary
FROM employees
WHERE 
	((employees.department LIKE 'IT' 
    OR employees.department LIKE 'RH')
    AND employees.salary > 48000)
    OR employees.position LIKE 'Marketing Manager';

```
- me retourne un résultat dans ma base : la condition où l'employé est `Marketing Manager`.
---

### Nouvelle section ajoutée :

#### 8. **Modification groupée selon des conditions** :
   - Mets à jour en masse les salaires des employés selon les conditions suivantes :
     - Tous les employés travaillant dans le département `IT` **et** ayant un salaire inférieur à `50000` verront leur salaire augmenté de `10%`.
     - Tous les employés du département `Marketing` qui occupent un poste de `Designer` auront un bonus salarial de `5000`.

Exemple de commande SQL pour la première condition (augmentation de 10%) :

```sql
UPDATE employees
SET salary = salary * 1.10
WHERE department = 'IT' AND salary < 50000;
```

Exemple de commande SQL pour la deuxième condition (bonus de 5000) :

```sql
UPDATE employees
SET salary = salary + 5000
WHERE department = 'Marketing' AND position = 'Designer';
```

---

N'oublie pas de bien vérifier les enregistrements avant et après les modifications groupées pour t'assurer que les changements ont bien été appliqués. Utilise des requêtes `SELECT` pour observer les résultats avant et après les modifications.


```sql

UPDATE employees
SET employees.salary = employees.salary * 1.10
WHERE 
	(employees.department LIKE 'IT' AND employees.salary < 5000);

```


```sql
UPDATE employees
SET employees.salary =+ 5000
WHERE (employees.department LIKE 'Marketing' AND employees.position LIKE 'Designer');
```