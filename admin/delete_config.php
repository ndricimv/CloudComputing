<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$pageid=0;
$db = new Database();
$configs = new SiteConfigs($db);
$user = new User($db);
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


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $existingConfigs = $configs->readConfigall($id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $configs->deleteConfig($id);

        header('Location: siteconfig.php');
        exit();
    }
} else {
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

        <div class="articels width65">
            <div class="width65 center-text">
                <h1>Fshi Menu</h1>
                <p>A jeni i sigurt qe deshironi te fshini kete menu!?</p>
                <strong><?php echo $existingConfigs['emri']; ?></strong><br>
                <p><?php echo $existingConfigs['vlera']; ?></p>
                <form method="post" action="">
                    <button class="btn btn-rreth btn-mir center-text" type="submit">Po, Fshi</button>
                </form>
                <p><a class="btn btn-rreth btn-keq center-text" href="servers.php">Anulo</a></p>
            </div>            
        
        </div>
        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>