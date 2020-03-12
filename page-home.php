<?php 

	/* 

	Template Name: Home Page Layout
	Template Post Type: page

	*/

	get_header(); 

?>

<main class="container-fluid">

	<div class="row">

		<div class="col-12">

			<?php dynamic_sidebar("home-hero"); ?>

		</div>

	</div>

	<div class="row justify-content-center">

		<div class="col-md-8">

			<p>Insert widget here</p>

		</div>

	</div>

	<div class="row">

		<div class="col-md-6">

			<?php dynamic_sidebar('home-values-title'); ?>

		</div>

		<div class="col-md-6">

			<div class="row">

				<div class="col-md-6">

					<?php dynamic_sidebar('home-values1'); ?>

				</div>

				<div class="col-md-6">

					<?php dynamic_sidebar('home-values2'); ?>

				</div>

			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<p>Insert testimonial widget here</p>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<?php dynamic_sidebar('home-tutorials'); ?>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<p>Insert Instagram plugin here</p>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

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