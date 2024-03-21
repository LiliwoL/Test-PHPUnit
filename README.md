# PHP Unit - Les tests unitaires

[toc]

v0.1

---

# Pré-requis

Dans votre WSL, vous devez avoir installé PHP, git et Composer.

---

# Clone du projet

```bash
git clone 
```

> Vous devrez vous placer à la racine du projet.


## Installation de PHPUnit

```bash
composer require --dev phpunit/phpunit
```

# Installation des dépendances

```bash
composer install
```

# Lancer les tests

```bash
./vendor/bin/phpunit --color tests/
```

---

# Exercice 1

## Créer une classe `Calculator`

Créer une classe `Calculator` dans le fichier `src/Calculator.php`.

Cette classe doit comprendre les méthodes suivantes :
- addition
- soustraction
- division
- multiplication

## Créer les tests

Créer les tests unitaires pour la classe `Calculator` dans le fichier `tests/CalculatorTest.php`.

## Exemple de test

```php
public function testAddition()
{
    $calculator = new Calculator();
    $result = $calculator->addition(1, 2);
    $this->assertEquals(3, $result);
}
```
   
---

# Exercice 2

## Créer une classe `Person`

Créer une classe `Person` dans le fichier `src/Person.php`.

Cette classe doit comprendre les propriétés suivantes :
- nom
- prénom
- âge
- sexe
- adresse
- code postal
- ville
- pays
- téléphone
- email
- date de naissance
- date de création
- date de modification
- date de suppression
- date de dernière connexion

Cette classe doit contenir les getters et les setters correspondants.

---

## Créer les tests

Créer les tests unitaires pour la classe `Person` dans le fichier `tests/PersonTest.php`.

## Exemple de test

```php
public function testGetFullName()
{
    $person = new Person();
    $person->setNom('Doe');
    $person->setPrenom('John');
    $result = $person->getFullName();
    $this->assertEquals('John Doe', $result);
}
```