<?php

defined('ABSPATH') ?: die;

get_header('wpshopify');

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

<main class="container-fluid shop-page">

	<div class="row">

		<aside class="filter col-md-3">

			<h2 class="sort-title">Sort</h2>

			<?php

				$collections_query = [
					'dropzone_collection_title' => '#title-container'
				];

				$Collections->collections($collections_query);

			?>

		   <div id="title-container">

		   </div>

		</aside>

		<section class="wps-container col-md-9">

		   <div class="wps-products-all">
		   	<?= do_action('wps_breadcrumbs') ?>

		      <?php

		      	$Products->products($args); 
		      
		      ?>

		   </div>

		</section>

	</div>

</main>

<section class="wps-container">
   <?= do_action('wps_breadcrumbs') ?>

   <div class="wps-collections-all">
      
      <?php if ($Settings->get_col_value('collections_heading_toggle')) { ?>
         <h1 class="wps-heading"><?= $Settings->get_col_value('collections_heading'); ?></h1>
      <?php }

      $Collections->collections(apply_filters('wps_collections_all_args', [])); 
      
      ?>

   </div>

</section>


<?php

get_footer('wpshopify');