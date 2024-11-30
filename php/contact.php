<?php
// Betöltjük a navbar.php fájlt, amely a navigációs sávot tartalmazza
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Kapcsolat</title>
</head>
<body>
    <div id="contact">
        <h2>Kapcsolat</h2>
        <form action="submit_contact.php" method="post">
            <p><label>Név:</label> <input name="contact_name" type="text" /></p>
            <p><label>Email:</label> <input name="contact_email" type="email" /></p>
            <p><label>Üzenet:</label> <textarea name="contact_message"></textarea></p>
            <button type="submit" class="btn">Küldés</button>
        </form>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Repülőjegyek Olcsón. Minden jog fenntartva.</p>
            <ul class="footer-links">
                <li class="link"><a href="contact.php">Kapcsolat</a></li>
                <li class="link"><a href="profile.php">Profil</a></li>
            </ul>
        </div>
    </footer>

<style>
    /* KAPCSOLAT CSS */

    form {
        max-width: 400px;
        margin: 2rem auto;
        padding: 1.5rem;
        background-color: #f5f5f5;
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    #contact {
        max-width: 800px !important;
        margin: 0 auto;
        padding: 50px;
        box-shadow: rgba(100,100,111,0.2) 0px 7px 29px 0px;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact textarea {
    width: 100%;
    height: 32px;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
    }

    #contact textarea {
    height: 75px;
    resize: none;
    }

    #contact button {
    padding: 10px 20px;
    margin-top: 15px;
    font-size: 16px;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    }

    #contact button:active {
    transform: scale(0.95);
    }

    #contact label {
    font-weight: bold;
    display: block;
    margin-top: 15px;
    font-size: 14px;
    }

    #contact h2 {
    margin-top: 15px;
    margin-bottom: 20px;
    text-align: center;
    }
</style>
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Légvonal <br>Az oldal egy egyetemi projekt keretében készült.</p>
            <ul class="footer-links">
                <li class="link"><a href="index.php">Kezdőoldal</a></li>
                <li class="link"><a href="contact.php">Kapcsolat</a></li>
                <li class="link"><a href="profile.php">Profil</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
