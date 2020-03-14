<?php

	/*

	Template Name: Contact About Layout
	Template Post Type: page

	*/

?>


<?php get_header(); ?>

<main class="container-fluid">

	<div class="row">
			<div class="col-12">
				<?php dynamic_sidebar('contact-page-hero'); ?>
			</div>

		</div>

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
