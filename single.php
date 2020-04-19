<?php get_header(); ?>

<main class="container blog">

	<div class="row">
	    
	    <article class="col-sm-12 col-md-8 blog-post">

			<?php

					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<div class="the_post">

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

							</div>

							<div class="author_info row">

								<div class="col-3">

									<?php 
									     echo get_avatar( the_author_meta('ID'), '60' ); 
									?>

								</div>

								<div class="col-9">

									<h3><?php the_author_meta('display_name'); ?></h3>

									<p><?php echo wpautop( the_author_meta( 'description' ) ); ?></p>

								</div>

							</div>

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