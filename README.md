# Pokemon-BDD
> Base de données PostgreSQL des pokémons de la première génération à fins pédagogiques

---

## Comment l'utiliser
### Avec le SGBD Postgres
Importation et connection:
```bash
psql -d nom_base -f bdd/pokemon.sql
psql nom_base
```
Sélection:
```sql
nom_base=# SELECT * FROM pokemon WHERE id_pok = 4;
 id_pok |  nom_pok   
--------+------------
      4 | Salameche
(1 row)
```

### Avec le framework PHP Laravel 
En utilisant l'outil Tinker:
```bash
cd web
composer install
php artisan tinker
```
et le modèle Eloquent de Laravel:
```php
>>> App\Pokemon::first();
 => App\Pokemon {
     id_pok: 1,
     nom_pok: "Bulbizarre",
   }

```
