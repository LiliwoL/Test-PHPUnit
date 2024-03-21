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


   