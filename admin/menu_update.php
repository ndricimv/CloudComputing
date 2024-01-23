<?php
include_once '../assets/config/config.php';
include_once '../assets/config/menu.php';
$pageid = 0;
$db = new Database();
$menu = new Menu($db);

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $existingMenu = $menu->readMenu($id);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $emri = $_POST['titulli'];
        $vlera = $_POST['pershkrimi'];
        $renditja = $_POST['renditja'];

        $menu->updateMenu($id, $emri, $vlera, $renditja);

        header('Location: menu.php');
        exit();
    }
} else {
    header('Location: menu.php');
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
            <div class="width80">
                <form method="post" name="ndryshoserver" class="kotaktforma" action="">
                    <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Titulli" name="titulli" id="titulli"  value="<?php echo $existingMenu['Emri']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Renditja" name="renditja" id="renditja"  value="<?php echo $existingMenu['renditja']; ?>" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"  name="pershkrimi" required><?php echo $existingMenu['vlera']; ?></textarea>
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

