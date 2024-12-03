<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Bejelentkezés</title>
</head>
<body class="login-body">
    <div class="container">
    <?php

    // Ha már be van jelentkezve, irányítsuk át az index oldalra
    if (isset($_SESSION["user_id"])) {
        // JavaScript-et használunk a localStorage beállítására
        echo "<script>localStorage.setItem('isLoggedIn', 'true'); window.location.href = 'index.php';</script>";
        exit();
    }

    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (empty($email) || empty($password)) {
            echo "<div class='alert alert-danger' style='color: white;'>Minden mezőt ki kell tölteni!</div>";
        } else {
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";  
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 0) {
                echo "<div class='alert alert-danger' style='color: white;'>Nincs ilyen felhasználó!</div>";
            } else {
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row['password'])) {
                    $_SESSION["user_id"] = $row["id"];
                    $_SESSION["fullname"] = $row["fullname"];
                    
                    // Success - Set localStorage via JavaScript
                    echo "<script>localStorage.setItem('isLoggedIn', 'true'); window.location.href = 'index.php';</script>";
                    exit();
                } else {
                    echo "<div class='alert alert-danger' style='color: white;'>Hibás jelszó!</div>";
                }
            }
        }
    }
    ?>

    <h2>Bejelentkezés</h2>
    <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="E-mail cím:">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Jelszó:">
        </div>
        <div class="form-btn" class="btn">
            <input type="submit" name="submit" class="btn btn-primary" value="Bejelentkezés">
        </div>
    </form>
    </div>

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
</body>
</html>
