<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); ?></title>

	<!--<?php wp_enqueue_script('jquery'); ?>-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<header class="container-fluid">

		<div class="row header">

			<nav class="mobile-menu">

				<p class="close-menu-container"><a href="javascript:void()" id="close-menu">&times;</a></p>

				<?php

					if (has_nav_menu('top-menu')) {

						wp_nav_menu(array('theme_location' => 'top-menu', 'container-class' => 'mobile-top-menu-class'));
					} else {

						echo "Please select a top menu through the dashboard.";

					}

				?>

			</nav>

			<div class="col-1 open-menu-btn">

				<span id="open-mobile-menu" class="open-menu">&#9776;</span>

			</div>

			<div class="col-9 col-md-3">

				<?php

					if (get_header_image() == '') { ?>

						<h1>
							<a href="<?php echo get_home_url();?>"><?php bloginfo('name'); ?></a>
						</h1>

				<?php } else { ?>

						<a href="<?php echo get_home_url();?>">
							<img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" />
						</a>

				<?php } ?>

			</div>

			<nav class="desktop-nav col-md-7">

				<?php

					if (has_nav_menu('top-menu')) {

						wp_nav_menu(array('theme_location' => 'top-menu' , 'container_class' => 'top-menu-class'));
					
					} else {

						echo "Please select a top menu through the dashboard";
					
					}

				?>

			</nav>

			<div class="col-2 col-md-2 shopping-cart">

				<?php

					if (has_nav_menu('icon-menu')) {

						wp_nav_menu(array('theme_location' => 'icon-menu' , 'container_class' => 'icon-menu-class'));
					
					} else {

						echo "Please add the shopping cart icon to this menu through the dashboard";
					
					}

				?>

			</div>

		</div>

	</header>