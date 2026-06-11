-- Créer la base de données
CREATE DATABASE IF NOT EXISTS ma_base;
USE ma_base;

-- Créer la table utilisateurs
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insérer des données de test (optionnel)
INSERT INTO utilisateurs (nom, email) VALUES
('Ali Ahmed', 'ali@example.com'),
('Fatma Moussa', 'fatma@example.com'),
('Mohamed Hassan', 'mohamed@example.com');