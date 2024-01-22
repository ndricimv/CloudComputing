<?php
$db = new Database();
$menu = new Menu($db);
$allMenu = $menu->readAllMenu();
?>
   <header>
            <div class="topnav">
                <div class="container width80">
                    <div class="topnavl">
                        <div class="topbarw">
                            <p>info@doamin.com</p><p>049123456</p>
                        </div>
                    </div>
                    <div class="topnavr">
                        <div class="topbarw">
                            <p><a href="login.html">Login</a></p><p><a href="login.html">register</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pastro"></div>
            <div class="width80">
                <div class="logo"><img src="http://localhost/CloudComputing/assets/imgs/logow.png" /></div>
                <div class="nav" id="navid">
                    <ul>
                    <?php foreach ($allMenu as $menu): ?>
                        <li><a href="<?php echo $menu['vlera']; ?>"><?php echo $menu['Emri']; ?></a></li>
                        <a href="javascript:void(0);" class="icon" onclick="navrespons()">
                            <i class="fa fa-bars"></i>
                        </a>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="pastro"></div>
            <?php
            if($pageid == 1){
                echo '<div class="slider"><img id="slideri" /></div>';
            }else if($pageid == 2){
                echo ' <div class="breadcrumbs">
                            <div class="width80">
                                <div class="bcl"><h3>Servers</h3></div>
                                <div class="bcr"><img src="assets/imgs/serversbc.jpg" /></div>
                            </div>
                        </div>';
            }else if($pageid == 3){
                echo ' <div class="breadcrumbs">
                        <div class="width80">
                            <div class="bcl"><h3>News</h3></div>
                            <div class="bcr"><img src="assets/imgs/contactbc.jpg" /></div>
                        </div>
                    </div>';
            }
            else if($pageid == 4){
                echo ' <div class="breadcrumbs">
                <div class="width80">
                    <div class="bcl"><h3>Kontakt</h3></div>
                    <div class="bcr"><img src="assets/imgs/contactbc.jpg" /></div>
                </div>
            </div>';
            }
            else{
              
            }
            ?>
            
           
        </header>
