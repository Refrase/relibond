<?php

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

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

	// Fonts
	function relibond_font_styles() {
		wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts/fonts.css' );
	} add_action( 'wp_enqueue_scripts', 'relibond_font_styles' );

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

	// Prevent WordPress from adding width and height props when inserting images
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}

	// Rearrange wp-admin menu
	function custom_menu_order($menu_ord) {
	    if (!$menu_ord) return true;

	    return array(
	        'index.php', // Dashboard
					'edit.php?post_type=page', // Pages
					'edit.php?post_type=employee', // Employees
					'edit.php?post_type=partner', // Partners
	        'separator1', // First separator
	        'upload.php', // Media
	        'link-manager.php', // Links
	        'separator2', // Second separator
	        'themes.php', // Appearance
	        'plugins.php', // Plugins
	        'users.php', // Users
	        'tools.php', // Tools
	        'options-general.php', // Settings
	        'separator-last', // Last separator
	    );
	}
	add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
	add_filter('menu_order', 'custom_menu_order');

	add_action('admin_menu', 'rrh_change_post_links');
	function rrh_change_post_links() {
		global $menu;
		unset($menu[5]); // Remove posts from menu
		unset($menu[25]); // Remove comments from menu
	}

?>
