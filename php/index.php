<?php
session_start(); // Session indítása
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <title>Repülőjegyek olcsón</title>
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Betöltjük a közös navigációs sávot -->

    <header>
        <h1>Éld át a repülés szabadságát!</h1>
        <img src="../assets/header.jpg" alt="Főoldal képe" style="width: 1200px; display: block; margin: 0 auto;">
        <p>
            Minden repülésünk személyre szabott,
            <br>hogy életed egyik
            legemlékezetesebb élményét nyújtsa.
        </p>
        <h3>Foglalj most, és repülj velünk az égbolt felé!</h3>
    </header>

    <section class="section__container booking__container">
        <div class="booking__nav">
            <span>Turistaosztály</span>
            <span>Üzleti osztály</span>
            <span>Első osztály</span>
        </div>
        <form>
            <div class="form__group">
                <span><i class="ri-map-pin-line"></i></span>
                <div class="input__content">
                    <div class="input__group">
                        <input type="text" />
                        <label>Helyszín</label>
                    </div>
                    <p>Hová szeretne utazni?</p>
                </div>
            </div>
            <div class="form__group">
                <span><i class="ri-user-3-line"></i></span>
                <div class="input__content">
                    <div class="input__group">
                        <input type="number" />
                        <label>Utasok száma</label>
                    </div>
                    <p>Adja meg a vendégek számát</p>
                </div>
            </div>
            <div class="form__group">
                <span><i class="ri-calendar-line"></i></span>
                <div class="input__content">
                    <div class="input__group">
                        <input type="text" />
                        <label>Indulás</label>
                    </div>
                    <p>Adja meg az indulás dátumát</p>
                </div>
            </div>
            <div class="form__group">
                <span><i class="ri-calendar-line"></i></span>
                <div class="input__content">
                    <div class="input__group">
                        <input type="text" />
                        <label>Visszaút</label>
                    </div>
                    <p>Adja meg a visszaút dátumát</p>
                </div>
            </div>
            <button class="btn"><i class="ri-search-line"></i> Keresés</button>
        </form>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Repülőjegyek Olcsón. Minden jog fenntartva.</p>
            <ul class="footer-links">
                <li class="link"><a href="contact.php">Kapcsolat</a></li>
                <li class="link"><a href="profile.php">Profil</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
