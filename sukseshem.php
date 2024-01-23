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
                <p>Regjistrimi ishte i sukseshem, provo te kyces</p><br>
                <a href="login.php"><button class="btn btn-mir btn-block" name="login" onclick="return validimiforml()">Kycu</button></a>
            </div>
        </div>
    </div>
    <div class="container-login"></div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>