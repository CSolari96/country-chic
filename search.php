<?php get_header(); ?>

<main class="container search-results">

	<div class="row">

		<div class="col-12">

			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post(); ?>

						<h2><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h2>

						<?php the_content(); ?>
			<?php
					}  // End while
				}  // End if

			?>

		</div>

	</div>

</main>

<?php get_footer(); ?>