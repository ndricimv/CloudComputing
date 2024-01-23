<?php
include_once 'assets/config/config.php';
include_once 'assets/config/functions.php';
include_once 'assets/config/news.php';
include_once 'assets/config/menu.php';
$pageid=3;
$db = new Database();
$news = new News($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the specific news article
    $oneNews = $news->readNews($id);

    if (!$oneNews) {
        // Redirect to a 404 page or handle accordingly if news is not found
        header("HTTP/1.0 404 Not Found");
        exit();
    }
} else {
    // Redirect to the news page if no ID is provided
    header('Location: news_page.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing - <?php echo $oneNews['Titulli']; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php include "header.php" ?> 
        <div class="pastro"></div>
        <div class="news width80">
                <div class="articel1">
                    <div class="atitle"><h2><?php echo $oneNews['Titulli']; ?></h2></div>
                    <div class="autori"><p><?php echo $oneNews['autori']; ?> - <?php echo $oneNews['Data']; ?></p></div>
                    <div class="aimage1"><img src="<?php echo $oneNews['foto']; ?>" alt="<?php echo $oneNews['Titulli']; ?>"></div>
                    <div class="adescription1"><p><?php echo $oneNews['Pershkrimi']; ?></p></div>
                </div>
        </div>
        <?php include "footer.php" ?>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>