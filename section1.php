<section class="section">
                        <a id="main-content" tabindex="-1"></a>
                        <div  class="block block-system block-system-main-block">
                            <div class="block-inner">
                                <div class="content">
                                    <div class="sections">
                                        <?php 
                                            $years("2021.php" => "2021", "2020.php" => "2019" => "1029.php");    
                                            $posts("2021" => "21content.php", "2020" => "20content", "2019" => "19content");

                                            if ($years_val == $posts_key) {
                                                include $posts_val;
                                            } else {
                                                include null;
                                            } 
                                        
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>