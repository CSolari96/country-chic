<?php get_header(); ?>

<main class="container search-results">

	<div class="row">

		<div class="col-12">

			<?php
				if (have_posts()) { ?>

					<h2><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h2>

				<?php while (have_posts()) {
						the_post(); ?>

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					<?php the_excerpt(); ?>

					<a href="<?php the_permalink(); ?>">Read More...</a>

			<?php	}  // End while
				}  // End if

			?>

		</div>

	</div>

</main>

<?php get_footer(); ?>