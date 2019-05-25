<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tailwindcss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class('leading-normal bg-gray-100 text-gray-900'); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tailwindcss' ); ?></a>

    <header id="masthead" class="site-header w-full border-gray-400 border-b bg-white shadow px-6 z-50 header-pin">
        <div class="site-branding flex">
            <?php the_custom_logo(); ?>
            <h1 class="site-title font-bold mr-6"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-black" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <nav id="site-navigation" class="main-navigation mt-4">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="inline-block w-4 h-4">
                        <!-- menu button icon courtesy of FontAwesome -->
                        <!-- license informationL https://fontawesome.com/license -->
                        <!-- icon modified to include title tag -->
                        <svg aria-hidden="true" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title>three horizontal bars</title><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                    </span>
                    <?php esc_html_e( 'Primary Menu', 'tailwindcss' ); ?>
                </button>
                <?php
                wp_nav_menu( array(
                    'menu_id' => 'primary-menu',
                    'items_wrap'=> '%3$s',
                    'walker' => new Nav_Footer_Walker(),
                    'container' => false,
                    'menu_class' => '',
                    'theme_location' => 'menu-1',
                    'fallback_cb' => false,
                ) );
                ?>
            </nav><!-- #site-navigation -->
        </div><!-- .site-branding -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
