<?php

	/**********Add stylesheet and JS files**********/
	function custom_theme_scripts() {

		// Main CSS
		wp_enqueue_style('main-styles', get_stylesheet_uri());

		// Javascript Files
		wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
	}

	add_action('wp_enqueue_scripts', 'custom_theme_scripts');

	/**********Custom Header Logo**********/
	$custom_image_header = array(
		'width' 	=> 	110,
		'height' 	=> 	417,
		'uploads' 	=> 	true,
	);

	add_theme_support('custom-header', $custom_image_header);

	/**********Add menus to theme**********/
	function register_my_menu() {
		register_nav_menus(
			array(
				'top-menu' => ('Top Menu')
			)
		);
	}

	add_action('init', 'register_my_menu');

	/**********Add Widgets**********/


	/**********Add Featured Image Capability**********/
	add_theme_support('post-thumbnails');

?>