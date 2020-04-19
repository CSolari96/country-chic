<?php get_header(); ?>

	<main class="container blog">

		<div class="row">

			<div class="col-md-12">

				<h2>You are browsing the category <?php single_cat_title(); ?></h2>

			</div>

		</div>

		<div class="row">

			<div class="col-sm-12 col-md-8">

				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<section class="post-preview">

								<div class="post-featured-image">

									<?php the_post_thumbnail("small"); ?>

								</div>

								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

								<?php the_excerpt(); ?>

								<a href="<?php the_permalink(); ?>">Read More</a>

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

			<aside class="col-sm-12 col-md-3">

				<?php dynamic_sidebar('right-sidebar'); ?>

			</aside>

		</div>

	</main>

<?php get_footer(); ?>
