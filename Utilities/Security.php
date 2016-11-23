<?php

session_start();

if (!isset($_SESSION["username"]) && $_SESSION["password"] == NULL) {
    $url = 'index.php?action=login';
    header("Location: " . $url);
    exit();
}