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
					<h1 class="hero-title"> <?php the_title(); ?> </h1>
				</div>
			</div>
		</div>
	</div>

	<div class="post-featured-image">
		<?php the_post_thumbnail('large'); ?>
	</div>

	<main class="container-fluid">

		<section class="tutorials-main-post">
			<div class="row justify-content-center">
				<div class="col-md-8">
				<?php dynamic_sidebar('secondary-title-tutorials'); ?>
				</div>
			</div>
				<div class="row justify-content-center">
					<div class="col-md-12 col-xl-10">
					<?php
						if(have_posts()){
							while(have_posts()){
								the_post(); ?>

								<?php the_content();
						}//ends while loop ?>

					<?php }//ends the if statement
					 ?>
				 </div>
				</div>
			</section>

			<section class="row center tutorial-cards-container">

					<?php $args = array ('post_type' => 'tutorial_types', 'posts_per_page' => 3);

					$loop = new WP_Query($args);

					while($loop->have_posts()): $loop->the_post();?>

						<div class="card tutorial-cards animated fadeIn duration1 eds-on-scroll" style="width: 18rem;">
				  			<div class="card-img-top"><?php the_post_thumbnail(); ?>
								</div>
				  			<div class="card-body">
				    			<h5 class="card-title-tutorials"><a href="<?php the_permalink(); ?>" class="tutorial-title-link"><?php the_title(); ?></a></h5>
				    			<p class="card-text"><?php the_excerpt(); ?></p>
				    			<a href="<?php the_permalink(); ?>" class="cards-link">Learn More </a>
				  			</div>
						</div>

					<?php endwhile; ?>

					<?php
       global $wp_query;

       $big = 999999999; // need an unlikely integer

       echo paginate_links( array(
       'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
       'format' => '?paged=%#%',
       'current' => max( 1, get_query_var('paged') ),
       'total' => $wp_query->max_num_pages
        ) );

?>


		</section>


	</main>



<?php get_footer(); ?>
