<?php get_header(); ?>

<div class="container-fluid">

	<div class="row">
    <main class="col-md-12">

		<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<?php the_content(); ?>
				<?php
						}  // End while
					}  // End if

				?>

    </main>
	</div>
</div>



<?php get_footer(); ?>
