<?php
include_once '../assets/config/config.php';
include_once '../assets/config/menu.php';
$pageid = 0;
$db = new Database();
$menu = new Menu($db);

$allMenu = $menu->readAllMenu();
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
                <h2>Shto Server</h2>
                    <img src="../assets/imgs/icon1.png" alt="">
                    <a class="btn btn-block btn-mir" href="menu_post.php">Shto Menu</a>
                </div>
            </div>
        </div>
        <div class="articels width65">
            <div class="table-wrapper">
                <table class="serverat">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Renditja</th>
                            <th>Emri</th>
                            <th>Pershkrimi</th>
                            <th>Ndrysho</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allMenu as $menu): ?>
                        <tr>
                            <td><?php echo $menu['id']; ?></td>
                            <td><?php echo $menu['renditja']; ?></td>
                            <td><?php echo $menu['Emri']; ?></td>
                        
                            <td><?php echo $menu['vlera']; ?></td>
                            <td>
                                <a class="btn btn-mir" href="menu_update.php?id=<?php echo $menu['id']; ?>">Ndrysho</a>
                                <a class="btn btn-keq" href="delete_menu.php?id=<?php echo $menu['id']; ?>">Fshi</a>
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
