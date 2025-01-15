<?php
    # Vérification si un choix a été fait
    if (isset($_POST['cookie_choice'])) {
        $cookie_choice = $_POST['cookie_choice'];
        setcookie('Portfolio', $cookie_choice, time() + (365 * 24 * 60 * 60), "/"); # Cookie valide pendant 1 an
        if ($cookie_choice === 'customize') {
            header("Location: customize_cookies.php");
            exit();
        }
        header("Location: index.php");
        exit();
    }

    # Vérifie si un choix existe déjà
    $user_cookie_choice = $_COOKIE['Portfolio'] ?? null;