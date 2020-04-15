<?php

	/*

	Template Name: Contact About Layout
	Template Post Type: page

	*/

?>


<?php get_header(); ?>

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

	<p class="captions"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>

<main class="container-fluid contact">

	<section class="container">

		<div class="row justify-content-center">
			<div class="col-md-12">
			<?php dynamic_sidebar('secondary-title-contact'); ?>
			</div>
		</div>

		<div class="row top-links-on-contact">
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

					<?php the_content(); ?>
				<?php  }//ends while loop
				}//ends the if statement
			 ?>
			</div>
	</section>

	<section>

		<div class="row values-container contact-form-section" style="background-image: url('<?php echo get_template_directory_uri() . '/images/values_bkg.png'; ?>')">
			
			<?php dynamic_sidebar('contact-form-title'); ?>
			
			<?php dynamic_sidebar('contact-form'); ?>

			<div class="col-12 row thank-you hide justify-content-center">

				<div class="col-12 col-sm-3 checkmark">

					<img src="<?php echo get_template_directory_uri() . '/images/checkmark.png'?>" alt="Checkmark">

				</div>

				<?php dynamic_sidebar('contact-form-thanks'); ?>

			</div>

		</div>

	</section>

	<section class="container">

		<div class="row">

			<div class="col-md-12">
					<?php dynamic_sidebar('contact-have-more-questions-title'); ?>
			</div>

			<div class="col-md-12 col-lg-4 contact-icons">
					<img src="<?php echo get_template_directory_uri() . '/images/phone.png'?>" alt="Telephone icon" class="icons"/>
					<?php dynamic_sidebar('contact-page-phone-number'); ?>
			</div>

			<div class="col-md-12 col-lg-4 contact-icons">
					<img src="<?php echo get_template_directory_uri() . '/images/paper-plane.png'?>" alt="Mail icon" class="icons"/>
					<?php dynamic_sidebar('contact-page-email'); ?>
			</div>

			<div class="col-md-12 col-lg-4 contact-icons">
					<img src="<?php echo get_template_directory_uri() . '/images/chat-bubble.png'?>" alt="Chat bubble" class="icons"/>
					<?php dynamic_sidebar('contact-page-live-chat'); ?>
			</div>

			<div class="row col-12 contact-icons">
				<p class="noflex"><?php dynamic_sidebar('contact-page-hours'); ?></p>
			</div>
		</div>
	</section>

</main>


<?php get_footer(); ?>
