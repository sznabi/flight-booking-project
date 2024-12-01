<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <title>Légvonal Légitársaság</title>
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Dinamikus menüsor egyszer megírva, mindenhova behívva -->

<header>
    <section class="section__container" id="galeria">
    <div class="slideshow-tarolo">
        <div class="mySlides fade">
                <img src="../assets/header1.jpg" style="max-width:100%;">
            </div>

        <div class="mySlides fade">
                <img src="../assets/header2.jpg" style="max-width:100%;">
        </div>

        <div class="mySlides fade">
                <img src="../assets/header3.jpg" style="max-width:100%;">
        </div>
            
        <div class="mySlides fade">
                <img src="../assets/header4.jpg" style="max-width:100%;">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    </section>
</header>

    <section class="section__container booking__container">
    <div class="booking__nav" id="classSelector">
        <span data-type="turista" class="active">Turista osztály</span>
        <span data-type="elso">Első osztály</span>
    </div>
    <form>
        <!-- Hová szeretne utazni? -->
        <div class="form__group">
            <span><i class="ri-map-pin-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <select>
                        <option value="destination1">Helyszín 1</option>
                        <option value="destination2">Helyszín 2</option>
                        <option value="destination3">Helyszín 3</option>
                    </select>
                    <label>Hová utazik?</label>
                </div>
            </div>
        </div>

        <!-- Honnan utazik? -->
        <div class="form__group">
            <span><i class="ri-map-pin-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <select>
                        <option value="origin1">Helyszín 1</option>
                        <option value="origin2">Helyszín 2</option>
                        <option value="origin3">Helyszín 3</option>
                    </select>
                    <label>Honnan utazik?</label>
                </div>
            </div>
        </div>

        <!-- Utasok száma -->
        <div class="form__group">
            <span><i class="ri-user-3-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <label>Utasok száma</label>
                </div>
            </div>
        </div>

        <!-- Indulás -->
        <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <input type="date" />
                    <label>Indulás</label>
                </div>
            </div>
        </div>

        <!-- Visszaút -->
        <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <input type="date" />
                    <label>Visszaút</label>
                </div>
            </div>
        </div>
        <button class="btn"><i class="ri-search-line"></i></button>
    </form>
</section>

<section class="section__container plan__container">
    <p class="subheader">UTAZÁSI SEGÍTSÉG</p>
    <h2 class="section__header">Készülj fel az utazásodra magabiztosan</h2>
    <p class="description">
        Tudj meg mindent az indulás előtti fontos teendőkről és készítsd fel magad, hogy utazásod zökkenőmentes legyen.
    </p>
        <div class="plan__grid">
            <div class="plan__content">
                <span class="number">01</span>
                <h4>Dokumentumok és vízum</h4>
                <p>
                    Ellenőrizd, hogy az útleveled érvényes-e, és nézd meg, szükséges-e vízum az úti célodhoz. Nyomtass ki minden fontos dokumentumot, mint például a repülőjegyet és a szállás visszaigazolását.
                </p>
                <span class="number">02</span>
                <h4>Csomagolási lista</h4>
                <p>
                    Készíts egy listát a legszükségesebb tárgyakról, például ruházatról, gyógyszerekről, és elektronikáról. Ellenőrizd az időjárás-előrejelzést, és pakolj ennek megfelelően.
                </p>
                <span class="number">03</span>
                <h4>Utazási biztosítás</h4>
                <p>
                    Gondoskodj róla, hogy rendelkezz érvényes utazási biztosítással, amely fedezi a váratlan eseményeket, például az orvosi költségeket vagy a járattörléseket.
                </p>
                <span class="number">04</span>
                <h4>Úti cél információk</h4>
                <p>
                    Nézz utána az úti célod fontos tudnivalóinak, például a helyi szokásoknak, közlekedési lehetőségeknek, és a pénznemnek. Így könnyebben eligazodsz, amint megérkezel.
                </p>
            </div>
            <div class="plan__image">
                <img src="../assets/terv1.jpg" alt="Dokumentumok ellenőrzése" />
                <img src="../assets/terv2.jpg" alt="Csomagolási lista" />
                <img src="../assets/terv3.jpg" alt="Biztosítás kötése" />
            </div>
        </div>
</section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Légvonal <br>Az oldal egy egyetemi projekt keretében készült.</p>
            <ul class="footer-links">
                <li class="link"><a href="index.php">Kezdőoldal</a></li>
                <li class="link"><a href="contact.php">Kapcsolat</a></li>
                <li class="link"><a href="profile.php">Profil</a></li>
            </ul>
            <p>Kreiniker Ákos, Nagy Szabolcs Benjámin, Tabajdi Bálint</p>

        </div>
    </footer>
<script src="../script.js"></script>
</body>
</html>
