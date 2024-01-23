<?php
include_once '../assets/config/config.php';
include_once '../assets/config/servers.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$pageid = 0;
$db = new Database();
$user = new User($db);
$servers = new Servers($db);
session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);

    if ($user_role === 'admin') {
        header('Location: dashboard.php');
    } else {
        header('Location: ../index.php');
        exit();
    }
    } else {
        header('Location: ../login.php');
        exit();
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulli = $_POST['titulli'];
    $pershkrimi = $_POST['pershkrimi'];
    $cmimi = $_POST['cmimi'];
    $foto = $_POST['foto'];

    $servers->createServer($titulli, $pershkrimi, $cmimi, $foto);

    header('Location: servers.php');
    exit();
}
?>