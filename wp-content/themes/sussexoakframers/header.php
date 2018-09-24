<?php
    $page_tile = get_the_title($post->ID);

    if (get_field('meta_page_title')):
        $page_tile = get_field('meta_page_title');
    endif;


?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,initial-scale=1.0"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
    <title><?php echo $page_tile; ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="site-header" id="header">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                        <img src='<?php echo esc_url( get_theme_mod( 'mortgagestudio_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    </a>
                </div>

                <?php
                    wp_nav_menu( array(
                        'menu'              => 'main_menu',
                        'theme_location'    => 'main_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'main-navigation',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new BootstrapNavMenuWalker())
                    );
                ?>

                <?php if( get_theme_mod('mortgagestudio_phone') ): ?>
                    <div class="phone-number navbar-text navbar-right hidden-xs hidden-sm">
                        <span class="hidden-md">Speak to a qualified advisor - </span><a href="tel:<?php echo get_theme_mod( 'mortgagestudio_phone' ); ?>"><?php echo get_theme_mod( 'mortgagestudio_phone' ); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </header>

        <section class="content">
            <main id="main" class="site-main" role="main">