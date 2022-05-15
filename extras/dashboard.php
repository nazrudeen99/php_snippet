<?php
session_start();

if (isset($_SESSION['email'])) {
    echo '<h1> Welcome '. $_SESSION['email'] . '</h1>';
    echo '<a href="logout.php">Logout</a>';

} else {
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/php-crash-main/13_sessions.php">Home</a>';
}