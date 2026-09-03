<div class="header-section">
    <ul style="display:flex;justify-content:space-between">
        <li>
            <?php
               $comp_logo = get_field('company_logo');
            ?>
            <?php if($comp_logo): ?>
            <img src="<?php echo $comp_logo['url']; ?>" alt="" width="100" height="100" style="margin-top:-35px;">
            <?php endif;?>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/Deluxe-logo.png" alt="company logo"> -->
        </li>
        <li class="nav-item has-dropdown">
            <a href=""><?php the_field('nav_item1'); ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="" class="nav-arrow">
             
            </a>
        </li>
        <li class="nav-item has-dropdown">
            <a href=""><?php the_field('nav_item2') ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="" class="nav-arrow">
            </a>
        </li>
        <li class="nav-item has-dropdown">
            <a href=""><?php the_field('nav_item3') ?></a>
        </li>
        <li class="nav-item has-dropdown">
            <a href=""><?php the_field('nav_item4') ?></a>
        </li>
        <li class="nav-item has-dropdown">
            <a href=""><?php the_field('nav_item5') ?></a>
        </li>
        <li class="nav-item has-dropdown">
            <a href=""><?php the_field('nav_item6') ?></a>
        </li>
        <li>
            <a href=""><span class=""><img src=" <?php echo get_template_directory_uri(); ?>/images/call-logo.svg" alt="">
        <?php the_field('nav_phone') ?></span><span style="color:white">sdf</span></a>
            <span style="border-left:1px solid black;color:white">sdf</span>
            <button style="border:1px solid black;width:100px;height:30px;
            border-radius:20px" class="header-login">
            <?php 
                $avatar = get_field('nav_login_avatar');
                    
             ?>
             <?php if($avatar):?>
                <!-- <img src="<?php echo esc_url($avatar['url']); ?>" alt=""> -->
            <?php endif;?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/boxicons_user-filled.svg" alt="">
            <!-- Login -->
             <?php the_field('login_button_text'); ?>
        </button>
        </li>
        
    </ul>
    
</div>