<?php

	/*

	Template Name: About Layout
	Template Post Type: page

	*/

?>


<?php get_header(); ?>

	<div class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo $thumb_url; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="hero-title"> <?php the_title(); ?> </h1>
				</div>
			</div>
		</div>
	</div>


	<div class="post-featured-image">
		<?php the_post_thumbnail('large'); ?>
	</div>

	<main class="container-fluid fix-margin">

		<section class="line-spacing">

				<div class="row justify-content-center">
					<div class="col-md-8">
					<?php dynamic_sidebar('secondary-title-about'); ?>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-8">
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

				<div class="row center col-sm-12 col-md-6 col-xl-3 animated fadeIn eds-on-scroll ">
					<div class="hover-images-effects">
					  <div class="card card-third">
					    <?php dynamic_sidebar('rosanne-picture'); ?>
					    <div class="card--hidden">
								<?php dynamic_sidebar('rosanne-picture-info'); ?>
					    </div>
					  </div>
					</div>
				</div>

				<div class="row center col-sm-12 col-md-6 col-xl-3 animated fadeIn eds-on-scroll">
					<div class="hover-images-effects">
						<div class="card card-third">
							<?php dynamic_sidebar('jan-picture'); ?>
							<div class="card--hidden">
								<?php dynamic_sidebar('jan-picture-info'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row center col-sm-12 col-md-6 col-xl-3 animated fadeIn eds-on-scroll">
					<div class="hover-images-effects">
						<div class="card card-third">
							<?php dynamic_sidebar('sarah-picture'); ?>
							<div class="card--hidden">
								<?php dynamic_sidebar('sarah-picture-info'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row center col-sm-12 col-md-6 col-xl-3 animated fadeIn eds-on-scroll">
					<div class="hover-images-effects">
						<div class="card card-third">
							<?php dynamic_sidebar('christa-picture'); ?>
							<div class="card--hidden">
								<?php dynamic_sidebar('christa-picture-info'); ?>
							</div>
						</div>
					</div>
				</div>

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
