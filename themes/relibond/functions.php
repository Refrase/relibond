<?php

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	// Register Custom Bootstrap Navigation Walker
	require_once( get_template_directory() .  '/wp_bootstrap_navwalker.php' );

	// Menu
	function relibond_theme_menus() {
		register_nav_menus(
			array(
				'Hovedmenu' => __( 'Hovedmenu', 'relibond' )
			)
		);
	} add_action( 'init', 'relibond_theme_menus' );

	// Styling
	function relibond_theme_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	} add_action( 'wp_enqueue_scripts', 'relibond_theme_styles' );

	// Scripts
	function relibond_theme_js() {
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/bundle.js', array('jquery'), '', true );
	} add_action( 'wp_enqueue_scripts', 'relibond_theme_js' );

	// Disable possibility of changing theme
	add_action('admin_init', 'remove_theme_menus');
	function remove_theme_menus() {
	    global $submenu;
	    unset($submenu['themes.php'][5]);
	    unset($submenu['themes.php'][15]);
	}

?>
