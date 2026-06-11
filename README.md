# 🚀 Projet PHP Basique

Un projet PHP simple sans framework avec un système CRUD pour gérer les utilisateurs.

## 📋 Fonctionnalités

- ✅ Affichage des utilisateurs
- ✅ Ajouter un nouvel utilisateur
- ✅ Supprimer un utilisateur
- ✅ Utilisation de PDO pour sécuriser la base de données

## 📁 Structure

```
projet-php-basique/
├── config.php      # Connexion à la base de données
├── index.php       # Page d'accueil et liste des utilisateurs
├── add.php         # Ajouter un utilisateur
├── delete.php      # Supprimer un utilisateur
└── README.md       # Ce fichier
```

## 🗄️ Configuration de la base de données

### Créer la base de données

```sql
CREATE DATABASE ma_base;
USE ma_base;

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
```

### Configurer la connexion

Modifiez le fichier `config.php` avec vos identifiants :

```php
$host = 'localhost';
$db   = 'ma_base';        // Nom de votre base
$user = 'root';           // Utilisateur MySQL
$pass = '';               // Mot de passe
```

## 🚀 Installation

1. Clonez le dépôt
   ```bash
   git clone https://github.com/fatmamoussa/projet-php-basique.git
   cd projet-php-basique
   ```

2. Créez la base de données (voir ci-dessus)

3. Configurez `config.php` avec vos identifiants

4. Lancez un serveur PHP
   ```bash
   php -S localhost:8000
   ```

5. Ouvrez http://localhost:8000 dans votre navigateur

## 📝 Utilisation

- **Afficher les utilisateurs** : Accédez à la page d'accueil
- **Ajouter** : Remplissez le formulaire et cliquez sur "Ajouter"
- **Supprimer** : Cliquez sur 🗑️ à côté d'un utilisateur

## 🔒 Sécurité

- ✅ Utilisation de requêtes préparées (PDO)
- ✅ Échappement HTML avec `htmlspecialchars()`
- ✅ Validation de base des données

## 📚 Prochaines améliorations

- Ajouter la modification des utilisateurs
- Ajouter une validation plus robuste
- Ajouter un système d'authentification
- Ajouter des tests unitaires

---

**Créé par fatmamoussa** 💻