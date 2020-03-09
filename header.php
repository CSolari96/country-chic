<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=content-device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>

</head>

<body>

	<header>

		<?php

			if (get_header_image() == '') { ?>

				<h1>
					<a href="<?php echo get_home_url();?>"><?php bloginfo('name'); ?></a>
				</h1>

		<?php } else { ?>

				<a href="<?php echo get_home_url();?>">
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" />
				</a>

		<?php } ?>

		<nav>

		</nav>

	</header>