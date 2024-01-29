<?php
include_once 'assets/config/config.php';
include_once 'assets/config/functions.php';
include_once 'assets/config/servers.php';
include_once 'assets/config/porosi.php';
include_once 'assets/config/menu.php';
include_once 'assets/config/user.php';
$pageid=0;
$db = new Database();
$configs = new SiteConfigs($db);
$user = new User($db);
$servers = new Servers($db);
$porosi = new Porosi($db);

session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);

    if ($user_role === 'user') {
    } else {
        header('Location: index.php');
        exit();
    }
    } else {
        header('Location: login.php');
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container front-page">
        <?php include "header.php" ?>            
        <?php 
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $user_id = $_SESSION['user_id'];

                $oneServer = $servers->readServer($id);

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $porosi->createPorosi($user_id, $id);

                    header('Location: user/porosit.php');
                    exit();
                }
                if (!$oneServer) {
                    header("HTTP/1.0 404 Not Found");
                    exit();
                }
            } else {
                header('Location: news_page.php');
                exit();
            }
        ?>
        <div class="articels width65">
            <div class="width65 center-text">
                <h1>Porosit</h1>
                <p>A jeni i sigurt qe deshironi te porositeni kete server!?</p>
                <strong><?php echo $oneServer['Titulli'];?></strong><br>
                <p><?php echo $oneServer['Pershkrimi']; ?></p><br>
                <p><h2 class="num" style="display: inline-block;"><?php echo $oneServer['Cmimi']; ?></span><span>€</h2></p>
                <form method="post" action="">
                    <button class="btn btn-rreth btn-mir center-text" type="submit">Po, Porosit</button>
                </form>
                <p><a class="btn btn-rreth btn-keq center-text" href="servers.php">Anulo</a></p>
            </div>            
        
        </div>
        <?php include "footer.php" ?>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>