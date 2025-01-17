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
    <title>Légvonal</title>
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Dinamikus menüsor egyszer megírva, mindenhova behívva -->

    <header>
    <section class="section__container" id="galeria">
        <h1 style="cursor: default;">Légvonal</h1>
        <h3 style="cursor: default;">Velünk a csillagos ég sem lehet határ!</h3>
        <div class="slideshow-tarolo">
            <div class="mySlides fade">
                <img src="../assets/header1.jpg" style="max-width:100%;">
                <div class="slide-text">
                <b>"Álomutak, elérhető áron!"</b><br>
                Kedvező árú repülőjegyek a világ bármely pontjára. Foglald le most, és spórolj, miközben felejthetetlen élményekkel gazdagodsz.</div>
            </div>

            <div class="mySlides fade">
                <img src="../assets/header2.jpg" style="max-width:100%;">
                <div class="slide-text"><b>"Indulj útnak a legjobb repülőterekről!"</b><br>
                Fedezd fel a világot a legkorszerűbb repülőterekről induló járatokkal. Kényelmes indulás, gyors ügyintézés.</div>
            </div>

            <div class="mySlides fade">
                <img src="../assets/header3.jpg" style="max-width:100%;">
                <div class="slide-text"><b>"Válaszd az igazi szabadságot!"</b><br>
                Válaszd ki az úti célodat, és fedezd fel a világot úgy, ahogy mindig is szeretted volna.</div>
            </div>

            <div class="mySlides fade">
                <img src="../assets/header4.jpg" style="max-width:100%;">
                <div class="slide-text"><b>"Egyszerű foglalás, gondtalan utazás!"</b><br>
                Találd meg a számodra legmegfelelőbb járatot, és foglald le jegyedet percek alatt. Utazz nyugodtan, mi gondoskodunk a részletekről!</div>
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
        <span data-type="Turista">Turista osztály</span>
        <span data-type="Bármely" class="active">Bármely osztály</span>
        <span data-type="Első">Első osztály</span>
    </div>
    <form id="searchForm">
    <div class="form__group">
    <span><i class="ri-map-pin-line"></i></span>
    <div class="input__content">
        <div class="input__group">
            <select name="origin" id="originSelect">
                <option value="any">Bármely</option>
                <option value="Róma">Róma</option>
                <option value="Berlin">Berlin</option>
                <option value="Madrid">Madrid</option>
                <option value="Barcelona">Barcelona</option>
                <option value="Amszterdam">Amszterdam</option>
                <option value="Bécs">Bécs</option>
                <option value="Zürich">Zürich</option>
                <option value="Koppenhága">Koppenhága</option>
                <option value="Brüsszel">Brüsszel</option>
                <option value="Lisszabon">Lisszabon</option>
                <option value="Dublin">Dublin</option>
                <option value="Prága">Prága</option>
                <option value="Budapest">Budapest</option>
                <option value="Stockholm">Stockholm</option>
                <option value="Helsinki">Helsinki</option>
                <option value="Oslo">Oslo</option>
                <option value="Varsó">Varsó</option>
                <option value="Athén">Athén</option>
            </select>
            <label>Honnan utazik?</label>
        </div>
    </div>
</div>

<!-- Hová szeretne utazni? -->
<div class="form__group">
    <span><i class="ri-map-pin-line"></i></span>
    <div class="input__content">
        <div class="input__group">
            <select name="destination" id="destinationSelect">
                <option value="any">Bármely</option>
                <option value="Róma">Róma</option>
                <option value="Berlin">Berlin</option>
                <option value="Madrid">Madrid</option>
                <option value="Barcelona">Barcelona</option>
                <option value="Amszterdam">Amszterdam</option>
                <option value="Bécs">Bécs</option>
                <option value="Zürich">Zürich</option>
                <option value="Koppenhága">Koppenhága</option>
                <option value="Brüsszel">Brüsszel</option>
                <option value="Lisszabon">Lisszabon</option>
                <option value="Dublin">Dublin</option>
                <option value="Prága">Prága</option>
                <option value="Budapest">Budapest</option>
                <option value="Stockholm">Stockholm</option>
                <option value="Helsinki">Helsinki</option>
                <option value="Oslo">Oslo</option>
                <option value="Varsó">Varsó</option>
                <option value="Athén">Athén</option>
            </select>
            <label>Hová utazik?</label>
        </div>
    </div>
</div>


        <!-- Utasok száma -->
        <div class="form__group">
            <span><i class="ri-user-3-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <select name="passengers" id="passengersSelect">
                        <option value="any">Bármely</option>
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
                    <input type="date" name="departureDate" id="departureDate" />
                    <label>Indulás</label>
                </div>
            </div>
        </div>

        <!-- Visszaút -->
        <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
                <div class="input__group">
                    <input type="date" name="returnDate" id="returnDate" />
                    <label>Visszaút</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn"><i class="ri-search-line"></i></button>
    </form>
</section>

<section id="availableFlights" class="section__container" style="display:none;">
    <h2>Elérhető Járatok</h2>

     <div id="sortControls">
        <button id="sortAsc" class="btn">Indulási dátum szerint növekvő sorrend<i class="ri-arrow-up-s-line"></i></button>
        <button id="sortDesc" class="btn">Indulási dátum szerint csökkenő sorrend<i class="ri-arrow-down-s-line"></i></button>
    </div>

    <div id="flightList">
        <!-- ide tolti a jaratokat -->
    </div>
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
