<?php
include_once 'assets/config/config.php';
include_once 'assets/config/servers.php';
include_once 'assets/config/menu.php';
$pageid = 2;
$db = new Database();
$servers = new Servers($db);

$allServers = $servers->readAllServers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing - Servers</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container front-page">
        <?php include "header.php" ?> 
        <div class="pastro"></div>
        <div class="feature">
            <div class="serversdiv width80">
            <?php foreach ($allServers as $server): ?>
                <div class="serveritem">

                    <img src="<?php echo $server['foto']; ?>" alt="">
                    <h2><?php echo $server['Titulli']; ?></h2>
                    <p><?php echo $server['Pershkrimi']; ?></p>
                    <p class="fcmimi">
                        <span>Start from</span>
                        <span class="num" style="display: inline-block;"><?php echo $server['Cmimi']; ?></span><span>€</span>
                    </p>
                    <a href="login.html" class="btn btn-block btn-mir">Sign Up Now</a>

                </div>
            <?php endforeach; ?>   

                

            </div>
        </div>

        <?php include "footer.php" ?>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>