<?php 

	/* 

	Template Name: Home Page Layout
	Template Post Type: page

	*/

	get_header(); 

?>

<main class="container-fluid">

	<section class="row">

		<div class="col-12 banner">

			<?php dynamic_sidebar("home-hero"); ?>

		</div>

	</section>

	<section class="row justify-content-center">

		<div class="col-md-8">

			<?php dynamic_sidebar('home-intro'); ?>

		</div>

	</section>

	<section class="row values-container" style="background-image: url('<?php echo get_template_directory_uri() . "/images/values_bkg.png"; ?>')">

		<div class="col-12">

			<?php dynamic_sidebar('home-values-title'); ?>

		</div>

		<div class="col-12">

			<div class="container">

				<div class="row values-row">

					<div class="col-6 row">

						<?php dynamic_sidebar('home-values1'); ?>

					</div>

					<div class="col-6 row">

						<?php dynamic_sidebar('home-values2'); ?>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section class="row">

		<div class="col-12 testimonials-container">

			<?php dynamic_sidebar('home-testimonials'); ?>

		</div>

	</section>

	<section class="row">

		<div class="col-md-12 banner">

			<?php dynamic_sidebar('home-tutorials'); ?>

		</div>

	</section>

	<section class="row">

		<div class="col-md-12">

			<?php dynamic_sidebar('home-instagram'); ?>

		</div>

	</section>

	<section class="row">

		<div class="col-md-12 banner">

			<?php dynamic_sidebar('home-retailers'); ?>

		</div>

	</section>

	<section class="row">

		<div class="col-md-8">

			<?php dynamic_sidebar('home-sketches'); ?>

		</div>

	</section>

</main>


<?php get_footer(); ?>