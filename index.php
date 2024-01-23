<?php
include_once 'assets/config/config.php';
include_once 'assets/config/functions.php';
include_once 'assets/config/menu.php';
include_once 'assets/config/servers.php';

$pageid=1;

$db = new Database();
$servers = new Servers($db);
$allServers = $servers->readServerFeature(1,2,3);
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
        <div class="pastro"></div>
        <div class="feature">
            <div class="featurediv width65">
            <?php foreach ($allServers as $server): ?>
                    <div class="featureitem">
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
        <div class="articels width65">
            <div class="articel">
                <div class="atitle"><h2>Articel 1</h2></div>
                <div class="aimage"><img src="assets/imgs/1.jpg" alt="Aricel 1"></div>
                <div class="adescription"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
            </div>
            <div class="articel">
                <div class="atitle"><h2>Articel 2</h2></div>
                <div class="aimage"><img src="assets/imgs/2.jpg" alt="Aricel 1"></div>
                <div class="adescription"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
            </div>
            <div class="articel">
                <div class="atitle"><h2>Articel 3</h2></div>
                <div class="aimage"><img src="assets/imgs/3.jpg" alt="Aricel 1"></div>
                <div class="adescription"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
            </div>
            <div class="articel">
                <div class="atitle"><h2>Articel 4</h2></div>
                <div class="aimage"><img src="assets/imgs/4.jpg" alt="Aricel 1"></div>
                <div class="adescription"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
            </div>
            <div class="articel">
                <div class="atitle"><h2>Articel 5</h2></div>
                <div class="aimage"><img src="assets/imgs/5.jpg" alt="Aricel 1"></div>
                <div class="adescription"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
            </div>
            <div class="articel">
                <div class="atitle"><h2>Articel 5</h2></div>
                <div class="aimage"><img src="assets/imgs/6.jpg" alt="Aricel 1"></div>
                <div class="adescription"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
            </div>
        </div>

        <?php include "footer.php" ?>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>