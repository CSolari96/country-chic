<?php 

	/*

		Template Name: Shop Page Layout
		Template Post Type: page

	*/
	
	get_header(); 

	$Cart_Icon = WP_Shopify\Factories\Render\Cart\Cart_Factory::build();

	// Show cart icon with custom image
	$Cart->cart_icon([
	   'icon' => "https://freeiconshop.com/wp-content/uploads/edd/cart-outline.png"
	]);

?>




<?php get_footer(); ?>