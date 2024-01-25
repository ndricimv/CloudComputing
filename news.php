<?php
include_once 'assets/config/config.php';
include_once 'assets/config/functions.php';
include_once 'assets/config/news.php';
include_once 'assets/config/menu.php';
include_once 'assets/config/user.php';
$pageid=3;
$db = new Database();
$news = new News($db);

$allNews = $news->readAllNews();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing - News</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php include "header.php" ?> 
        <div class="pastro"></div>
        <div class="news width80">
            <?php foreach ($allNews as $news): ?>
                <div class="articel">
                    <a href="news_1.php?id=<?php echo $news['id']; ?>">
                        <div class="atitle"><h2><?php echo $news['Titulli']; ?></h2></div>
                        <div class="aimage"><img src="<?php echo $news['foto']; ?>" alt="<?php echo $news['Titulli']; ?>"></div>
                        <div class="adescription"><p><?php echo $news['Pershkrimi']; ?></p></div>
                    </a>
                </div>
            <?php endforeach; ?>   
        </div>

        <?php include "footer.php" ?>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>