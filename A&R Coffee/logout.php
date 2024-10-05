<?php
session_start();

// Clear the cart data if it exists
if (isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: login.php");
exit();
?>
