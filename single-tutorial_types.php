<?php get_header(); ?>

<main class="container-fluid">

	<div class="row">
		<aside class="col-md-3 products-list">
			<h3 class="products-used-title">Country Chic Products Used</h3>
			<ul>
				<li class="products-used"><?php the_field('product'); ?></li>
				<li class="products-used"><?php the_field('brushes_used'); ?></li>
			</ul>
		</aside>

		<section class="col-md-9">

			<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post(); ?>

								<h2 class="secondary-title"><?php the_title(); ?></h2>

								<div class="tutorial-post"><?php the_content(); ?></div>
					<?php
							}  // End while
						}  // End if

					?>

		</div>
		</section>


</main>


<?php get_footer(); ?>
