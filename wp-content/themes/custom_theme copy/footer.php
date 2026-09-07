    

        <div id="footer-main-div">
            
            <div>
                <div id="footer-logo" class="footer-logo">
                    
                         <?php 

                         $footer_logo = get_field('footer_logo')['url'];
                         
                         ?> 
                         <?php if($footer_logo):?>
                            <img src="<?php echo esc_url($footer_logo); ?>" alt="">
                        <?php else:?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="">
                        <?php endif; ?>
                    
                </div>
                <div>
                    <ul>
                        <li style="width:380px;">
                            <a href="" style="color: #888888;">
                                <span class="footer-contact-icon">
                                    <?php 
                                        $address_icon = get_field('communication_section')['address_icon']['url'];
                                        
                                    ?>
                                    <?php if($address_icon): ?>
                                        <img src="<?php echo esc_url($address_icon); ?>" alt="">
                                    <?php else:?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/location-icon.svg" alt="">
                                    <?php endif;?>
                                </span>
                                <?php echo get_field('communication_section')['address']; ?>
                            <!-- Deluxe Passport Express 57 Lee Ave, Brooklyn, -->
                             
                            <br>
                            <!-- <span style="margin-left:35px;">NY 11211</span> -->
                        </a>
                        </li>
                        <br>
                        <li><a href="" style="color: #888888;">
                            <span class="footer-contact-icon">
                                <?php 
                                $phone_icon = get_field('communication_section')['phone_icon']['url'];
                                
                                 ?>
                                 <?php if($phone_icon): ?>
                                    <img src="<?php echo esc_url($phone_icon); ?>" alt="">
                                 <?php else:?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-call.svg" alt="">
                                 <?php endif; ?>
                                 
                            </span>
                            <!-- 718-387-5441 -->
                             <?php echo get_field('communication_section')['phone']?>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="" style="color: #888888;">
                                <span class="footer-contact-icon">
                                    <?php $email_icon = get_field('communication_section')['email_icon']['url']; ?>
                                    <?php if($email_icon): ?>
                                        <img src="<?php echo esc_url($email_icon) ?>" alt="">
                                    <?php else:?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/footer-sms.svg" alt="">
                                    <?php endif;?>
                                </span>
                                <?php echo get_field('communication_section')['email'] ?>
                                <!-- info@deluxepassportexpress.com -->
                            </a>
                        </li>
            
                    </ul>
                </div>
                
    
            </div>
    
            <div style="">
                <br>
                <h4 id="quick-links-menu">
                    <!-- Quick Links -->
                     <?php echo get_field('footer_title'); ?>
                </h4>
                <br>
                <div id="footer-menu-items-div">
                    <div>
    
                        <ul class="footer-menu-items">
                            <li><a href=""><?php echo get_field('footer_navigation1')['nav_item1']; ?></a></li>
                            <li><a href=""><?php echo get_field('footer_navigation1')['nav_item2']; ?></a></li>
                            <li><a href=""><?php echo get_field('footer_navigation1')['nav_item3']; ?></a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="footer-menu-items">
                                <li><a href=""><?php echo get_field('footer_navigation2')['nav_item1']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation2')['nav_item2']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation2')['nav_item3']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation2')['nav_item4']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation2')['nav_item5']; ?></a></li>
                        </ul>
                    </div>
                    <div>
    
                            <ul class="footer-menu-items">
                                <li><a href=""><?php echo get_field('footer_navigation3')['nav_item1']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation3')['nav_item2']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation3')['nav_item3']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation3')['nav_item4']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation3')['nav_item5']; ?></a></li>
                                <li><a href=""><?php echo get_field('footer_navigation3')['nav_item6']; ?></a></li>
                                
                            </ul>
                    </div>
    
                    <div>
                        <ul class="footer-menu-items">
                            <li><a href=""><?php echo get_field('footer_navigation4')['nav_item1']; ?></a></li>
                            <li><a href=""><?php echo get_field('footer_navigation4')['nav_item2']; ?></a></li>
                            <li><a href=""><?php echo get_field('footer_navigation4')['nav_item3']; ?></a></li>
                            <li><a href=""><?php echo get_field('footer_navigation4')['nav_item4']; ?></a></li>
                            <li><a href=""><?php echo get_field('footer_navigation4')['nav_item5']; ?></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            
            
            
        </div>
        <div id="footer-main-div2">
            
            <div id="footer-main-div2-content">
                <div>
                    <?php echo get_field('copy_right_section')['copy_right_text']; ?>
                    <!-- © 2004 - 2026 Deluxe Passport Express, Brooklyn, New York -->
                </div>
                <div>
                    <a href="" id="fb-icon">
                        <?php $icon1 = get_field('copy_right_section')['icon1']['url'];?>
                        <?php if($icon1): ?>
                            <img src="<?php echo esc_url($icon1); ?>" alt="">
                        <?php else:?>
                            <img id="fb-img" src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="">
                        <?php endif;?>
                    </a>
                    <a href="" id="youtube-icon">
                        <?php $icon2 = get_field('copy_right_section')['icon2']['url'];?>
                        <?php if($icon2): ?>
                            <img src="<?php echo esc_url($icon2); ?>" alt="">
                        <?php else:?>
                            <img id="youtube-img" src="<?php echo get_template_directory_uri(); ?>/images/youtub.png" alt="">
                        <?php endif;?>
                    </a>
                    <a href="" id="insta-icon">
                        <?php $icon3 = get_field('copy_right_section')['icon3']['url'];?>
                        <?php if($icon3): ?>
                            <img src="<?php echo esc_url($icon3); ?>" alt="">
                        <?php else:?>
                            <img id="insta-img" src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="">
                        <?php endif;?>
                    </a>
                    <a href="" id="music-icon">
                        <?php $icon4 = get_field('copy_right_section')['icon4']['url'];?>
                        <?php if($icon2): ?>
                            <img src="<?php echo esc_url($icon4); ?>" alt="">
                        <?php else:?>
                            <img id="music-img" src="<?php echo get_template_directory_uri(); ?>/images/music.png" alt="">
                        <?php endif;?>
                    </a>
                    <a href="" id="notification-icon">
                        <?php $icon5 = get_field('copy_right_section')['icon5']['url'];?>
                        <?php if($icon5): ?>
                            <img src="<?php echo esc_url($icon5); ?>" alt="">
                        <?php else:?>
                            <img id="notification-img" src="<?php echo get_template_directory_uri(); ?>/images/notification.png" alt="">
                        <?php endif;?>
                    </a>
                </div>
    
            </div>
        </div>
    


 <script src="./Script.js"></script>
</div>
</body>
</html>