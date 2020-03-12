<?php 

	/* 

	Template Name: Home Page Layout
	Template Post Type: page

	*/

	get_header(); 

?>

<main class="container-fluid">

	<?php dynamic_sidebar("home-hero"); ?>

	<div class="row">

		<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<?php the_content(); ?>
				<?php
						}  // End while
					}  // End if

				?>

	</div>

</main>


<?php get_footer(); ?>