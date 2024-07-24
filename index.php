<?php
// Include the header
include "includes/header.php";

// Predefined credentials
$allowedUsername = 'C21S91R75K66W6';
$allowedPassword = '8GGQUIJ87TAYYVFY';

// Check if session is already set, if not, set it with predefined credentials
if (!isset($_SESSION["webTvplayer"])) {
    $_SESSION["webTvplayer"] = ['username' => $allowedUsername, 'password' => $allowedPassword];
    // Redirect to dashboard
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit;
}

// Existing check if the session exists and redirect
if (isset($_SESSION["webTvplayer"]) && !empty($_SESSION["webTvplayer"])) {
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit;
}

// Include the footer
include "includes/footer.php";
?>