<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/news.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$pageid = 0;
$db = new Database();
$user = new User($db);
session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);

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
    $existingUser = $user->readUser($id);   
    
    if($existingUser['role'] == 'admin'){
        $admin = 'checked';
        $userr = '';
    }else{
        $admin = '';
        $userr = 'checked';
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        $user->updateUser($id, $emri, $mbiemri, $username, $email, $role);

        header('Location: users.php');
        exit();
    }
} else {

    header('Location: users.php');
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
                <h2>Users</h2>
                    <img src="../assets/imgs/users.png" alt="">
                    <a class="btn btn-block btn-mir" href="users.php">Lisa e Uservae</a>
                </div>
            </div>
        </div>
        <div class="articels width65">
            <div class="width80">
                <form method="post" name="ndryshoserver" class="kotaktforma" action="">
                    <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Emri" name="emri" id="emri"  value="<?php echo $existingUser['emri']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control"  type="text" placeholder="Mbiemri" name="mbiemri" id="mbiemri" value="<?php echo $existingUser['mbiemri']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control"  type="text" placeholder="Username" name="username" id="username" value="<?php echo $existingUser['username']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control"  type="text" placeholder="Email" name="email" id="email" value="<?php echo $existingUser['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        
                    <label for="admin">
                        <input type="radio" value="admin" id="admin" name="role" <?php echo  $admin; ?>>
                        Administrator
                    </label><br>
                        <label class="custom-radio" for="user">
                        <input type="radio" value="user" id="user" name="role" <?php echo $userr; ?>>
                        User</label>
                    </div>
                    <button class="btn btn-mir btn-block"  id="submit" type="submit" name="submit" >Ruaj</button>
                </form>
            </div>
        </div>
        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>

