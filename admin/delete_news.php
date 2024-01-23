<?php
include_once '../assets/config/config.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/news.php';
$pageid=0;
$db = new Database();
$news = new News($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $existingNews = $news->readNews($id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $news->deleteNews($id);

        header('Location: news.php');
        exit();
    }
} else {
    header('Location: news.php');
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
        <?php include "../header.php" ?>            

        <div class="articels width65">
            <div class="width65 center-text">
                <h1>Fshi Lajmin</h1>
                <p>A jeni i sigurt qe deshironi te fshini kete lajme!?</p>
                <strong><?php echo $existingNews['Titulli']; ?></strong><br>
                <p><?php echo $existingNews['Pershkrimi']; ?></p>
                <p>Date: <?php echo $existingNews['Data']; ?> </p>
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