<?php get_header(); ?>

	<div class="container">

		<div class="row">

			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post(); ?> 

						<div class="col-md-12 post-preview">

							 <h3><?php the_title(); ?></h3>

							<p class="post-info">

								<?php 
									echo "Written by: " . get_the_author(); 
									echo " <br /> "; 
									publish_date();
								?>
									
							</p>

							<p class="category">Category: <?php the_category(' , '); ?></p>

							<div class="post-featured-image">

								<?php the_post_thumbnail("medium"); ?>

							</div>

							<?php the_excerpt(); ?>

							<a class="btn btn-sm" href="<?php the_permalink(); ?>">Read More</a>  

						</div>
			<?php	}
				}

				?>

		</div>

	</div>

<?php get_footer(); ?>