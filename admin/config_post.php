<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/servers.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$pageid = 0;
$db = new Database();
$user = new User($db);
$configs = new SiteConfigs($db);
session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);

    if ($user_role === 'admin') {
    } else {
        header('Location: ../index.php');
        exit();
    }
    } else {
        header('Location: ../login.php');
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $emri = $_POST['titulli'];
        $vlera = $_POST['pershkrimi'];
            
        $configs->createConfig($emri, $vlera);

        header('Location: siteconfig.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container front-page">
        <?php include "header.php" ?>            
        <div class="pastro"></div>
        <div class="feature">
            <div class="featurediv width65">
                <div class="featureitem">
                <h2>Shto Server</h2>
                    <img src="../assets/imgs/icon1.png" alt="">
                    <a class="btn btn-block btn-mir" href="servers.php">Lisa e Serverve</a>
                </div>
            </div>
        </div>
        <div class="articels width65">
            <div class="width80">
                <form name="shtoserver" class="kotaktforma" method="post"  id="shtoserver" enctype="multipart/form-data">
                    <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Titulli" name="titulli" id="titulli">
                        <p class="fomrerror" id="titulligabim"></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"  name="pershkrimi"  id="pershkrimi"></textarea>
                        <p class="fomrerror" id="pershkrimigabim"></p>
                    </div>
                    <button class="btn btn-mir btn-block" onclick="return shtoserverv()" type="submit" name="submit" >Shto</button>
                </form>
            </div>
        </div>
        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>