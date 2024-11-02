<?php
// welcome.php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

echo "<h1>Welcome, " . $_SESSION['username'] . "!</h1>";
echo "<p><a href='logout.php'>Logout</a></p>";
?>