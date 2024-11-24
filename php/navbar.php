<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<nav>
    <div class="nav_logo">Légvonal</div>
    <ul class="nav_links">
        <li class="link"><a href="index.php">Kezdőoldal</a></li>
        <li class="link"><a href="contact.php">Kapcsolat</a></li>
        <li class="link"><a href="profile.php">Profil</a></li>
    </ul>
    <div class="btns">
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Ha be van jelentkezve, a Kijelentkezés gomb jelenik meg -->
            <a href="logout.php"><button class="btn">Kijelentkezés</button></a>
        <?php else: ?>
            <!-- Ha nincs bejelentkezve, a Bejelentkezés gomb jelenik meg -->
            <a href="login.php"><button class="btn">Bejelentkezés</button></a>
            <a href="registration.php"><button class="btn" id="reg">Regisztráció</button></a>
        <?php endif; ?>
    </div>
</nav>
