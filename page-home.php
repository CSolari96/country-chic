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

			<p>Insert value title widget here</p>

		</div>

		<div class="col-md-6">

			<p class="col-md-6">
				Insert value widget here
			</p>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<p>Insert testimonial widget here</p>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<?php dynamic_sidebar("home-tutorials"); ?>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<p>Insert Instagram plugin here</p>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<?php dynamic_sidebar("home-retailers"); ?>

		</div>

	</div>

	<div class="row">

		<div class="col-md-8">

			<p>INsert text widget here</p>

		</div>

	</div>

</main>


<?php get_footer(); ?>