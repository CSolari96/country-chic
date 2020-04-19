
<?php get_header(); ?>

	<?php 

		$posts_page_id = get_option( 'page_for_posts' );
		$background_img = wp_get_attachment_image_src( get_post_thumbnail_id($posts_page_id), 'full'); 

	?>

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

				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<section class="col-md-9">

								<div class="post-featured-image">

									<?php the_post_thumbnail("medium"); ?>

								</div>

								<h2><?php the_title(); ?></h2>

								<?php the_excerpt(); ?>

							</section>
				<?php
						}  // End while
					}  // End if

				?>

			<aside class="col-md-3">

			</aside>

		</div>

	</main>


<?php get_footer(); ?>