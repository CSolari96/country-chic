<?php get_header(); ?>

<main class="container blog">

	<div class="row">
	    
	    <article class="col-sm-12 col-md-8 blog-post">

			<?php

					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<p class="post-info">
								<?php 

									echo "Published on " . get_the_date();
									echo " | ";
									echo "Written by " . get_the_author();

								?>
							</p>

							<div class="post-featured-image">

								<?php the_post_thumbnail("large"); ?>

							</div>

							<?php the_content(); ?>

				<?php	} // End while
					} // End if
				?>

				<div class="pagination-single">

					<?php next_post_link("%link", "<< Newer Posts"); ?>

				</div>

				<div class="pagination-single">

					<?php previous_post_link("%link", "Older Posts >>"); ?>

				</div>

				<?php 

					if (comments_open() || get_comments_number()) {
						comments_template();
					}

				?>

    	</article>

    	<aside class="col-sm-12 col-md-3">

    		<?php dynamic_sidebar('right-sidebar'); ?>

    	</aside>

	</div>

</main>

<?php get_footer(); ?>