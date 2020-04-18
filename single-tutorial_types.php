<?php get_header(); ?>

<main class="container tutorials-post">

	<div class="row col-12 justify-content-center">
		<h2 class="secondary-title"><?php the_title(); ?></h2>
	</div>
	<div class="row">
		<aside class="col-md-3 products-list">
			<div class="all-products">
				<h3 class="products-used-title">Country Chic Products Used</h3>

	<!---Makes each item under the products category in Advanced Custom Field on a single bullet-->
				<?php
				$field = get_field_object('product');
				$fieldValues =  implode('<li>', $field['value'], '</li>');
				?>
				<ul><?php echo '<li>' . $fieldValues . '</li>' ?> </ul>


		<!---Makes each item under the products category in Advanced Custom Field on a single bullet-->
							<?php
							$fieldBrushes = get_field_object('brushes_used');
							$fieldBrushesValues =  implode('<li>', $fieldBrushes['value'] . '</li>';
							?>
	<!---Looks to see if anything is under the brushes category in Advanced Custom Fields and doesn't post anything if not-->
							<?php if( get_field('brushes_used') ): ?>
								<ul><?php echo '<li>' . $fieldBrushesValues . '</li>'?>
							<?php endif; ?>
								</ul>
							</div>

							<div class="shop-button-tutorials">
								<a href="http://www.courtneysolari.com/country-chic/shop/">Shop Now</a>
							</div>

		</aside>

		<section class="col-md-9">

			<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post(); ?>

								<div class="tutorial-individual-posts"><?php the_content(); ?></div>

								<div class="pagination-tutorials">

									<?php previous_post_link('%link', '<< Previous Tutorial'); ?>
									<?php next_post_link('%link', 'Next Tutorial >>'); ?>

								</div>
					<?php
							}  // End while
						}  // End if

					?>

		</div>
		</section>


</main>


<?php get_footer(); ?>
