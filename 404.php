<?php get_header(); ?>

<main class="container-fluid">

	<div class="row page-404">

		<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

			<img src="<?php echo get_template_directory_uri() . '/images/brushPile.png'?>" alt="Pile of Paint Brushes">

		</div>

		<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

			<?php dynamic_sidebar("404-content"); ?>

		</div>
	</div>

</main>


<?php get_footer(); ?>