### Exercice : Calcul de réduction sur un achat

Vous devez écrire un script PHP qui calcule le montant final d'un achat après application d'une réduction, basée sur le montant initial de l'achat.

#### Consignes

1. **Créer une variable** `$montantAchat` et lui assigner une valeur numérique représentant le montant initial de l'achat (par exemple, 150).

2. **Déterminer la réduction à appliquer** en fonction du montant de l'achat :
   - Si le montant est **supérieur ou égal à 500**, appliquer une réduction de **20%**.
   - Si le montant est **supérieur ou égal à 200 mais inférieur à 500**, appliquer une réduction de **10%**.
   - Si le montant est **supérieur ou égal à 100 mais inférieur à 200**, appliquer une réduction de **5%**.
   - Si le montant est **inférieur à 100**, **aucune réduction** n'est appliquée.

3. **Calculer le montant de la réduction** et le **montant final** après réduction.

4. **Afficher les résultats** :
   - Afficher le montant initial.
   - Afficher le pourcentage de réduction appliqué.
   - Afficher le montant de la réduction.
   - Afficher le montant final après réduction.

#### Exemple de sortie

Si `$montantAchat = 250`, le script devrait afficher :

```
Montant initial de l'achat : 250
Pourcentage de réduction appliqué : 10%
Montant de la réduction : 25
Montant final après réduction : 225
```

#### Notes

- Testez votre script avec différents montants pour vérifier que les bonnes réductions sont appliquées.
- Pensez à utiliser les conditions `if`, `elseif`, et `else` pour déterminer la réduction.