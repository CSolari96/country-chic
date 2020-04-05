<?php

	/*

	Template Name: Contact About Layout
	Template Post Type: page

	*/

?>


<?php get_header(); ?>

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
		<p class="captions"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
	</div>

<main class="container-fluid contact">

	<section>

		<div class="row justify-content-center">
			<div class="col-md-12">
			<?php dynamic_sidebar('secondary-title-contact'); ?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 col-lg-3">
				<?php dynamic_sidebar('product-faqs'); ?>
			</div>

			<div class="col-md-12 col-lg-3">
				<?php dynamic_sidebar('shipping-and-return'); ?>
			</div>

			<div class="col-md-12 col-lg-3">
				<?php dynamic_sidebar('find-a-store'); ?>
			</div>

			<div class="col-md-12 col-lg-3">
				<?php dynamic_sidebar('become-a-retailer'); ?>
			</div>
		</div>

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

			<div class="row col-12 contact-flex">
					<img src="<?php echo get_template_directory_uri() . '/images/phone.png'?>" alt="Telephone icon" class="icons"/>
					<?php dynamic_sidebar('contact-page-phone-number'); ?>
			</div>

			<div class="row col-12 contact-flex">
					<img src="<?php echo get_template_directory_uri() . '/images/paper-plane.png'?>" alt="Mail icon" class="icons"/>
					<?php dynamic_sidebar('contact-page-email'); ?>
			</div>
		</section>


		<div class="row values-container contact-form-section" style="background-image: url('<?php echo get_template_directory_uri() . '/images/values_bkg.png'; ?>')">
			<?php dynamic_sidebar('contact-form-title'); ?>
				<?php dynamic_sidebar('contact-form'); ?>
		</div>

		<section>
			<div class="row col-12 contact-flex">
				<?php dynamic_sidebar('contact-have-more-questions-title'); ?>
				<p class="noflex"><?php dynamic_sidebar('contact-page-hours'); ?></p>
			</div>

			<div class="row col-md-12 col-lg-4 contact-flex">
					<img src="<?php echo get_template_directory_uri() . '/images/phone.png'?>" alt="Telephone icon" class="icons"/>
					<?php dynamic_sidebar('contact-page-phone-number'); ?>
			</div>

			<div class="row col-12 col-lg-4 contact-flex">
					<img src="<?php echo get_template_directory_uri() . '/images/paper-plane.png'?>" alt="Mail icon" class="icons"/>
					<?php dynamic_sidebar('contact-page-email'); ?>
			</div>

			<div class="row col-12 col-lg-4 contact-flex">
					<img src="<?php echo get_template_directory_uri() . '/images/paper-plane.png'?>" alt="Mail icon" class="icons"/>
					<?php dynamic_sidebar('contact-page-live-chat'); ?>
			</div>


		</section>

</main>


<?php get_footer(); ?>
