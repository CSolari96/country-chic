<?php

	/*

	Template Name: Tutorials
	Template Post Type: page

	*/

	get_header();

?>

	<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

	<div class="hero-widget-content page-header-banner bkg-center" style="background-image: url(<?php echo $background_img[0]; ?>)">

		<div class="container-fluid">

			<div class="row">

				<div class="col-md-12">

					<h1 class="hero-title"> <?php the_title(); ?> </h1>

				</div>

			</div>

		</div>

	</div>

	<main class="container">

		<section class="tutorials-main-post line-spacing">
			<div class="row justify-content-center">
				<div class="col-12">
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

			<section class="row center tutorial-cards-container changeagain">

					<?php

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array ('post_type' => 'tutorial_types', 'posts_per_page' => 6, 'paged' => $paged );
					$loop = new WP_Query($args);

					while($loop->have_posts()): $loop->the_post();?>

						<div class="card tutorial-cards animated fadeIn duration1 eds-on-scroll" style="width: 18rem;">
				  			<div class="card-img-top"><?php the_post_thumbnail(); ?></div>
				  			<div class="card-body">
				    			<h5 class="card-title-tutorials"><a href="<?php the_permalink(); ?>" class="tutorial-title-link"><?php the_title(); ?></a></h5>
				    			<?php the_excerpt(); ?>
				    			<a href="<?php the_permalink(); ?>" class="cards-link">Learn More </a>
				  			</div>
						</div>

					<?php endwhile; ?>

				<div class="row col-12 pagination">
					<?php
					$wpex_query = new WP_Query($args);

					global $wp_query, $wpex_query;

						if ( $wpex_query ) {
					    $total = $wpex_query->max_num_pages;
					} else {
					    $total = $wp_query->max_num_pages;
					}

			       $big = 999999999; // need an unlikely integer

						 echo paginate_links(array(
			 				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			 				'format' => '?paged=%#%',
			 				'current'		=> max( 1, get_query_var('paged') ),
			 				'total' 		=> $total,
			 				'mid_size'		=> 3
						) );

					?>
		</div>


		</section>


	</main>



<?php get_footer(); ?>
