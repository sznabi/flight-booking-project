<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezési oldal</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($user) {
                if (password_verify($password, $user["password"])) {
                    header("Location : index.php"); // ide fogja iranyitani a user-t bejelentkezes utan, profil oldal majd johet
                    die();
                } else {
                    echo "<div class='alert alert-danger'>A jelszó nem helyes!</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Az email nem létezik!</div>";
            }

        }
    
    ?>

    <div class="container">
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Írd be az emailed!" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Írd be a jelszavad!" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Bejelentkezés" name="login" class="btn btn-primary">
            </div>
        </form>
    </div>

    <!-- próba próba -->

    <div class="container">
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Írd be az emailed!" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Írd be a jelszavad!" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Bejelentkezés" name="login" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>
</html>