<?php
include_once 'assets/config/config.php';
include_once 'assets/config/functions.php';
include_once 'assets/config/menu.php';
include_once 'assets/config/user.php';
include_once 'assets/config/contacts.php';
$db = new Database();
$user = new User($db);
$contacts = new Contacts($db);
$pageid = 4;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $mesazhi = $_POST['mesazhi'];

    $contacts->createContact($emri, $mbiemri, $email, $mesazhi);

    header('Location: contact.php');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing - Contact</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container front-page">
    <?php include "header.php" ?>   
        <div class="contactp width65">
            <div class="contacta">
                <div class="atitle"><h3>Lokacioni 1</h3></div>
                <div class="adresa">
                    <address class="s1">
                        <span><i class="fa fa-map-marker fa-lg"></i><?php echo $configs->readConfig('Adresa'); ?></span>
                        <span><i class="fa fa-phone fa-lg"></i><?php echo $configs->readConfig('telefoni'); ?></span>
                        <span><i class="fa fa-envelope fa-lg"></i><?php echo $configs->readConfig('email'); ?></span>
                    </address>
                </div>
                <div class="atitle"><h3>Lokacioni 2</h3></div>
                <div class="adresa">
                    <address class="s1">
                        <span><i class="fa fa-map-marker fa-lg"></i><?php echo $configs->readConfig('Adresa'); ?></span>
                        <span><i class="fa fa-phone fa-lg"></i><?php echo $configs->readConfig('telefoni'); ?></span>
                        <span><i class="fa fa-envelope fa-lg"></i><?php echo $configs->readConfig('email'); ?></span>
                    </address>
                </div>
            </div>
            <div class="contacta">
                <div class="atitle"><h3>Dergo Email</h3></div>
                <div class="kontaktforma">
                    <form name="kontaktforma" class="kotaktforma"  method="post" id="kontaktforma">
                        <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                        <div class="form-group njerresht">
                            <input class="form-control" type="text" placeholder="Emri" id="emri" name="emri">
                            <p class="fomrerror" id="emrigabim"></p>
                        </div>
                        <div class="form-group njerresht">
                            <input class="form-control" type="text" placeholder="Mbiemri" id="mbiemri" name="mbiemri">
                            <p class="fomrerror" id="mbiemrigabim"></p>
                        </div>
                        <div class="form-group njerresht">
                            <input class="form-control " type="text" placeholder="Email" id="email" name="email">
                            <p class="fomrerror" id="emailgabim"></p>
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control" type="text" placeholder="Mesazhi...." id="mesazhi" name="mesazhi"></textarea>
                            <p class="fomrerror" id="mesazhigabim"></p>
                        </div>
                        <button class="btn btn-mir btn-block" onclick="return validimikontakt()" class="kotaktforma"   type="submit" name="submit">Dergo</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="pastro"></div>
        <?php include "footer.php" ?>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>