<?php 

	/*

		Template Name: Shop Page Layout
		Template Post Type: page

	*/
	
	get_header(); 

	$Cart_Icon = WP_Shopify\Factories\Render\Cart\Cart_Factory::build();

	$Cart->cart_icon(['icon_color'=>"#63a497"]);
?>




<?php get_footer(); ?>