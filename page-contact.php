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

		<div class="row">
				<div class="col-12">
					<?php dynamic_sidebar('contact-page-text'); ?>
				</div>

				<div class="row">
						<div class="col-6">
							<?php dynamic_sidebar('contact-page-phone-number'); ?>
						</div>
						<div class="col-6">
							<img src="" alt="Telephone icon"> </img>
						</div>

					</div>

					<div class="row">
							<div class="col-6">
								<?php dynamic_sidebar('contact-page-email'); ?>
							</div>
							<div class="col-6">
								<img src="" alt="Mail icon"> </img>
							</div>

						</div>

			</div>

			<div class="row">
					<div class="col-12">
					<!--INSERT CONTACT FORM-->
					</div>

				</div>

				<div class="row">
						<div class="col-12">
							<?php dynamic_sidebar('contact-page-hours'); ?>

						</div>

					</div>

	</main>


<?php get_footer(); ?>
