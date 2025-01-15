<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sauvegarde des paramètres personnalisés
    setcookie('analytics_cookies', $_POST['analytics'] ?? 'off', time() + (365 * 24 * 60 * 60), "/");
    setcookie('ads_cookies', $_POST['ads'] ?? 'off', time() + (365 * 24 * 60 * 60), "/");
    header("Location: index.php");
    exit();
}

include_once __DIR__ .'/route/header.inc.php'
?>

<body>
    <header>
        <h1 class="msg-primary">Personnalisez vos cookies</h1>
    </header>
<main>
    <div id="skill-section" role="region">
        <form method="post">
            <label>
                <input type="checkbox" name="analytics" value="on"> Cookies analytiques
            </label><br>
            <label>
                <input type="checkbox" name="ads" value="on"> Cookies publicitaires
            </label><br><br>
            <button type="submit" class="customize validate-primary">Enregistrer les paramètres</button>
        </form>
    </div>
</main>
</body>
</html>
