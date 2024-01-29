<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/porosi.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$db = new Database();
$user = new User($db);
$porosit = new Porosi($db);

session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
}
$allPorosit = $porosit->readAllPorosity($user_id);
$configs = new SiteConfigs($db);


$pageid = 0;

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
                
            </div>
        </div>
        <div class="articels width65">
            <div class="table-wrapper">
                <table class="serverat">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Emri</th>
                            <th>Pershkrimi</th>
                            <th>Cmimi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allPorosit as $porosit): ?>
                        <tr>
                            <td><?php echo $porosit['id']; ?></td>
                            <td><?php echo $porosit['Titulli']; ?></td>
                        
                            <td><?php echo $porosit['Pershkrimi']; ?></td>
                        
                            <td><?php echo $porosit['Cmimi']; ?>€</td>
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
