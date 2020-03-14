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

	</main>


<?php get_footer(); ?>
