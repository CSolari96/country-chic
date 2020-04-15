<?php get_header(); ?>

<main>

	<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

	<div class="hero-widget-content page-header-banner" style="background-image: url(<?php echo $background_img[0]; ?>)">

		<div class="container-fluid">

			<div class="row">

				<div class="col-md-12">

					<h1 class="hero-title"> <?php the_title(); ?> </h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<p>Testing</p>

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