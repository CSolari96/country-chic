<?php 

	/*

		Template Name: Shop Page Layout
		Template Post Type: page

	*/
	
	get_header();

	$Products = WP_Shopify\Factories\Render\Products\Products_Factory::build();
	$Collections = WP_Shopify\Factories\Render\Collections\Collections_Factory::build();
	$Settings = WP_Shopify\Factories\DB\Settings_General_Factory::build();

	$description_toggle = $Settings->get_col_value('products_plp_descriptions_toggle');

	if (!$description_toggle) {
	   
	   $products_options = [
	      'excludes' => ['buy-button', 'description']
	   ];

	} else {
	   $products_options = [];
	}

	$args = apply_filters('wps_products_all_args', $products_options);

	?>

	<main class="container-fluid">

		<div class="row">

			<aside class="wps-container col-md-3">
			   <?= do_action('wps_breadcrumbs') ?>

			   <div class="wps-collections-all">
			      
			      <?php if ($Settings->get_col_value('collections_heading_toggle')) { ?>
			         <p><?= $Settings->get_col_value('collections_heading'); ?></p>
			      <?php }

			      $Collections->collections(apply_filters('wps_collections_all_args', [])); 
			      
			      ?>

			   </div>

			</aside>

			<section class="wps-container col-md-9">
			   <?= do_action('wps_breadcrumbs') ?>

			   <div class="wps-products-all">

			      <?php

			      	$Products->products($args); 
			      
			      ?>

			   </div>

			</section>

		</div>

	</main>

<?php get_footer(); ?>