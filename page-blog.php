<?php

	/*

	Template Name: Blog Layout
	Template Post Type: page

	*/

?>

<?php get_header(); ?>

	<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

	<div class="hero-widget-content page-header-banner bkg-center" style="background-image: url(<?php echo $background_img[0]; ?>)">

		<div class="container-fluid">

			<div class="row">

				<div class="col-md-12">

					<h1 class="hero-title"> <?php single_post_title(); ?> </h1>

				</div>

			</div>

		</div>

	</div>

	<main class="container">

		<div class="row">

			<section class="col-md-9">

				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<?php the_excerpt(); ?>
				<?php
						}  // End while
					}  // End if

				?>

			</section>

			<aside class="col-md-3">

			</aside>

		</div>

	</main>


<?php get_footer(); ?>