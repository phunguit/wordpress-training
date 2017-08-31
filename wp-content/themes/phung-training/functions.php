<?php
add_action('wp_enqueue_scripts', 'registry_style');

function registry_style() {
	global $wp_styles;
	if ( ! is_admin() ) {
		$cssUrl = get_template_directory_uri() . '/css';

		wp_register_style( 'symple_shortcodes_styles', $cssUrl . '/symple_shortcodes_styles.css', array(), '0.1' );
		wp_enqueue_style( 'symple_shortcodes_styles' );

		wp_register_style( 'style', $cssUrl . '/style.css', array(), '0.1' );
		wp_enqueue_style( 'style' );

		wp_register_style( 'responsive', $cssUrl . '/responsive.css', array(), '0.1' );
		wp_enqueue_style( 'responsive' );

		wp_register_style( 'site', $cssUrl . '/site.css', array(), '0.1' );
		wp_enqueue_style( 'site' );

		wp_register_style( 'ie8', $cssUrl . '/ie8.css', array(), '0.1' );
		$wp_styles->add_data('ie8', 'conditional', 'IE 8');
		wp_enqueue_style( 'ie8' );
	}
}

add_action('wp_enqueue_scripts', 'registry_js');

function registry_js() {
    $jsUrl = get_template_directory_uri() . '/js';

    wp_register_script( 'jquery.form.min', $jsUrl . '/jquery.form.min.js', array('jquery'), '0.1', true );
    wp_enqueue_script( 'jquery.form.min' );

    wp_register_script( 'scripts', $jsUrl . '/scripts.js', array('jquery'), '0.1', true );
    wp_enqueue_script( 'scripts' );

    wp_register_script( 'plugins', $jsUrl . '/plugins.js', array('jquery'), '0.1', true );
    wp_enqueue_script( 'plugins' );

    wp_register_script( 'global', $jsUrl . '/global.js', array('jquery'), '0.1', true );
    wp_enqueue_script( 'global' );
}

add_action('wp_footer', 'add_script_code');
function add_script_code() {
    echo '<script type=\'text/javascript\'>
            /*           */
            var wpexLocalize = {
                "mobileMenuOpen" : "Browse Categories",
                "mobileMenuClosed" : "Close navigation",
                "homeSlideshow" : "false",
                "homeSlideshowSpeed" : "7000",
                "UsernamePlaceholder" : "Username",
                "PasswordPlaceholder" : "Password",
                "enableFitvids" : "true"
            };
            /*     */
        </script>';
}

?>