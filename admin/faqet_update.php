<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/faqet.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$pageid = 0;
$db = new Database();
$user = new User($db);
$faqet = new Faqet($db);
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
    $existingFaqe = $faqet->readFaqe($id);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulli = $_POST['titulli'];
        $permbajtja = $_POST['pershkrimi'];
        $autori = $autor;

        if(isset($_FILES['foto'])){
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
         }
        $faqet->updateFaqe($id, $titulli, $permbajtja, $foto, $autori);

        header('Location: faqet.php');
        exit();
    }
} else {
    header('Location: faqet.php');
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
            
        </div>
        <div class="articels width65">
            <div class="width80">
                <form method="post" name="ndryshofaqet" class="kotaktforma" enctype="multipart/form-data">
                    <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Titulli" name="titulli" id="titulli" value="<?php echo $existingFaqe['titulli']; ?>">
                        <p class="fomrerror" id="titulligabim"></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" style="height:500px;" name="pershkrimi" id="pershkrimi"><?php echo $existingFaqe['permbajtja']; ?></textarea>
                        <p class="fomrerror" id="pershkrimigabim"></p>
                    </div>
                    <div class="form-group">
                        <img class="fotoneforma" src="<?php echo $configs->readConfig('imgurl'); echo $existingFaqe['foto']; ?>" alt="">
                        <input class="form-control" type="file" id="foto" name="foto">
                        <p class="fomrerror" id="fotogabim"></p>
                    </div>
                    <button class="btn btn-mir btn-block" onclick="return shtolajmv()" type="submit" name="submit" >Ruaj</button>
                </form>
            </div>
        </div>
        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>

