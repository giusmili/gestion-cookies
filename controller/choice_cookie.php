<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sauvegarde des paramètres personnalisés

        setcookie('analytics_cookies', $_POST['analytics'] ?? 'off', time() + (365 * 24 * 60 * 60), "/");
        setcookie('ads_cookies', $_POST['ads'] ?? 'off', time() + (365 * 24 * 60 * 60), "/");
        header("Location: index.php");
        exit();
    }