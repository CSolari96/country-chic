<?php get_header(); ?>

<main class="container search-results">

	<div class="row">

		<div class="col-12">

			<?php
				if (have_posts()) { ?>

					<h2><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h2>

				<?php while (have_posts()) {
						the_post(); ?>

					<div class="single-search-result">

						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

						<?php the_excerpt(); ?>

						<a href="<?php the_permalink(); ?>">Read More...</a>

					</div>

			<?php	}  // End while
				} else { ?>
					<h2>No results found</h2>

					<p>Sorry, we couldn't find what you were looking for. Try again with a different search term.</p>

					<?php get_search_form(); ?>
			<?php } // End if

			?>

		</div>

	</div>

</main>

<?php get_footer(); ?>