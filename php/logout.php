<?php
session_start();
session_unset(); // Törli az összes session változót
session_destroy(); // Lezárja a session-t

// Átirányítás a bejelentkezési oldalra
header("Location: index.php");
exit();
?>
