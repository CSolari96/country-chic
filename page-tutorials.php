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

<main class="container">

	<section class="tutorials-main-post">
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

	<?php $args = array ('post_type' => 'tutorial_types', 'posts_per_page' => 6);

	$loop = new WP_Query($args);

	while($loop->have_posts()): $loop->the_post();?>

		<div class="card tutorial-card">
		  <?php the_post_thumbnail('medium'); ?>
		  <div class="card-body">
		    <h5 class="tutorial-card-titles"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		    <p class="tutorial-card-text"><?php the_excerpt(); ?> </p>
		  </div>
		</div>

</main>


<?php get_footer(); ?>
