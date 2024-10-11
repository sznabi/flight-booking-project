<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Regisztrációs oldal</title>
</head>
<body class="reg-body">
    <div class="container">
    <?php
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "login_register";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("A kapcsolat megszakadt: " . $conn->connect_error);
    }

    if (isset($_POST["submit"])) {
        $fullName = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["password_repeat"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if(empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors, "Minden mezőt ki kell tölteni!");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Az email nem megfelelő!");
        }
        if (strlen($password)<8) {
            array_push($errors, "A jelszónak legalább 8 karakter hosszúnak kell lennie!");
        }
        if ($password !== $passwordRepeat) {
            array_push($errors, "A jelszavaknak egyeznie kell!");
        }

        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            array_push($errors, "Az email már létezik!");
        }

        if(count($errors)>0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            $sql = "INSERT INTO users (fullname, username, email, password) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "ssss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Sikeres regisztráció!</div>";
            } else {
                die("Hiba..");
            }
        }
    }
    ?>
    <form action="registration.php" method="post">
        <div class="form-group">
            <input type="fullname" name="fullname" class="form-control" placeholder="Teljes név:">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="E-mail cím:">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Jelszó:">
        </div>
        <div class="form-group">
            <input type="password" name="password_repeat" class="form-control" placeholder="Jelszó újra:">
        </div>
        <div class="form-btn">
            <input type="submit" name="submit" class="btn btn-primary" value="Regisztráció">
        </div>
    </form>
    </div>
</body>
</html>