<?php
add_action('wp_enqueue_scripts', 'phung_training_registry_style');

function phung_training_registry_style() {
	global $wp_styles;
	if ( ! is_admin() ) {
		$cssUrl = get_template_directory_uri() . '/css';

		wp_register_style( 'phung_traning_symple_shortcodes_styles', $cssUrl . '/symple_shortcodes_styles.css', array(), '0.1' );
		wp_enqueue_style( 'phung_traning_symple_shortcodes_styles' );

		wp_register_style( 'phung_traning_style', $cssUrl . '/style.css', array(), '0.1' );
		wp_enqueue_style( 'phung_traning_style' );

		wp_register_style( 'phung_traning_responsive', $cssUrl . '/responsive.css', array(), '0.1' );
		wp_enqueue_style( 'phung_traning_responsive' );

		wp_register_style( 'phung_traning_site', $cssUrl . '/site.css', array(), '0.1' );
		wp_enqueue_style( 'phung_traning_site' );

		wp_register_style( 'phung_traning_ie8', $cssUrl . '/ie8.css', array(), '0.1' );
		$wp_styles->add_data('phung_traning_ie8', 'conditional', 'IE 8');
		wp_enqueue_style( 'phung_traning_ie8' );
	}
}

?>