<?php
session_start();

if($_SESSION['REQUEST_METHOD'] !== 'POST') {
    $_SESSION = [];
    session_destroy();

    header("Location: login.php");
    exit();
}
else {
    header("Location: index.php");
    exit();
}
