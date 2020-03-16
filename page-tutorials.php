<?php

	/*

	Template Name: Tutorials
	Template Post Type: page

	*/

	get_header(); 

?>

<main class="container-fluid">

	<div class="row">

		<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>
							<div class='col-md-4'>
								<h2><?php the_title(); ?></h2>

								<?php the_excerpt(); ?>

								<a class="btn btn-primary btn-small" href="<?php the_permalink(); ?>">See More</a>
				<?php
						}  // End while
					}  // End if

				?>

	</div>

</main>


<?php get_footer(); ?>
