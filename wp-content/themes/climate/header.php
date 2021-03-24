<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class( get_user_role() ); ?>>

    <?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

    ?>

    <div id="page" class="site">
     <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
     <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
     <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                 <div class="logo_wrapper">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-ellipsis-v"></i>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'       => 'div',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

                <div class="nav_right">

                    <div class="language_div">
                        <?php // echo do_shortcode('[language-switcher]'); ?>
                        <?php //echo do_shortcode('[gtranslate]'); ?>
                        <?php // pll_the_languages( array( 'dropdown' => 1 ) ); ?>
                    </div>
                    <div class="dropdown_form">
                        <button class="btnSearch" type="button" data-toggle="collapse" data-target="#HeaderSearch" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/search_icon.svg" />
                        </button>
                        <div class="dropdown_popup collapse multi-collapse" id="HeaderSearch">
                            <form role="search" method="get" id="searchform"
                            class="searchform" action="<?php echo home_url('/'); ?>">
                            <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
                            <input type="text" name="s" placeholder="<?php pll_e('Search content here...'); ?>" value="<?php the_search_query(); ?>" />
                            <input type='hidden' value='917' name='wpessid' />
                            <input type="submit" value="<?php pll_e('Search'); ?>">
                        </form>
                    </div>
                </div>

                <?php global $current_user; wp_get_current_user(); ?>
                <?php if ( is_user_logged_in() ) { ?>


                    <div class="dropdown_form profile">
                        <button class="btnSearch" type="button" data-toggle="collapse" data-target="#HeaderProfile" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <i class="fas fa-user"></i>
                        </button>
                        <div class="dropdown_popup collapse multi-collapse" id="HeaderProfile">
                            <?php // Get URL for Current Lang
                            $account = pll_get_post( 44 );
                            $account_url = get_the_permalink($account);
                            // $logout = pll_get_post( 42 );
                            // $logout_url = get_the_permalink($logout);
                            ?>
                            <ul>
                                <li class="username"><span><?php $display_name = um_user('display_name'); echo $display_name; ?></span></li>
                                <?php /*<li><a href="<?php echo get_site_url(); ?>/user">My Profile</a></li>*/  ?>
                                <li><a href="<?php echo $account_url; ?>"><?php pll_e('My Account'); ?></a></li>
                                <li><a href="<?php echo get_site_url(); ?>/logout"><?php pll_e('Logout'); ?></a></li>
                            </ul>
                        </div>
                    </div>


                <?php }  else { ?>

                 <?php // Get URL for Current Lang
                 $login = pll_get_post( 36 );
                 $login_url = get_the_permalink($login);
                 ?>
                 <ul class="user_menu">
                    <li><a href="<?php echo $login_url; ?>"><?php pll_e('Login'); ?></a></li>
                </ul>

            <?php  } ?>

        </div>

    </nav>
</div>
</header><!-- #masthead -->


<div id="content" class="site-content">

  <?php /*
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<div id="breadcrumbs" class="breadcrumbs"><div class="container"><div class="breadcrumbs_wrap">','</div></div></div>' );
} */ ?>



<div id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs_wrap">
            <?php // bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
            <?php custom_breadcrumbs(); ?>
        </div>
    </div>
</div>



<?php endif; ?>