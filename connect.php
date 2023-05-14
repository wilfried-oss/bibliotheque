<?php
// Chemin vers le fichier de la base de données SQLite
$database_file = '/var/www/html/tests/bibliotheque/waly.sqlite';

// Connexion à la base de données SQLite avec PDO
try {
    $db = new PDO("sqlite:" . $database_file);
    // Configurer le mode de rapport d'erreurs pour les erreurs PDO
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données SQLite.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
