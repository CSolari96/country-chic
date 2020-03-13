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
				<div class="row">
						<div class="col-6">
							<?php dynamic_sidebar('contact-page-phone-number'); ?>
						</div>
						<div class="col-6">
							<img src="../images/phone.png" alt="Telephone icon"> </img>
						</div>
					</div>

					<div class="row">
							<div class="col-6">
								<?php dynamic_sidebar('contact-page-email'); ?>
							</div>
							<div class="col-6">
								<img src="../images/paper-plane.png" alt="Mail icon"> </img>
							</div>
						</div>
			</section>

			<section>
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
