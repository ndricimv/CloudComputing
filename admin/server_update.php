<?php
include_once '../assets/config/config.php';
include_once '../assets/config/servers.php';
$pageid = 0;
$db = new Database();
$servers = new Servers($db);


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $existingServers = $servers->readServer($id);

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulli = $_POST['titulli'];
        $pershkrimi = $_POST['pershkrimi'];
        $cmimi = $_POST['cmimi'];

        $servers->updateServer($id, $titulli, $pershkrimi, $cmimi);

        header('Location: servers.php');
        exit();
    }
} else {

    header('Location: servers.php');
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
        <div class="pastro"></div>
        <div class="feature">
            <div class="featurediv width65">
                <div class="featureitem">
                <h2>Shto Server</h2>

                

                    <img src="../assets/imgs/icon1.png" alt="">
                    <a class="btn btn-block btn-mir" href="servers.php">Lisa e Serverve</a>

                </div>
                

            </div>
        </div>
        <div class="articels width65">
            <div class="serveritem">
                <form method="post" name="ndryshoserver" class="kotaktforma" action="">
                    <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Titulli" name="titulli" id="titulli"  value="<?php echo $existingServers['Titulli']; ?>" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"  name="pershkrimi" required><?php echo $existingServers['Pershkrimi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control"  type="text" name="cmimi" value="<?php echo $existingServers['Cmimi']; ?>" required>
                        <p class="fomrerror" id="emailgabim"></p>
                    </div>
                    <button class="btn btn-mir btn-block" id="submit" type="submit" name="submit" >Shto</button>
                </form>
            </div>
        </div>
        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>
