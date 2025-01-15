<?php if (!$user_cookie_choice): ?>
        <div class="cookie-banner" role="region">
            <p>
                Ce site utilise des cookies pour améliorer votre expérience. Vous pouvez accepter, refuser ou personnaliser vos paramètres.
            </p>
            <form method="post">
                <button name="cookie_choice" value="accept" class="accept">Accepter</button>
                <button name="cookie_choice" value="reject" class="reject">Refuser</button>
                <button name="cookie_choice" value="customize" class="customize">Personnaliser</button>
            </form>
        </div>
    <?php endif; ?>