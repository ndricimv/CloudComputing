<?php
include_once '../assets/config/config.php';
include_once '../assets/config/servers.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$pageid = 0;
$db = new Database();
$user = new User($db);
session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);

    if ($user_role === 'admin') {
        header('Location: dashboard.php');
    } else {
        header('Location: ../login.php');
        exit();
    }
    } else {
        header('Location: ../login.php');
        exit();
    }

?>