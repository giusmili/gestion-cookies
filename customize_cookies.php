<?php
include_once __DIR__ .'/controller/choice_cookie.php';

include_once __DIR__ .'/view/header.inc.php'
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
