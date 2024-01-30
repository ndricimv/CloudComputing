<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/servers.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$pageid = 0;
$db = new Database();
$user = new User($db);
$servers = new Servers($db);
session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);
    $autor = $user->readEmri('emri',$user_id);

    if ($user_role === 'admin') {
    } else {
        header('Location: ../index.php');
        exit();
    }
    } else {
        header('Location: ../login.php');
        exit();
    }

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $existingServers = $servers->readServer($id);

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulli = $_POST['titulli'];
        $pershkrimi = $_POST['pershkrimi'];
        $cmimi = $_POST['cmimi'];
        $autori = $autor;
        

        if((isset($_FILES["foto"]["size"]) && ($_FILES["foto"]["size"] > 0)) ){
            $errors= array();
            $foto = $_FILES['foto']['name'];
            $file_tmp =$_FILES['foto']['tmp_name'];
            $file_type=$_FILES['foto']['type'];
            $per=explode('.',$_FILES['foto']['name']);
            $file_ext=end($per);
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
               $errors="Ku lloj i files nuk lejohet! Ju lutem perdorni vetem jpeg, jpg, png.";
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,"../assets/imgs/".$foto);
            }else{
               print_r($errors);
               exit;
            }
         }else {
           
            $foto = $existingServers['foto'];
           
         }

        $servers->updateServer($id, $titulli, $pershkrimi, $cmimi, $foto, $autori);

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
        <?php include "header.php" ?>            
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
                <form method="post" name="ndryshoserver" class="kotaktforma" enctype="multipart/form-data">
                    <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Titulli" name="titulli" id="titulli"  value="<?php echo $existingServers['Titulli']; ?>" >
                        <p class="fomrerror" id="titulligabim"></p>
                    </div>
                    <div class="form-group">
                        <textarea style="height:400px;" class="form-control" name="pershkrimi" id="pershkrimi"><?php echo $existingServers['Pershkrimi']; ?></textarea>
                        <p class="fomrerror" id="pershkrimigabim"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control"  type="text" name="cmimi" id="cmimi" value="<?php echo $existingServers['Cmimi']; ?>" >
                        <p class="fomrerror" id="cmimigabim"></p>
                    </div>
                    <div class="form-group">
                        <img class="fotoneforma" src="<?php echo $configs->readConfig('imgurl'); echo $existingServers['foto']; ?>" alt="">
                        <input class="form-control" type="file" id="foto" name="foto">
                        <p class="fomrerror" id="fotogabim"></p>
                    </div>
                    <button class="btn btn-mir btn-block" onclick="return shtoservervu()" type="submit" name="submit" >Shto</button>
                </form>
            </div>
        </div>
        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>

