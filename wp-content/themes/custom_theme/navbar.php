<div class="header-section">

    <!-- ========================= -->
    <!-- LOGO -->
    <!-- ========================= -->

    <div class="logo-area">

        <?php
        $comp_logo = get_field('company_logo');
        ?>

        <?php if ($comp_logo): ?>

            <a href="<?php echo esc_url(home_url('/')); ?>">

                <img
                    src="<?php echo esc_url($comp_logo['url']); ?>"
                    alt="<?php echo esc_attr($comp_logo['alt']); ?>"
                    width="100"
                    height="100"
                    style="margin-top:-35px;"
                >

            </a>

        <?php endif; ?>

    </div>


    <!-- ========================= -->
    <!-- WORDPRESS ADMIN MENU -->
    <!-- ========================= -->

    <nav class="menu-area">

        <?php
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'container'      => false,
            'menu_class'     => 'main-menu',
            'fallback_cb'    => false
        ]);
        ?>

    </nav>


    <!-- ========================= -->
    <!-- PHONE + LOGIN -->
    <!-- ========================= -->

    <div class="right-area">

        <a href="tel:<?php the_field('nav_phone'); ?>" class="phone-link">

            <img
                src="<?php echo get_template_directory_uri(); ?>/images/call-logo.svg"
                alt="Phone"
            >

            <?php the_field('nav_phone'); ?>

        </a>


        <span class="login-separator"></span>


        <button class="header-login">

            <img
                src="<?php echo get_template_directory_uri(); ?>/images/boxicons_user-filled.svg"
                alt="User"
            >

            <?php the_field('login_button_text'); ?>

        </button>

    </div>

</div>