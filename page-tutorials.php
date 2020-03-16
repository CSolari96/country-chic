<?php

	/*

	Template Name: Tutorials
	Template Post Type: page

	*/

	get_header();

?>

<main class="container-fluid">

	<div class="row">

		<?php $args = array ('post_type' => 'tutorial_types', 'posts_per_page' => 12);

		$loop = new WP_Query($args);

		while($loop->have_posts()): $loop->the_post();?>

		<div class="col-md-4">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
			<?php if(has_post_thumbnail()) {
				the_post_thumbnail('medium'); ?>
		</div>
		<div class="col-md-8">
			<div class="col-md-5">
				<?php the_excerpt(); ?>
		</div>

			<div class="col-md-3">
				<h3>Country Chic Products Used</h3>
				<?php the_field('product'); ?>
				<?php the_field('brushes_used'); ?>
			</div>
		</div>

	<?php	} ?>

		</div>


	<?php endwhile; ?>

	</div>

</main>


<?php get_footer(); ?>
