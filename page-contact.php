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

<main class="container">
		<section>
			<div class="row col-12">
					<?php dynamic_sidebar('contact-page-text'); ?>
			</div>
		</section>

		<section>
				<div class="row col-12 justify-content-center align-items-center">
							<img src="<?php echo get_template_directory_uri() . '/images/phone.png'?>" alt="Telephone icon" class="icons"/>
							<?php dynamic_sidebar('contact-page-phone-number'); ?>
				</div>

					<div class="row col-12 justify-content-center align-items-center">
								<img src="<?php echo get_template_directory_uri() . '/images/paper-plane.png'?>" alt="Mail icon" class="icons"/>
								<?php dynamic_sidebar('contact-page-email'); ?>
					</div>
			</section>

			<section id="contact-form-section">
				<div class="row col-12">
						<?php dynamic_sidebar('contact-form'); ?>
				</div>
			</section>

			<section>
					<div class="row col-12">
							<?php dynamic_sidebar('contact-page-hours'); ?>
					</div>
			</section>

	</main>


<?php get_footer(); ?>
