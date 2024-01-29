<?php
session_start();
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
                                        $emri = '<p>Pershendetje ' .$user->readEmri('emri', $user_id) .'<p>';
                                        $dashboard = '<p><a href="' . $configs->readConfig('url') . '/admin/dashboard.php">Dashboard</a></p>';

                                        $logout = '<p><a href="' . $configs->readConfig('url') . '/logout.php">Logout</a></p>';

                                        if ($user_role === 'admin') {
                                            echo $emri ;
                                            echo $dashboard;
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
                        <?php foreach ($allMenu as $menu): ?>
                            <li><a href="<?php echo $configs->readConfig('url'); echo $menu['vlera']; ?>"><?php echo $menu['Emri']; ?></a></li>
                            
                        <?php endforeach; ?>
                        <a href="javascript:void(0);" class="icon" onclick="navrespons()">
                            <i class="fa fa-bars"></i>
                        </a>
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
