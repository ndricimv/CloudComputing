        <footer>
            <div class="footeri width80">
                <div class="footerleft">
                    <h2><a href="<?php echo $configs->readConfig('url'); ?>">Cloud Computin</a></h2>
                </div>
                <div class="footercenter">
                    <ul>
                        <?php foreach ($allMenu as $menu): ?>
                            <li><a href="<?php echo $configs->readConfig('url'); echo $menu['vlera']; ?>"><?php echo $menu['Emri']; ?></a></li>
                        <?php endforeach; ?>

                        </a>
                    </ul>
                </div>
                <div class="footerright">
                    <p>Emaili juaj!</p>
                    <div class="subs">
                        <input class="form-control btn flex" type="email" placeholder="Email">
                        <button class="btn btn-mir flex1">Subscribe</button>
                    </div>
                </div>
            </div>
        </footer>