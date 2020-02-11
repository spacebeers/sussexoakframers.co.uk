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
    <header class="site-header" id="header">
        <div class="container">
            <ul class="social-list">
                <li>
                    <a href="<?php echo do_shortcode("[contact_facebook]"); ?>" target="_black">
                        <svg width="22px" height="22px" viewBox="0 0 32 32">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Group" transform="translate(-1.000000, 0.000000)" fill="currentColor">
                                    <path d="M31.6667,0 L2.3337,0 C1.5967,0 0.9997,0.597 0.9997,1.333 L0.9997,30.667 C0.9997,31.403 1.5967,32 2.3337,32 L17.9997,32 L17.9997,20 L13.9997,20 L13.9997,15 L17.9997,15 L17.9997,11 C17.9997,6.867 20.6167,4.833 24.3037,4.833 C26.0697,4.833 27.5877,4.965 28.0297,5.023 L28.0297,9.343 L25.4727,9.344 C23.4677,9.344 22.9997,10.297 22.9997,11.695 L22.9997,15 L27.9997,15 L26.9997,20 L22.9997,20 L23.0797,32 L31.6667,32 C32.4027,32 32.9997,31.403 32.9997,30.667 L32.9997,1.333 C32.9997,0.597 32.4027,0 31.6667,0" id="Fill-3"></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo do_shortcode("[contact_instagram]"); ?>" target="_black">
                        <svg version="1.1" id="Layer_1" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <path fill="currentColor" d="M28.2,0H3.8C1.7,0,0,1.7,0,3.8v24.4C0,30.3,1.7,32,3.8,32h24.4c2.1,0,3.8-1.7,3.8-3.8V3.8
                            C32,1.7,30.3,0,28.2,0z M24,4h3c0.6,0,1,0.4,1,1v3c0,0.6-0.4,1-1,1h-3c-0.6,0-1-0.4-1-1V5C23,4.4,23.4,4,24,4z M16,9.9
                            c3.4,0,6.2,2.7,6.2,6.1c0,3.4-2.8,6.1-6.2,6.1c-3.4,0-6.2-2.7-6.2-6.1C9.9,12.6,12.6,9.9,16,9.9z M28,29H4c-0.6,0-1-0.4-1-1V13h4
                            c-0.5,0.8-0.7,2.1-0.7,3c0,5.4,4.4,9.7,9.7,9.7c5.4,0,9.7-4.4,9.7-9.7c0-0.9-0.1-2.3-0.8-3h4v15C29,28.6,28.6,29,28,29z"/>
                        </svg>
                    </a>
                </li>
            </ul>


            <?php if( get_theme_mod('sussexoakframers_phone') ): ?>
                <a href="tel:<?php echo get_theme_mod( 'sussexoakframers_phone' ); ?>" class="phone-button">
                    <svg width="25px" height="25px" viewBox="0 0 32 32" version="1.1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Icon-Set" transform="translate(-256.000000, -307.000000)" fill="currentColor">
                                <path d="M285.635,315.737 C283.935,318.967 280.16,323.939 277,327.218 C273.357,331.158 264.769,336.546 264.769,336.546 C264.106,336.894 262.266,336.92 261.76,336.415 L259.929,334.589 C259.551,333.957 259.381,333.225 259.929,332.763 L263.592,330.023 C264.212,329.604 264.917,329.519 265.423,330.023 L267.68,332.273 C268.211,331.9 276.689,326.344 281.405,318.695 L279.094,316.39 C278.588,315.886 278.674,315.182 279.094,314.563 L281.841,310.911 C282.347,310.236 283.167,310.406 283.672,310.911 L285.504,312.737 C286.222,313.411 286.014,314.982 285.635,315.737 L285.635,315.737 Z M287.073,311.433 L284.195,308.563 C283.401,307.77 282.112,307.77 281.317,308.563 L277,314.303 C276.341,315.274 276.206,316.38 277,317.173 L278.762,318.93 C277.456,320.68 275.888,322.588 274.123,324.348 C272.127,326.338 269.907,328.147 267.911,329.633 L266.208,327.936 C265.414,327.143 264.305,327.277 263.33,327.936 L257.574,332.241 C256.609,332.906 256.779,334.318 257.574,335.111 L260.452,337.98 C262.042,339.566 264.109,339.058 266.208,337.98 C266.208,337.98 272.561,334.424 278,329 C283.116,323.898 287.073,317.173 287.073,317.173 C287.898,314.91 288.663,313.018 287.073,311.433 L287.073,311.433 Z" id="Fill-179"></path>
                            </g>
                        </g>
                    </svg>
                </a>
            <?php endif; ?>

            <a class="site-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                <img src='<?php echo esc_url( get_theme_mod( 'sussexoakframers_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
            </a>

            <button aria-label="Click to open menu" class="menu-button" id="nav">
                <svg width="20px" height="20px" viewBox="0 0 20 18">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Icon-Set" transform="translate(-210.000000, -887.000000)" fill="currentColor">
                            <path d="M229,895 L211,895 C210.448,895 210,895.448 210,896 C210,896.553 210.448,897 211,897 L229,897 C229.552,897 230,896.553 230,896 C230,895.448 229.552,895 229,895 L229,895 Z M229,903 L211,903 C210.448,903 210,903.448 210,904 C210,904.553 210.448,905 211,905 L229,905 C229.552,905 230,904.553 230,904 C230,903.448 229.552,903 229,903 L229,903 Z M211,889 L229,889 C229.552,889 230,888.553 230,888 C230,887.448 229.552,887 229,887 L211,887 C210.448,887 210,887.448 210,888 C210,888.553 210.448,889 211,889 L211,889 Z" id="Fill-70"></path>
                        </g>
                    </g>
                </svg>
            </button>

            <nav id="main-menu">
                <?php wp_nav_menu(array(
                    'theme_location'  => 'main_menu',
                    'container'       => 'ul',
                    'depth'           => 2
                )); ?>

                <button aria-label="Click to close menu" id="close">
                    <svg width="16px" height="16px" viewBox="0 0 16 16">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M8,9.41421356 L2.34314575,15.0710678 C1.95282281,15.4613908 1.31996224,15.4620979 0.928932188,15.0710678 C0.538609245,14.6807449 0.538609245,14.0471772 0.928932188,13.6568542 L6.58578644,8 L0.928932188,2.34314575 C0.538609245,1.95282281 0.537902138,1.31996224 0.928932188,0.928932188 C1.31925513,0.538609245 1.95282281,0.538609245 2.34314575,0.928932188 L8,6.58578644 L13.6568542,0.928932188 C14.0471772,0.538609245 14.6807449,0.538609245 15.0710678,0.928932188 C15.4620979,1.31996224 15.4613908,1.95282281 15.0710678,2.34314575 L9.41421356,8 L15.0710678,13.6568542 C15.4613908,14.0471772 15.4613908,14.6807449 15.0710678,15.0710678 C14.6800378,15.4620979 14.0471772,15.4613908 13.6568542,15.0710678 L8,9.41421356 Z" id="Combined-Shape" fill="currentColor" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <section class="content">
        <main id="main" class="site-main" role="main">

