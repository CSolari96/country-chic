<?php

	/*

	Template Name: Tutorials
	Template Post Type: page

	*/

	get_header();

?>

<div class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo $thumb_url; ?>)">
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

		<div class="row">

		<?php $args = array ('post_type' => 'tutorial_types', 'posts_per_page' => 6);

		$loop = new WP_Query($args);

		while($loop->have_posts()): $loop->the_post();?>

			<div class="card" style="width: 18rem;">
  			<img src="<?php the_post_thumbnail('small'); ?> ">  
  			<div class="card-body">
    			<h5 class="card-title">Card title</h5>
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    			<a href="#" class="btn btn-primary">Go somewhere</a>
  			</div>
			</div>

			<?php endwhile; ?>

		</div>



<?php get_footer(); ?>
