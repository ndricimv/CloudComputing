<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/servers.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$db = new Database();
$user = new User($db);
$configs = new SiteConfigs($db);
$allConfigs = $configs->readAllConfigs();
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
$pageid = 0;
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
                <h2>Shto Config</h2>
                    <img src="../assets/imgs/icon1.png" alt="">
                    <a class="btn btn-block btn-mir" href="config_post.php">Shto Config</a>
                </div>
            </div>
        </div>
        <div class="articels width65">
            <div class="table-wrapper">
                <table class="serverat">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Emri</th>
                            <th>Vlera</th>
                            <th>Ndrysho</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allConfigs as $configs): ?>
                        <tr>
                            <td><?php echo $configs['id']; ?></td>
                            <td><?php echo $configs['emri']; ?></td>
                            <td><?php echo $configs['vlera']; ?></td>
                            <td>
                                <a class="btn btn-mir" href="config_update.php?id=<?php echo $configs['id']; ?>">Ndrysho</a>
                                <a class="btn btn-keq" href="delete_config.php?id=<?php echo $configs['id']; ?>">Fshi</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <tbody>
                </table>
            </div>
        </div>

        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>
