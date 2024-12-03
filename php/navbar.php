<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<script>

document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav_links");

    hamburger.addEventListener("click", function () {
        navLinks.classList.toggle("show");
    });
});

</script>
<nav>
    <div class="nav_container">
        <div class="nav_logo"><a href="index.php">Légvonal</a></div>
        <button class="hamburger" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <ul class="nav_links">
            <li class="link"><a href="index.php">Kezdőoldal</a></li>
            <li class="link"><a href="contact.php">Kapcsolat</a></li>
            <li class="link"><a href="profile.php">Profil</a></li>
        </ul>
        <div class="btns">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php"><button class="btn">Kijelentkezés</button></a>
            <?php else: ?>
                <a href="login.php"><button class="btn">Bejelentkezés</button></a>
                <a href="registration.php"><button class="btn" id="reg">Regisztráció</button></a>
            <?php endif; ?>
        </div>
    </div>
</nav>