<?php

	/*

	Template Name: Contact About Layout
	Template Post Type: page

	*/

?>


<?php get_header(); ?>

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
		<p class="captions"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
	</div>

<main>
	<div class="container-fluid">
	<section>
			<div class="row col-12">
				<?php
					if(have_posts()){
						while(have_posts()){
							the_post(); ?>

						<div class= "contact-content">	<?php the_content(); ?> </div>
					<?php  }//ends while loop
					}//ends the if statement
				 ?>
				</div>
		</section>

				<div class="row col-12 contact-flex">
						<img src="<?php echo get_template_directory_uri() . '/images/phone.png'?>" alt="Telephone icon" class="icons"/>
						<?php dynamic_sidebar('contact-page-phone-number'); ?>
				</div>

				<div class="row col-12 contact-flex">
						<img src="<?php echo get_template_directory_uri() . '/images/paper-plane.png'?>" alt="Mail icon" class="icons"/>
						<?php dynamic_sidebar('contact-page-email'); ?>
				</div>

				<div class="row values-container contact-form-section" style="background-image: url('<?php echo get_template_directory_uri() . "/images/values_bkg.png"; ?>')">
						<?php dynamic_sidebar('contact-form'); ?>
				</div>

					<section>
							<p class="noflex"><?php dynamic_sidebar('contact-page-hours'); ?></p>
					</section>

		</div>
	</main>


<?php get_footer(); ?>
