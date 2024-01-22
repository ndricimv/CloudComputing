<?php
include_once 'config.php';
include_once 'functions.php';

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function logout() {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'user';

    registerUser($username, $password, $role);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (loginUser($username, $password)) {
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Gabim!. Verifiko te dhenat.";
    }
}

if (isset($_GET['logout'])) {
    logout();
}
?>
