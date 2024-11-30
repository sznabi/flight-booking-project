<?php
// Betöltjük a navbar.php fájlt, amely a navigációs sávot tartalmazza
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
    session_start();

    // Ha már be van jelentkezve, irányítsuk át a kezdőoldalra
    if (isset($_SESSION["user_id"])) {
        header("Location: index.php");
        exit();
    }

    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Ha valamelyik mező üres, hibaüzenetet jelenítünk meg
        if(empty($email) OR empty($password)) {
            echo "<div class='alert alert-danger'>Minden mezőt ki kell tölteni!</div>";
        } else {
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";  // Az email cím alapján keresünk a táblában
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 0) {
                // Ha nincs ilyen email cím, hibaüzenetet jelenítünk meg
                echo "<div class='alert alert-danger'>Nincs ilyen felhasználó!</div>";
            } else {
                // Ha létezik a felhasználó, ellenőrizzük a jelszót
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row['password'])) {
                    $_SESSION["user_id"] = $row["id"];  // Ha a jelszó helyes, session-ben tároljuk a felhasználót
                    $_SESSION["fullname"];
                    header("Location: index.php");  // A sikeres bejelentkezés után irányítás a kezdőoldalra
                    exit();
                } else {
                    // Ha a jelszó helytelen, hibaüzenetet jelenítünk meg
                    echo "<div class='alert alert-danger'>Hibás jelszó!</div>";
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
    <style>
        form {
            max-width: 400px;
            margin: 2rem auto;
            padding: 1.5rem;
            background-color: #f5f5f5;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 10px 15px;
            font-size: 1rem;
            outline: none;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            background-color: #ffffff;
            color: #001f3f;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input:focus {
            border-color: #1e90ff;
            box-shadow: 0 0 5px rgba(30, 144, 255, 0.5);
        }

        .form-group input::placeholder {
            color: #64748b;
            font-size: 0.9rem;
        }

        .form-btn {
            text-align: center;
        }

        .form-btn input {
            width: 50%;
            padding: 10px 15px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .form-btn input:hover {
            transform: scale(1.02);
        }

        .login-body h2 {
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
