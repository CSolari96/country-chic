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
	</div>

<main class="container-fluid">
		<section>
			<div class="row">
				<div class="col-12">
					<?php dynamic_sidebar('contact-page-text'); ?>
				</div>
			</div>
			</section>

		<section>
				<div class="row col-12 justify-content-center align-items-center">
						<div>
							<img src="<?php echo get_template_directory_uri() . '/images/phone.png'?>" alt="Telephone icon" class="icons"/>
						</div>
						<div>
							<?php dynamic_sidebar('contact-page-phone-number'); ?>
						</div>
					</div>

					<div class="row col-12 justify-content-center align-items-center">
							<div>
								<img src="<?php echo get_template_directory_uri() . '/images/paper-plane.png'?>" alt="Mail icon" class="icons"/>
							</div>
							<div>
								<?php dynamic_sidebar('contact-page-email'); ?>
							</div>
					</div>
			</section>

			<section id="contact-form-section">
				<div class="row">
						<div class="col-12">
								<?php dynamic_sidebar('contact-form'); ?>
						</div>
				</div>
			</section>

			<section>
				<div class="row">
						<div class="col-12">
							<?php dynamic_sidebar('contact-page-hours'); ?>
						</div>
					</div>
			</section>

	</main>


<?php get_footer(); ?>
