<?php get_header(); ?>

<main class="container-fluid">

	<div class="row">

		<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<div class="tutorial-post"><?php the_content(); ?></div>
				<?php
						}  // End while
					}  // End if

				?>

	</div>

</main>


<?php get_footer(); ?>
