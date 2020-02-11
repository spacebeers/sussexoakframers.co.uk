<?php
    include('classes/shortcodes.php');

    // Menus
	register_nav_menus( array(
        'main_menu' => 'Main menu',
        'footer_menu' => 'Footer menu'
	) );

    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

    function special_nav_class ($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        return $classes;
    }

    // Fonts
    function wpb_add_google_fonts() {
        wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Junge', false );
    }

    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

    // Vendor scripts
    function sussexoakframers_theme_name_scripts() {
        wp_enqueue_script( 'app', get_template_directory_uri() . '/scripts/app.js', array ( 'jquery' ), 1.1, true);
        wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/vendor/lightbox2/dist/js/lightbox.min.js', array ( 'jquery' ), 1.1, true);
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/vendor/slick/slick.min.js', array ( 'jquery' ), 1.1, true);
        wp_enqueue_script( 'lazy', get_template_directory_uri() . '/vendor/jquery.lazy.min.js', 1.1, true);
    }
    add_action( 'wp_enqueue_scripts', 'sussexoakframers_theme_name_scripts' );

    // Vendor styles
    function sussexoakframers_theme_name_styles() {
        wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/vendor/lightbox2/dist/css/lightbox.min.css', false);
        //wp_enqueue_style( 'slider', get_template_directory_uri() . '/vendor/tiny-slider/tiny-slider.css', false);
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/vendor/slick/slick.css', false);
        wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/vendor/slick/slick-theme.css', false);
    }
    add_action( 'wp_enqueue_scripts', 'sussexoakframers_theme_name_styles' );

	// Post support
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
    add_post_type_support( 'page', 'excerpt' );

	// Theme customisers
	function sussexoakframers_theme_customizer( $wp_customize ) {
		// logo
        $wp_customize->add_section( 'sussexoakframers_logo_section' , array(
			'title'       => __( 'Logo', 'sussexoakframers' ),
			'priority'    => 30,
			'description' => 'Upload a logo to replace the default site name and description in the header',
		));

		$wp_customize->add_setting( 'sussexoakframers_logo' );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sussexoakframers_logo', array(
		    'label'    => __( 'Logo', 'sussexoakframers' ),
		    'section'  => 'sussexoakframers_logo_section',
		    'settings' => 'sussexoakframers_logo',
		)));

        // contact
        $wp_customize->add_section( 'sussexoakframers_contact_section' , array(
			'title'       => __( 'Contact', 'sussexoakframers' ),
			'priority'    => 30,
			'description' => 'Add the company contact details in here',
		));

		$wp_customize->add_setting( 'sussexoakframers_address' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sussexoakframers_address', array(
		    'label'    => __( 'Address', 'sussexoakframers' ),
		    'section'  => 'sussexoakframers_contact_section',
		    'settings' => 'sussexoakframers_address',
            'type'			 => 'textarea'
		)));

		$wp_customize->add_setting( 'sussexoakframers_phone' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sussexoakframers_phone', array(
		    'label'    => __( 'Phone', 'sussexoakframers' ),
		    'section'  => 'sussexoakframers_contact_section',
		    'settings' => 'sussexoakframers_phone',
            'type'			 => 'text'
        )));

		$wp_customize->add_setting( 'sussexoakframers_mobile' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sussexoakframers_mobile', array(
		    'label'    => __( 'Mobile', 'sussexoakframers' ),
		    'section'  => 'sussexoakframers_contact_section',
		    'settings' => 'sussexoakframers_mobile',
            'type'			 => 'text'
		)));

		$wp_customize->add_setting( 'sussexoakframers_email' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sussexoakframers_email', array(
		    'label'    => __( 'Email', 'sussexoakframers' ),
		    'section'  => 'sussexoakframers_contact_section',
		    'settings' => 'sussexoakframers_email',
            'type'			 => 'text'
		)));

		$wp_customize->add_setting( 'sussexoakframers_facebook' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sussexoakframers_facebook', array(
		    'label'    => __( 'Facebook', 'sussexoakframers' ),
		    'section'  => 'sussexoakframers_contact_section',
		    'settings' => 'sussexoakframers_facebook',
            'type'			 => 'text'
        )));

		$wp_customize->add_setting( 'sussexoakframers_instagram' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sussexoakframers_instagram', array(
		    'label'    => __( 'Instagram', 'sussexoakframers' ),
		    'section'  => 'sussexoakframers_contact_section',
		    'settings' => 'sussexoakframers_instagram',
            'type'			 => 'text'
		)));

        $wp_customize->add_section( 'sussexoakframers_pages_section' , array(
			'title'       => __( 'Page links', 'sussexoakframers' ),
			'priority'    => 30,
			'description' => 'Set links to pages here',
		));

        $wp_customize->add_setting( 'sussexoakframers_pages_contact_link', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sussexoakframers_sanitize_dropdown_pages',
        ) );

        $wp_customize->add_control( 'sussexoakframers_pages_contact_link', array(
            'type' => 'dropdown-pages',
            'section' => 'sussexoakframers_pages_section', // Add a default or your own section
            'label' => __( 'Set Contact page' ),
            'description' => __( 'Select a page to use as the contacts link.' ),
        ) );

        function sussexoakframers_sanitize_dropdown_pages( $page_id, $setting ) {
            // Ensure $input is an absolute integer.
            $page_id = absint( $page_id );

            // If $page_id is an ID of a published page, return it; otherwise, return the default.
            return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
        }
	}

	add_action( 'customize_register', 'sussexoakframers_theme_customizer' );


    // Sidebars

    /**
    * Register widgetized area and update sidebar with default widgets
    */
    function sussexoakframers_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Footer area one', 'sussexoakframers' ),
            'id' => 'footer-area-one-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));

        register_sidebar( array(
            'name' => __( 'Footer area two', 'sussexoakframers' ),
            'id' => 'footer-area-two-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));

        register_sidebar( array(
            'name' => __( 'Footer area three', 'sussexoakframers' ),
            'id' => 'footer-area-three-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));

        register_sidebar( array(
            'name' => __( 'Footer area four', 'sussexoakframers' ),
            'id' => 'footer-area-four-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));

        register_sidebar( array(
            'name' => __( 'Footer information area', 'sussexoakframers' ),
            'id' => 'footer-information-area-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));
    }
    add_action( 'widgets_init', 'sussexoakframers_widgets_init' );

    // Disable posts menu as we don't need it
    function remove_posts_menu() {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    }
    add_action('admin_init', 'remove_posts_menu');

    flush_rewrite_rules();


?>