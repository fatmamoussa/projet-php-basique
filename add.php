<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nom']) && !empty($_POST['email'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email) VALUES (?, ?)");
    $stmt->execute([$nom, $email]);
}

header('Location: index.php');
exit();
?>