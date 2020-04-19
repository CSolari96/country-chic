
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

	<main class="container blog">

		<div class="row">

			<div class="col-md-8">

				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<section class="post-preview">

								<div class="post-featured-image">

									<?php the_post_thumbnail("small"); ?>

								</div>

								<h2><?php the_title(); ?></h2>

								<?php the_excerpt(); ?>

								<a class="btn btn-sm" href="<?php the_permalink(); ?>">Read More</a>

							</section>
				<?php
						}  // End while ?>

						<div class="pagination-links">

						<?php
					       global $wp_query;

					       $big = 999999999; // need an unlikely integer

					       echo paginate_links( array(
					       'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					       'format' => '?paged=%#%',
					       'current' => max( 1, get_query_var('paged') ),
					       'total' => $wp_query->max_num_pages
					        ) );

						?>

					</div>
				<?php	}  // End if

				?>

			</div>

			<aside class="col-md-3">

				<?php dynamic_sidebar('right-sidebar'); ?>

			</aside>

		</div>

	</main>


<?php get_footer(); ?>