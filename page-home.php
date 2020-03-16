<?php 

	/* 

	Template Name: Home Page Layout
	Template Post Type: page

	*/

	get_header(); 

?>

<main class="container-fluid">

	<div class="row">

		<div class="col-12 banner">

			<?php dynamic_sidebar("home-hero"); ?>

		</div>

	</div>

	<div class="row justify-content-center">

		<div class="col-md-8">

			<?php dynamic_sidebar('home-intro'); ?>

		</div>

	</div>

	<div class="row values-container" style="background-image: url('<?php echo get_template_directory_uri() . "/images/values_bkg.png"; ?>')">

		<div class="col-sm-5 col-md-5">

			<?php dynamic_sidebar('home-values-title'); ?>

		</div>

		<div class="col-sm-7 col-md-7">

			<div class="row">

				<div class="col-6">

					<?php dynamic_sidebar('home-values1'); ?>

				</div>

				<div class="col-6">

					<?php dynamic_sidebar('home-values2'); ?>

				</div>

			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-12 testimonials-container">

			<?php dynamic_sidebar('home-testimonials'); ?>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12 banner">

			<?php dynamic_sidebar('home-tutorials'); ?>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<?php dynamic_sidebar('home-instagram'); ?>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12 banner">

			<?php dynamic_sidebar('home-retailers'); ?>

		</div>

	</div>

	<div class="row">

		<div class="col-md-8">

			<?php dynamic_sidebar('home-sketches'); ?>

		</div>

	</div>

</main>


<?php get_footer(); ?>