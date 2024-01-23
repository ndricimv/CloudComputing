<?php
include_once 'assets/config/config.php';
include_once 'assets/config/servers.php';
include_once 'assets/config/user.php';

$pageid = 0;
$db = new Database();
$user = new User($db);

if($_SERVER['REQUEST_METHOD'] === "POST"){ 
    if (isset($_POST["login"])) {
        // Kontrollo nese forma eshte derguar
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['shfrytezuesi'];
            $password = $_POST['fjalekalimil'];

            // Kontrollo te dhenat e hyrjes
            $user_id = $user->authenticateUser($username, $password);

            if ($user_id) {
                // Nese autentikimi eshte i suksesshem, krijo sesion dhe ridrejto
                session_start();
                $_SESSION['user_id'] = $user_id;
                header('Location: /CloudComputing/admin/servers.php');
                exit();
            } else {
                // Nese autentikimi deshton, shfaq mesazh
                $error_message = "Shfrytezuesi ose fjalekalimi gabim!";
            }
        }
    } elseif (isset($_POST["register"])) {
        // Kontrollo nese forma eshte derguar
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $emri = $_POST['emri'];
            $mbiemri = $_POST['mbiemri'];
            $email = $_POST['email'];
            $username = $_POST['email'];
            $password = $_POST['fjalekalimi'];
            $confirm_password = $_POST['pfjalekalimi'];
            

            // Validimi i te dhenave ne front-end mund te behet ne JavaScript,
            // por eshte gjithashtu e rendesishme te validohen edhe ne back-end.

            // Kontrollo nese fjalëkalimet përputhen
            if ($password !== $confirm_password) {
                $error_message = "Fjalekalimi nuk perputher, provo perseri!";
            } else {
                // Hash fjalëkalimin
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                // Shto përdoruesin në bazën e të dhënave
                $result = $user->registerUser($emri, $mbiemri,$username, $hashed_password, $email);

                if ($result) {
                    // Nëse regjistrimi është i suksesshëm, ridrejto në faqen e hyrjes
                    header('Location: sukseshem.php');
                    exit();
                } else {
                    // Nëse ka ndonjë problem, shfaq mesazh gabimi
                    $error_message = "Regjistrimi deshtoj, provo perseri!";
                }
            }
        }
    } else {
        // throw an error page/message
        die(" >>> 400: Bad Request");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing - Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-page">
        <div class="login">
            <div class="loginheader">
                <a href="index.html"><img src="assets/imgs/logo.png" /></a>
                <div class="atitle"><h2>Login to Managment Dashboard</h2></div>
            </div>
            <?php if (isset($error_message)): ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <div class="loginform" id="loginform">
                <form name="loginforma" action="" onsubmit="return validimiforml()" method="post" id="login">
                    <p style="margin:20px 0 20px 0">Jepni te dhenat per tu kycur</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Shfrytezuesi" name="shfrytezuesi" id="shfrytezuesi">
                        <p class="fomrerror" id="shfrytezuesigabim"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Fjalekalimi" name="fjalekalimil" id="fjalekalimil">
                        <p class="fomrerror" id="fjalekalimigabiml"></p>
                    </div>
                    <button class="btn btn-mir btn-block" type="submit" name="login" onclick="return validimiforml()">Kycu</button>
                    <a href="#" onclick="return registerform()" class="btn btn-thjesht btn-block" id="regjistrohu">Regjistrohu</a>
                </form>
            </div>
            <div class="registerform" id="registerform">
                <form name="registerforma"  action="" onsubmit="validimiform()" method="post" id="register">
                    <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Emri" name="emri" id="emri" require>
                        <p class="fomrerror" id="emrigabim"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Mbiemri" name="mbiemri" id="mbiemri">
                        <p class="fomrerror" id="mbiemrigabim"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Email" name="email" id="email">
                        <p class="fomrerror" id="emailgabim"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Fjalekalimi" name="fjalekalimi" id="fjalekalimi">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Perserit Fjalekalimi" name="pfjalekalimi" id="pfjalekalimi">
                        <p class="fomrerror" id="fjalekalimigabim"></p>
                    </div>

                    <button class="btn btn-mir btn-block" type="submit" name="register" onclick="return validimiform()">Regjistrohu</button>
                
                    <a href="#" onclick="loginform()" class="btn btn-thjesht btn-block" id="login">ose Kycu</a>
                </form>
            </div>
        </div>
    </div>

    <div class="container-login"></div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>