<?php
include_once '../assets/config/config.php';
include_once '../assets/config/News.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
include_once '../assets/config/user.php';
$db = new Database();
$user = new User($db);

session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);

    if ($user_role === 'admin') {
       echo "admin";
    } else {
        header('Location: index.php');
        exit();
    }
} else {
    header('Location: ../login.php');
    exit();
}

$pageid = 0;
$news = new News($db);
$allNews = $news->readAllNews();

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
        <div class="pastro"></div>
        <div class="feature">
            <div class="featurediv width65">
                <div class="featureitem">
                <h2>Shto Lajme</h2>
                    <img src="../assets/imgs/icon1.png" alt="">
                    <a class="btn btn-block btn-mir" href="news_post.php">Shto Lajme</a>
                </div>
            </div>
        </div>
        <div class="articels width65">
            <div class="table-wrapper">
                <table class="serverat">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulli</th>
                            <th>Pershkrimi</th>
                            <th>Data</th>
                            <th>Autori</th>
                            <th>Ndrysho</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allNews as $news): ?>
                        <tr>
                            <td><?php echo $news['id']; ?></td>
                            <td><?php echo $news['Titulli']; ?></td>
                        
                            <td><?php echo $news['Pershkrimi']; ?></td>
                            <td><?php echo $news['Data']; ?></td>
                            <td><?php echo $news['autori']; ?></td>
                            <td>
                                <a class="btn btn-mir" href="news_update.php?id=<?php echo $news['id']; ?>">Ndrysho</a>
                                <a class="btn btn-keq" href="delete_news.php?id=<?php echo $news['id']; ?>">Fshi</a>
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
