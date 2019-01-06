<?php
    class Shortcodes {
        function __construct() {
            add_shortcode('contact_email',  array($this, 'contact_email_shortcode'));
            add_shortcode('contact_phone',  array($this, 'contact_phone_shortcode'));
            add_shortcode('contact_mobile',  array($this, 'contact_mobile_shortcode'));
            add_shortcode('contact_address',  array($this, 'contact_address_shortcode'));
            add_shortcode('contact_facebook',  array($this, 'contact_facebook_shortcode'));
            add_shortcode('contact_instagram',  array($this, 'contact_instagram_shortcode'));
        }

        function contact_email_shortcode($atts, $content = null) {
            return get_theme_mod( 'sussexoakframers_email', '' );
        }

        function contact_phone_shortcode($atts, $content = null) {
            return get_theme_mod( 'sussexoakframers_phone', '' );
        }

        function contact_mobile_shortcode($atts, $content = null) {
            return get_theme_mod( 'sussexoakframers_mobile', '' );
        }

        function contact_address_shortcode($atts, $content = null) {
            return get_theme_mod( 'sussexoakframers_address', '' );
        }

        function contact_facebook_shortcode($atts, $content = null) {
            return get_theme_mod( 'sussexoakframers_facebook', '' );
        }

        function contact_instagram_shortcode($atts, $content = null) {
            return get_theme_mod( 'sussexoakframers_instagram', '' );
        }
    }

    $shortcodes = new Shortcodes();
?>
