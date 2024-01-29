<?php
include_once 'assets/config/config.php';
include_once 'assets/config/functions.php';
include_once 'assets/config/menu.php';
include_once 'assets/config/servers.php';
include_once 'assets/config/news.php';
include_once 'assets/config/user.php';
$pageid=1;

$user = new User($db);

$db = new Database();
$servers = new Servers($db);
$news = new News($db);
$allServers = $servers->readServerFeature();
$allNews = $news->readAllNews();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $configs->readConfig('EmriWebit'); ?></title>
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
                        <img src="<?php echo $configs->readConfig('imgurl');  echo $server['foto']; ?>" alt="">
                        <h2><?php echo $server['Titulli']; ?></h2>
                        <p><?php echo mb_strimwidth($server['Pershkrimi'], 0, 220, '...');  ?></p>
                        <p class="fcmimi">
                            <span>Start from</span>
                            <span class="num" style="display: inline-block;"><?php echo $server['Cmimi']; ?></span><span>€</span>
                        </p>
                        <a href="server_1.php?id=<?php echo $server['id']; ?>" class="btn btn-block btn-mir">Shiko</a>
                    </div>
                <?php endforeach; ?>   
            </div>
        </div>
        <div class="articels width65">
        <?php foreach ($allNews as $news): ?>
                <div class="articel">
                    <div class="atitle"><h2><a href="news_1.php?id=<?php echo $news['id']; ?>"><?php echo $news['Titulli']; ?></a></h2></div>
                    <div class="aimage"><img src="<?php echo $configs->readConfig('imgurl'); echo $news['foto']; ?>" alt="<?php echo $news['Titulli']; ?>"></div>
                    <div class="adescription"><p><?php echo mb_strimwidth($news['Pershkrimi'], 0, 220, '...');  ?></p></div>
                </div>
            <?php endforeach; ?>   
        </div>

        <?php include "footer.php" ?>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>