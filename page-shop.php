<?php 

	/*

		Template Name: Shop Page Layout
		Template Post Type: page

	*/
	
	get_header();

	$Products = WP_Shopify\Factories\Render\Products\Products_Factory::build();

	?>

	<main class="container-fluid">

		<div class="row">

			<aside class="col-md-3">

				<p>Sidebar goes here</p>

			</aside>

			<section class="wps-container col-md-9">
			   <?= do_action('wps_breadcrumbs') ?>

			   <div class="wps-products-all">

			      <?php 

				      global $post;

				      $Products->products(['title' => $post->post_title]); 

				      $Products->pricing(['title' => $post->post_title]);
			      
			      ?>

			   </div>

			</section>

		</div>

	</main>

<?php get_footer(); ?>