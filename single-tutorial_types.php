<?php get_header(); ?>

<main class="container-fluid tutorials-post">

	<div class="row col-12 justify-content-center">
		<h2 class="secondary-title"><?php the_title(); ?></h2>
	</div>
	<div class="row">
		<aside class="col-md-3 products-list">
			<h3 class="products-used-title">Country Chic Products Used</h3>
			<ul>
				<li class="products-used"><?php the_field('product'); ?></li>
					<?php if( get_field('brushes_used') ): ?>
							<li class="products-used"><?php the_field('brushes_used'); ?></li>
					<?php endif; ?>
			</ul>

			<?php
			$fields = get_field_objects();
			if( $fields ): ?>
    <ul>
        <?php foreach( $fields as $field ): ?>
            <li><?php echo $field['choices']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
		</aside>

		<section class="col-md-9">

			<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post(); ?>

								<div class="tutorial-individual-posts"><?php the_content(); ?></div>

								<div class="pagination-tutorials">

									<?php previous_post_link('%link', '<< Previous Tutorial'); ?>
									<?php next_post_link('%link', 'Next Tutorial >>'); ?>

								</div>
					<?php
							}  // End while
						}  // End if

					?>

		</div>
		</section>


</main>


<?php get_footer(); ?>
