<?php
include_once 'assets/config/config.php';
include_once 'assets/config/menu.php';
include_once 'assets/config/user.php';
$db = new Database();
$user = new User($db);
$pageid = 4;
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
                        <span><i class="fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                        <span><i class="fa fa-phone fa-lg"></i>+123 456 789 12</span>
                        <span><i class="fa fa-envelope fa-lg"></i>email@doamin.com</span>
                    </address>
                </div>
                <div class="atitle"><h3>Lokacioni 2</h3></div>
                <div class="adresa">
                    <address class="s1">
                        <span><i class="fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                        <span><i class="fa fa-phone fa-lg"></i>+123 456 789 12</span>
                        <span><i class="fa fa-envelope fa-lg"></i>email@doamin.com</span>
                    </address>
                </div>
            </div>
            <div class="contacta">
                <div class="atitle"><h3>Dergo Email</h3></div>
                <div class="kontaktforma">
                    <form name="kontaktforma" class="kotaktforma" action="/kontakt" onsubmit="return validimikontakt()" method="post" id="kontaktforma">
                        <p style="margin:20px 0 20px 0">Jepni te dhenat per tu regjistruar</p>
                        <div class="form-group njerresht">
                            <input class="form-control" type="text" placeholder="Emri" id="emri">
                            <p class="fomrerror" id="emrigabim"></p>
                        </div>
                        <div class="form-group njerresht">
                            <input class="form-control" type="text" placeholder="Mbiemri" id="mbiemri">
                            <p class="fomrerror" id="mbiemrigabim"></p>
                        </div>
                        <div class="form-group njerresht">
                            <input class="form-control " type="text" placeholder="Email" id="email">
                            <p class="fomrerror" id="emailgabim"></p>
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control" type="text" placeholder="Mesazhi...."></textarea>
                        </div>
                        <button class="btn btn-mir btn-block" id="submit" type="submit" name="submit" onclick="return validimikontakt()">Dergo</button>
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