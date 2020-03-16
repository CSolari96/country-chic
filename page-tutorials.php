<?php

	/*

	Template Name: Tutorials
	Template Post Type: page

	*/

	get_header();

?>

<div class="jumbotron jumbotron-fluid" style="background-image: url(<?php the_post_thumbnail('full'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> <?php the_title(); ?> </h1>
			</div>
		</div>
	</div>
</div>


<div class="post-featured-image">
	<?php the_post_thumbnail('large'); ?>
</div>

<main class="container-fluid">

	<section>
			<div class="row col-12">
				<?php
					if(have_posts()){
						while(have_posts()){
							the_post(); ?>

							<?php the_content(); ?>
					<?php  }//ends while loop
					}//ends the if statement
				 ?>
				</div>
		</section>

	<div class="row">

		<?php $args = array ('post_type' => 'tutorial_types', 'posts_per_page' => 12);

		$loop = new WP_Query($args);

		while($loop->have_posts()): $loop->the_post();?>

		<div class="col-md-3">
			<?php if(has_post_thumbnail()) {
				the_post_thumbnail('medium'); ?>
		</div>
			<div class="col-md-6">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
				<?php the_excerpt(); ?>
		</div>

			<div class="col-md-3">
				<h4>Country Chic Products Used</h4>
				<p class="products-used"><?php the_field('product'); ?></p>
				</p class="products-used"><?php the_field('brushes_used'); ?></p>
			</div>

	<?php	} ?>

		</div>


	<?php endwhile; ?>

	</div>

</main>


<?php get_footer(); ?>
