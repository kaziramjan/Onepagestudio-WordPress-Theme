<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- ========== Favicon ========== -->
        <link href="<?php echo $favicon = onepagestudio_get_option( 'favicon-logo' ); ?>" rel="icon">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
        <!-- ========== Header Section Start ========== -->
        <header class="header" id="intro" style="background-image: url('<?php echo  get_post_meta( get_the_ID(), 'hero-bg-img', true ); ?>');">
            <nav class="navbar">
                <div class="container">
                    <div class="brand-and-toggler">
                        <a href="<?php echo home_url(); ?>" class="logo">
                        <img src="<?php echo $header_logo = onepagestudio_get_option( 'header-logo-upload' ); ?>" alt="">
                        </a>
                        <button type="button" class="navbar-toggler" id="navbar-toggler">
                        <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <?php 
                    wp_nav_menu(array(
                        'menu'                 => '',
                        'container'            => 'div',
                        'container_class'      => 'navbar-collapse',
                        'container_id'         => '',
                        'container_aria_label' => '',
                        'menu_class'           => 'menu',
                        'menu_id'              => '',
                        'echo'                 => true,
                        'fallback_cb'          => 'wp_page_menu',
                        'before'               => '',
                        'after'                => '',
                        'link_before'          => '',
                        'link_after'           => '',
                        'items_wrap'           => '<ul class="navbar-menu">%3$s</ul>',
                        'item_spacing'         => 'preserve',
                        'depth'                => 0,
                        'walker'               => '',
                        'theme_location'       => 'main-menu',
                        'add_li_class'         => 'nav-item ',
                      ));
                  ?>
                </div>
            </nav>
