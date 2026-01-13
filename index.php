<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h1>Welcome UsShopping 💪</h1>
<a href="logout.php">Logout</a>
