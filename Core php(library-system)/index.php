<?php
session_start();

// Default password
$default_password = "dixit972";
if (!isset($_SESSION['password'])) {
    $_SESSION['password'] = $default_password;
}

require 'controllers/LibraryController.php';

$controller = new LibraryController();

if (!isset($_SESSION['logged_in'])) {
    $controller->checkPassword();
    exit();
}

if (isset($_POST['action'])) {
    $controller->handleAction($_POST['action']);
} elseif (isset($_POST['submit'])) {
    $controller->handleSubmit($_POST['submit']);
} else {
    $controller->displayMenu();
}
?>
