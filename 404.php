<?php get_header(); ?>

<main class="container-fluid">

	<div class="row">

		<div class="col-4">

			<img src="<?php echo get_template_directory_uri() . '/images/brushPile.png'?>" alt="Pile of Paint Brushes">

		</div>

		<div class="col-4">

			<?php dynamic_sidebar("404-content"); ?>

		</div>
	</div>

</main>


<?php get_footer(); ?>