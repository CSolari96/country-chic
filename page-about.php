<?php

	/*

	Template Name: About Layout
	Template Post Type: page

	*/

?>


<?php get_header(); ?>

	<div class="jumbotron jumbotron-fluid" style="background-image: url(<?php the_post_thumbnail('full'); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> <?php the_title(); ?> </h1>
				</div>
			</div>
		</div>
	</div>


	<div class="post-featured-image">
		<?php the_post_thumbnail('large'); ?>
	</div>

<main class="container-fluid">

		<section>
				<div class="row col-12">
					<?php
	          if(have_posts()){
	            while(have_posts()){
	              the_post(); ?>

	              <?php the_content(); ?>
	          <?php  }//ends while loop
	          }//ends the if statement
	         ?>
					</div>
			</section>

			<section>
				<div class="row">
						<div class="col-12">
								<?php dynamic_sidebar('video-about-us'); ?>
						</div>
				</div>
			</section>

			<div class="row">

				<div class="col-md-12">

					<?php dynamic_sidebar('about-values-title'); ?>

				</div>

				<div class="row col-sm-12 col-md-3">

					<?php dynamic_sidebar('low-impact-value-icon'); ?>
					<?php dynamic_sidebar('low-impact-value'); ?>

				</div>

				<div class="row col-sm-12 col-md-3">

					<?php dynamic_sidebar('recycling-programs-value-icon'); ?>
					<?php dynamic_sidebar('recycling-programs-value'); ?>

				</div>

				<div class="row col-sm-12 col-md-3">

					<?php dynamic_sidebar('local-economy-value-icon'); ?>
					<?php dynamic_sidebar('local-economy-value'); ?>

				</div>

				<div class="row col-sm-12 col-md-3">

					<?php dynamic_sidebar('those-in-need-value-icon'); ?>
					<?php dynamic_sidebar('those-in-need-value'); ?>

				</div>

			</div>


			<div class="row">

				<div class="col-md-12">

					<?php dynamic_sidebar('meet-us-title'); ?>

				</div>

				<div class="row col-sm-12 col-md-3">

					<?php dynamic_sidebar('rosanne-picture'); ?>

				</div>

				<div class="row col-sm-12 col-md-3">

					<?php dynamic_sidebar('jan-picture'); ?>

				</div>

				<div class="row col-sm-12 col-md-3">

					<?php dynamic_sidebar('sarah-picture'); ?>

				</div>

				<div class="row col-sm-12 col-md-3">

					<?php dynamic_sidebar('christa-picture'); ?>

				</div>

			</div>

	</main>


<?php get_footer(); ?>
