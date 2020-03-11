<?php 

	/*

		Template Name: Shop Page Layout
		Template Post Type: page

	*/
	
	get_header();

	 $Products = WP_Shopify\Factories\Render\Products\Products_Factory::build();

	 global $post;

	$Products->products([
	   'title' => $post->post_title
	]);


?>




<?php get_footer(); ?>