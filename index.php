<?php
require 'config.php';

$users = $pdo->query("SELECT * FROM utilisateurs")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion Utilisateurs</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        ul { list-style: none; padding: 0; }
        li { padding: 10px; background: #f0f0f0; margin: 5px 0; border-radius: 5px; }
        a { margin-left: 10px; text-decoration: none; }
        input { padding: 8px; margin: 5px; }
        button { padding: 8px 15px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1>📋 Liste des utilisateurs</h1>
    
    <?php if (empty($users)): ?>
        <p>Aucun utilisateur pour le moment.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <strong><?= htmlspecialchars($user['nom']) ?></strong> - <?= htmlspecialchars($user['email']) ?>
                    <a href="delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Êtes-vous sûr ?')">🗑️ Supprimer</a>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

    <h2>➕ Ajouter un utilisateur</h2>
    <form method="post" action="add.php">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>