<?php

$db = new Database();
$menu = new Menu($db);
$allMenu = $menu->readAllMenu();
if (isset($_SESSION['user_id'])) {
$user = new User($db);
} else {
                                
};
?>
   <header>
            <div class="topnav">
                <div class="container width80">
                    <div class="topnavl">
                        <div class="topbarw">
                            <p><?php echo $configs->readConfig('email');?></p><p><?php echo $configs->readConfig('telefoni');?></p>
                        </div>
                    </div>
                    <div class="topnavr">
                        <div class="topbarw">
                            
                                <?php
                                    if (isset($_SESSION['user_id'])) {
                                        $user_id = $_SESSION['user_id'];
                                        $user_role = $user->checkUserRole($user_id);
                                        $emri = '<p>Pershendetje ' .$user->readEmri('emri',$user_id) .'<p>';

                                        $logout = '<p><a href="' . $configs->readConfig('url') . '/logout.php">Logout</a></p>';

                                        if ($user_role === 'admin') {
                                            echo $emri ;
                                            echo $logout;
                                            
                                        } elseif ($user_role === 'user') {
                                            echo $emri ;
                                            echo $logout;
                                            
                                        } else {
                                            echo '<p><a href="' . $configs->readConfig('url') . '/login.php">Login</a></p>';
                                            echo '<p><a href="' . $configs->readConfig('url') . '/login.php">Register</a></p>';
                                        }
                                    }else {
                                        echo '<p><a href="' . $configs->readConfig('url') . '/login.php">Login</a></p>';
                                        echo '<p><a href="' . $configs->readConfig('url') . '/login.php">Register</a></p>';
                                    }
                                ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="pastro"></div>
            <div class="width80">
                <div class="logo"><a href="<?php echo $configs->readConfig('url'); ?>"><img src="<?php echo $configs->readConfig('imgurl');?>/logow.png" /></a></div>
                <div class="nav" id="navid">
                    <ul>
                        <?php 
                            if (isset($_SESSION['user_id'])) {
                                $user_id = $_SESSION['user_id'];
                                $user_role = $user->checkUserRole($user_id);

                                if ($user_role === 'admin') {
                                echo '<li><a href="'. $configs->readConfig('url').'admin/servers.php">Servers</a></li>
                                <li><a href="'. $configs->readConfig('url').'admin/news.php">News</a></li>
                                <li><a href="'. $configs->readConfig('url').'admin/faqet.php">Abut US</a></li>
                                <li><a href="'. $configs->readConfig('url').'admin/contacts.php">Contact</a></li>
                                <li><a href="'. $configs->readConfig('url').'admin/users.php">Users</a></li>
                                <li><a href="'. $configs->readConfig('url').'admin/siteconfig.php">Site Congif</a></li>
                                <li><a href="'. $configs->readConfig('url').'admin/porosit.php">Porosit</a></li>
                                <li><a href="'. $configs->readConfig('url').'/admin/menu.php">Menus</a></li>
                                <a href="javascript:void(0);" class="icon" onclick="navrespons()">
                                <i class="fa fa-bars"></i>
                            </a>';
                                } else {
                                
                                }
                            } 
                        ?>
                        
               
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
