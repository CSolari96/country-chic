<?php

	/*

	Template Name: About Layout
	Template Post Type: page

	*/

?>

<?php get_header(); ?>

	<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

	<div class="hero-widget-content page-header-banner bkg-center" style="background-image: url(<?php echo $background_img[0]; ?>)">

		<div class="container-fluid">

			<div class="row">

				<div class="col-md-12">

					<h1 class="hero-title"> <?php the_title(); ?> </h1>

				</div>

			</div>

		</div>

	</div>

	<main class="container">

		<section class="line-spacing">

				<div class="row justify-content-center">
					<div class="col-md-12">
					<?php dynamic_sidebar('secondary-title-about'); ?>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-12">
					<?php
			          if(have_posts()){
			            while(have_posts()){
			              the_post(); ?>

			              <?php the_content(); ?>
			          <?php  }//ends while loop
			          }//ends the if statement
			         ?>
				 	</div>
				</div>

		</section>

		<section>

			<div class="row">
				<div class="col-12">
						<?php dynamic_sidebar('video-about-us'); ?>
				</div>
			</div>

		</section>

		<section class="row center card-images-about">

			<div class="meet-header col-12">
				<?php dynamic_sidebar('meet-us-title'); ?>
			</div>

			<?php dynamic_sidebar('team-member'); ?>

		</section>

		<section class="row">

			<div class="col-md-12">

				<?php dynamic_sidebar('about-values-title'); ?>

			</div>

			<div class="row center col-sm-12 col-md-6">

				<?php dynamic_sidebar('low-impact-value-icon'); ?>
				<?php dynamic_sidebar('low-impact-value'); ?>

			</div>

			<div class="row center col-sm-12 col-md-6">

				<?php dynamic_sidebar('recycling-programs-value-icon'); ?>
				<?php dynamic_sidebar('recycling-programs-value'); ?>

			</div>

			<div class="row center col-sm-12 col-md-6">

				<?php dynamic_sidebar('local-economy-value-icon'); ?>
				<?php dynamic_sidebar('local-economy-value'); ?>

			</div>

			<div class="row center col-sm-12 col-md-6">

				<?php dynamic_sidebar('those-in-need-value-icon'); ?>
				<?php dynamic_sidebar('those-in-need-value'); ?>

			</div>

		</section>

	</main>


<?php get_footer(); ?>
