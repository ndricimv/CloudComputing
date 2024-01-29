<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/servers.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$db = new Database();
$user = new User($db);
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
        <?php if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);

    if ($user_role === 'user') {
    } else {
        header('Location: ../index.php');
        exit();
    }
    } else {
        
    }
    ?>         
        <div class="pastro"></div>
        <div class="feature">
            <div class="featurediv width65">
                
            </div>
        </div>
        <div class="articels width65">
            <div class="table-wrapper">
            Pershendetje <?php echo $user->readEmri('emri',$user_id) ." ". $user->readEmri('mbiemri',$user_id) ."<br> Data dhe Koha e Kycjes: <b>" . $date = date("Y-m-d H:i:s"). "</b>"; ?>
            <a class="btn btn-mir" href="porosit.php">Porosit </a>
            </div>
        </div>

        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>
