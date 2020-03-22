<?php

	/**********Add stylesheet and JS files**********/
	function custom_theme_scripts() {

		// Boostratp Integration
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css');

		// Main CSS
		wp_enqueue_style('main-styles', get_stylesheet_uri());

		// Javascript Files
		wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
	}

	add_action('wp_enqueue_scripts', 'custom_theme_scripts');

	/**********Custom Header Logo**********/
	$custom_image_header = array(
		'width' 	=> 	417,
		'height' 	=> 	110,
		'uploads' 	=> 	true,
	);

	add_theme_support('custom-header', $custom_image_header);

	/**********Add menus to theme**********/
	function register_my_menu() {
		register_nav_menus(
			array(
				'top-menu' 	    => 	('Top Menu'),
				'icon-menu'     =>	('Cart Icon Menu'),
				'footer-left'   =>  ('Left Footer Menu'),
		    'footer-middle' =>  ('Middle Footer Menu'),
			)
		);
	}

	add_action('init', 'register_my_menu');

	/**********Add Widgets**********/

	// Create custom hero banner widget for home page
	add_action('widgets_init', 'hero_init');

	function hero_init() {
		register_widget('hero_widget');
	}

	class hero_widget extends WP_Widget {

		public function __construct() {
			$widget_details = array(
				'classname' 	=> 	'hero_widget',
				'description' 	=>	'Creates a banner containing a headline, hero image, and CTA button'
			);

			parent::__construct('hero_widget', 'Hero Banner Widget', $widget_details);

			add_action('admin_enqueue_scripts', array($this, 'hero_assets'));
		}

		public function hero_assets() {
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
			wp_enqueue_script('hero-media-upload', get_template_directory_uri() . '/js/hero-media-upload.js', array( 'jquery' )) ;
			wp_enqueue_style('thickbox');
		}

		public function widget($args, $instance) {
			echo $args['before_widget']; ?>

			<div class="hero-widget-content" style="background-image: url('<?php echo $instance['image']; ?>')">

				<?php

					if ( ! empty( $instance['sub_title'] ) ) {
						echo $args['before_title'] . apply_filters( 'widget_title', $instance['sub_title'] ). $args['after_title'];
					}

					if (! empty( $instance['title'] ) ) {
						echo '<h2 class="hero-title">' . esc_html( $instance['title']) . '</h2>';
					}

					if (! empty( $instance['description'] ) ) {
						echo '<p class="hero-description">' . esc_html( $instance['description']) . '</p>';
					}

					if (! empty( $instance['link_url'] ) ) {
						echo '<a href="' . esc_url( $instance['link_url']) . '" class="hero-link">' . esc_html( $instance['link_title']) . '</a>';
					}

				?>

			</div>

		<?php echo $args['after_widget'];
		}

		public function update($new_instance, $old_instance) {
			return $new_instance;
		}

		public function form($instance) {

			$sub_title = '';
			if (!empty($instance['sub_title'])) {
				$sub_title = $instance['sub_title'];
			}

			$title = '';
			if (!empty($instance['title'])) {
				$title = $instance['title'];
			}

			$description = '';
			if (!empty($instance['description'])) {
				$description = $instance['description'];
			}

			$link_url = '';
			if (!empty($instance['link_url'])) {
				$link_url = $instance['link_url'];
			}

			$cta_text = '';
			if (!empty($instance['cta_text'])) {
				$cta_text = $instance['cta_text'];
			}

			$image = '';
			if (isset($instance['image'])) {
				$image = $instance['image'];
			}

			?>

			<p>
				<label for="<?php echo $this->get_field_name('sub_title'); ?>"><?php _e('Sub-Title:');?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('sub_title'); ?>" name="<?php echo $this->get_field_name('sub_title'); ?>" type="text" value="<?php echo esc_attr($sub_title); ?>" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:');?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
			</p>

			<p>
		        <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
		        <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" ><?php echo esc_attr( $description ); ?></textarea>
		    </p>

		    <p>
		        <label for="<?php echo $this->get_field_name( 'link_url' ); ?>"><?php _e( 'Link URL:' ); ?></label>
		        <input class="widefat" id="<?php echo $this->get_field_id( 'link_url' ); ?>" name="<?php echo $this->get_field_name( 'link_url' ); ?>" type="text" value="<?php echo esc_attr( $link_url ); ?>" />
		    </p>

		    <p>
		        <label for="<?php echo $this->get_field_name( 'link_title' ); ?>"><?php _e( 'Link Title:' ); ?></label>
		        <input class="widefat" id="<?php echo $this->get_field_id( 'link_title' ); ?>" name="<?php echo $this->get_field_name( 'link_title' ); ?>" type="text" value="<?php echo esc_attr( $link_title ); ?>" />
		    </p>

		    <p>
			    <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
			    <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
			    <input class="upload_image_button" type="button" value="Upload Image" />
			</p>
<?php
		}
	}

	// Create Testimonial Widget
	add_action('widgets_init', 'testimonial_init');

	function testimonial_init() {
		register_widget('testimonial_widget');
	}

	class testimonial_widget extends WP_Widget {

		public function __construct() {
			$widget_details = array(
				'classname' 	=> 	'testimonial_widget',
				'description' 	=>	'Creates a product testimonial with customer name, image, location, and review'
			);

			parent::__construct('testimonial_widget', 'Testimonial Widget', $widget_details);

			add_action('admin_enqueue_scripts', array($this, 'testimonial_assets'));
		}

		public function testimonial_assets() {
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
			wp_enqueue_script('hero-media-upload', get_template_directory_uri() . '/js/hero-media-upload.js', array( 'jquery' )) ;
			wp_enqueue_style('thickbox');
		}

		public function widget($args, $instance) {
			echo $args['before_widget']; ?>

			<div class="col-sm-8 col-md-8 col-xl-9">

				<p><span class="quotes">&ldquo;</span><?php echo esc_html( $instance['review'] ); ?><span class="quotes">&rdquo;</span></p>

				<p>

					<?php

						echo '<span class="testimonial-name">' . esc_html($instance['name']) . '</span>  ';

						echo '<span class="testimonial-location">' . esc_html($instance['location']) . '</span';

					?>

				</p>

			</div>

			<div class="col-sm-4 col-md-4 col-xl-3 <?php echo $instance['image_location']; ?>">

				<img src='<?php echo $instance['image']; ?>' />

			</div>

		<?php echo $args['after_widget'];
		}

		public function update($new_instance, $old_instance) {
			return $new_instance;
		}

		public function form($instance) {

			$name = '';
			if (isset($instance['name'])) {
				$name = $instance['name'];
			}

			$location = '';
			if (isset($instance['location'])) {
				$location = $instance['location'];
			}

			$review = '';
			if (isset($instance['review'])) {
				$review = $instance['review'];
			}

			$image = '';
			if (isset($instance['image'])) {
				$image = $instance['image'];
			}

			$image_location = '';
			if (isset($instance['image_location'])) {
				$image_location = $instance['image_location'];
			}

			?>

			<p>
				<label for="<?php echo $this->get_field_name('name'); ?>"><?php _e('Name:');?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo esc_attr($name); ?>" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_name('location'); ?>"><?php _e('Location and/or Business Name:');?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('location'); ?>" name="<?php echo $this->get_field_name('location'); ?>" type="text" value="<?php echo esc_attr($location); ?>" />
			</p>

			<p>
		        <label for="<?php echo $this->get_field_name( 'review' ); ?>"><?php _e( 'Product Review:' ); ?></label>
		        <textarea class="widefat" id="<?php echo $this->get_field_id( 'review' ); ?>" name="<?php echo $this->get_field_name( 'review' ); ?>" type="text" ><?php echo esc_attr( $review ); ?></textarea>
		    </p>

		    <p>
			    <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
			    <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
			    <input class="upload_image_button" type="button" value="Upload Image" />
			</p>

			<p>

				<label for="<?php echo $this->get_field_name( 'image_location' ); ?>"><?php _e( 'Where to Display Image:' ); ?></label>
				<select class="widefat" id="<?php echo $this->get_field_id('image_location'); ?>" name="<?php echo $this->get_field_name('image_location'); ?>" type="text">
					<option value="left" <?php echo "left" == $image_location ? "selected" : ""; ?>>Left</option>
					<option value="right" <?php echo "right" == $image_location ? "selected" : ""; ?>>Right</option>
				</select>


			</p>
<?php
		}
	}

	// Initialize Widgets
	function blank_widgets_init() {

		// Home Page Widgets
		register_sidebar(array(
			'name' 			=> 	('Home Hero Banner'),
			'id' 			=> 	'home-hero',
			'description' 	=> 	'Home Page Hero Banner',
			'before_widget' => 	'<div class="widget-home-hero">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h3 class="hero-sub-title">',
			'after_title' 	=> 	'</h3>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home Intro Widget'),
			'id' 			=> 	'home-intro',
			'description' 	=> 	'Home Page Intro Section',
			'before_widget' => 	'<div class="widget-home-intro">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h2 class="intro-widget-title">',
			'after_title' 	=> 	'</h2>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home Values Title Widget'),
			'id' 			=> 	'home-values-title',
			'description' 	=> 	'Home Page Values Widget Title',
			'before_widget' => 	'<div class="widget-home-values-title">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h3 class="home-values-title">',
			'after_title' 	=> 	'</h3>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home Values Widget - Column 1'),
			'id' 			=> 	'home-values1',
			'description' 	=> 	'Home Page Values Widget - Column 1',
			'before_widget' => 	'<div class="widget-home-values">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<p class="home-values">',
			'after_title' 	=> 	'</p>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home Values Widget - Column 2'),
			'id' 			=> 	'home-values2',
			'description' 	=> 	'Home Page Values Widget - Column 2',
			'before_widget' => 	'<div class="widget-home-values">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<p class="home-values">',
			'after_title' 	=> 	'</p>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home Testimonials'),
			'id' 			=> 	'home-testimonials',
			'description' 	=> 	'Home Page Testimonials',
			'before_widget' => 	'<div class="widget-home-testimonials">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="testimonials-name">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home Tutorials Banner'),
			'id' 			=> 	'home-tutorials',
			'description' 	=> 	'Home Page Tutorials Banner',
			'before_widget' => 	'<div class="widget-home-tutorials">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h3 class="hero-sub-title">',
			'after_title' 	=> 	'</h3>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home Instagram Feed'),
			'id' 			=> 	'home-instagram',
			'description' 	=> 	'Home Page Instagram Feed',
			'before_widget' => 	'<div class="widget-home-instagram">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="instagram-title">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home Retailers Banner'),
			'id' 			=> 	'home-retailers',
			'description' 	=> 	'Home Page Retailers Banner',
			'before_widget' => 	'<div class="widget-home-retailers">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h3 class="hero-sub-title">',
			'after_title' 	=> 	'</h3>'
		));

		register_sidebar(array(
			'name' 			=> 	('Home About Sketches Widget'),
			'id' 			=> 	'home-sketches',
			'description' 	=> 	'Home Page About Sketches Widget',
			'before_widget' => 	'<div class="widget-home-sketches">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h3 class="home-sketches-title">',
			'after_title' 	=> 	'</h3>'
		));

		// Footer Widgets
		register_sidebar(array(
			'name'          => ('Footer Left'),
			'id'            => 'footer-left',
			'description'   => 'Left section of the footer',
			'before_widget' => '<div class="footer-left">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-left-widget-title">',
			'after_title'   => '</h3>',
		));

		register_sidebar(array(
			'name'          => ('Footer Middle'),
			'id'            => 'footer-middle',
			'description'   => 'Middle section of the footer',
			'before_widget' => '<div class="footer-middle">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-middle-widget-title">',
			'after_title'   => '</h3>',
		));

		// Contact Page Widgets
		register_sidebar(array(
			'name' 			=> 	('Contact Page Phone Number'),
			'id' 			=> 	'contact-page-phone-number',
			'description' 	=> 	'The phone number of Country Chic',
			'before_widget' => 	'<div class="phone-number-widget">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<p class="phone-number">',
			'after_title' 	=> 	'</p>'
		));

		register_sidebar(array(
			'name' 			=> 	('Contact Page Email'),
			'id' 			=> 	'contact-page-email',
			'description' 	=> 	'The email of Country Chic',
			'before_widget' => 	'<div class="email-address-widget">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<p class="email-address">',
			'after_title' 	=> 	'</p>'
		));

		register_sidebar(array(
			'name' 			=> 	('Contact Form'),
			'id' 			=> 	'contact-form',
			'description' 	=> 	'The contact form for Country Chic',
			'before_widget' => 	'<div>',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h3 class="hide">',
			'after_title' 	=> 	'</h3>'
		));

		register_sidebar(array(
			'name' 			=> 	('Contact Page Hours'),
			'id' 			=> 	'contact-page-hours',
			'description' 	=> 	'The hours of Country Chic',
			'before_widget' => 	'<div class="contact-page-hours">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<p class="hours-contact">',
			'after_title' 	=> 	'</p>'
		));

		// About Page Widgets

		register_sidebar(array(
			'name' 			=> 	('Secondary title'),
			'id' 			=> 	'secondary-title-about',
			'description' 	=> 	'The secondary title on the about page',
			'before_widget' => 	'<div>',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h2 class="secondary-title">',
			'after_title' 	=> 	'</h2>'
		));

		register_sidebar(array(
			'name' 			=> 	('About video'),
			'id' 			=> 	'video-about-us',
			'description' 	=> 	'A video describing Country Chic',
			'before_widget' => 	'<div class="video-container">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h2>',
			'after_title' 	=> 	'</h2>'
		));

		register_sidebar(array(
			'name' 			=> 	('Values title'),
			'id' 			=> 	'about-values-title',
			'description' 	=> 	'The values of the about page',
			'before_widget' => 	'<div class="title-about-values">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h2 class="secondary-title">',
			'after_title' 	=> 	'</h2>'
		));

		register_sidebar(array(
			'name' 			=> 	('Low Environment Impact Value'),
			'id' 			=> 	'low-impact-value',
			'description' 	=> 	'Low Environmental Impact Value',
			'before_widget' => 	'<div class="our-values">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="values">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Supporting the local economy'),
			'id' 			=> 	'local-economy-value',
			'description' 	=> 	'Supporting the local economy value',
			'before_widget' => 	'<div class="our-values">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="values">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Participating in Recycling Programs'),
			'id' 			=> 	'recycling-programs-value',
			'description' 	=> 	'Participating in Recylcling Programs value',
			'before_widget' => 	'<div class="our-values">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="values">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Helping those in need'),
			'id' 			=> 	'those-in-need-value',
			'description' 	=> 	'Helping those in need value',
			'before_widget' => 	'<div class="our-values">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="values">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Low Environment Impact Value Icon'),
			'id' 			=> 	'low-impact-value-icon',
			'description' 	=> 	'Low Environmental Impact Value Icon',
			'before_widget' => 	'<div class="about-values-icon">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="values">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Supporting the local economy Icon'),
			'id' 			=> 	'local-economy-value-icon',
			'description' 	=> 	'Supporting the local economy value Icon',
			'before_widget' => 	'<div class="about-values-icon">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="values">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Participating in Recycling Programs Icon'),
			'id' 			=> 	'recycling-programs-value-icon',
			'description' 	=> 	'Participating in Recylcling Programs value icon',
			'before_widget' => 	'<div class="about-values-icon">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="values">',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Helping those in need Icon'),
			'id' 			=> 	'those-in-need-value-icon',
			'description' 	=> 	'Helping those in need value icon',
			'before_widget' => 	'<div class="about-values-icon">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4 class="values">',
			'after_title' 	=> 	'</h4>'
		));


		register_sidebar(array(
			'name' 			=> 	('Meet Us Title'),
			'id' 			=> 	'meet-us-title',
			'description' 	=> 	'Title of the Meet Us Section',
			'before_widget' => 	'<div class="meet-us">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h3>',
			'after_title' 	=> 	'</h3>'
		));


		register_sidebar(array(
			'name' 			=> 	('Rosanne Picture'),
			'id' 			=> 	'rosanne-picture',
			'description' 	=> 	'Picture of Rosanne',
			'before_widget' => 	'<div class="about-us-pictures">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4>',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Rosanne Picture Info'),
			'id' 			=> 	'rosanne-picture-info',
			'description' 	=> 	'Information of Rosanne',
			'before_widget' => 	'<div class="about-us-pictures-info">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h2>',
			'after_title' 	=> 	'</h2>'
		));

		register_sidebar(array(
			'name' 			=> 	('Jan Picture'),
			'id' 			=> 	'jan-picture',
			'description' 	=> 	'Picture of Jan',
			'before_widget' => 	'<div class="about-us-pictures">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4>',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Jan Picture Info'),
			'id' 			=> 	'jan-picture-info',
			'description' 	=> 	'Information of Jan',
			'before_widget' => 	'<div class="about-us-pictures-info">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h2>',
			'after_title' 	=> 	'</h2>'
		));

		register_sidebar(array(
			'name' 			=> 	('Sarah Picture'),
			'id' 			=> 	'sarah-picture',
			'description' 	=> 	'Picture of Sarah',
			'before_widget' => 	'<div class="about-us-pictures">',
			'after_widget'	=> 	'</div>',
			'before_title'	=> 	'<h4>',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Sarah Picture Info'),
			'id' 			=> 	'sarah-picture-info',
			'description' 	=> 	'Information of Sarah',
			'before_widget' => 	'<div class="about-us-pictures-info">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h2>',
			'after_title' 	=> 	'</h2>'
		));

		register_sidebar(array(
			'name' 			=> 	('Christa Pictures'),
			'id' 			=> 	'christa-picture',
			'description' 	=> 	'Picture of Christa',
			'before_widget' => 	'<div class="about-us-pictures">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h4>',
			'after_title' 	=> 	'</h4>'
		));

		register_sidebar(array(
			'name' 			=> 	('Christa Pictures Info'),
			'id' 			=> 	'christa-picture-info',
			'description' 	=> 	'Information of Christa',
			'before_widget' => 	'<div class="about-us-pictures-info">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h2>',
			'after_title' 	=> 	'</h2>'
		));

	}

	add_action('widgets_init', 'blank_widgets_init');

	/**********Enable HTML in Specified Widget Titles**********/
	add_filter( 'contact-page-phone-number', 'accept_html_widget_title_link' );
	add_filter( 'contact-page-email', 'accept_html_widget_title_link' );

	function accept_html_widget_title_link( $mytitle ) { 

	  // The sequence of String Replacement is important!!
	  
		$mytitle = str_replace( '[link', '<a', $mytitle );
		$mytitle = str_replace( '[/link]', '</a>', $mytitle );
	    $mytitle = str_replace( ']', '>', $mytitle );
		

		return $mytitle;
	}

	add_filter( 'home-intro', 'accept_html_widget_title_span' );

	function accept_html_widget_title_span( $mytitle ) { 

	  // The sequence of String Replacement is important!!
	  
		$mytitle = str_replace( '[span', '<span', $mytitle );
		$mytitle = str_replace( '[/span]', '</span>', $mytitle );
	    $mytitle = str_replace( ']', '>', $mytitle );
		

		return $mytitle;
	}

	/**********Add Featured Image Capability**********/
	add_theme_support('post-thumbnails');

	/**********Create a Custom Post Type for Tutorials**********/
	function create_post_type(){
		register_post_type('tutorial_types',
			array(
				'labels' => array(
					'name' => __('Tutorials'),
					'singular_name' => __('Tutorials')
				),
				
				'public' 			=> true,
				'has_archive'		=> true,
				'show_in_menu'		=> true,
				'show_in_nav_menus' => true,
				'show_in_admin_bar' => true,
				'menu_position' 	=> 2,
				'can_export' 		=> true,
				'menu_icon' 		=> 'dashicons-video-alt2',
				'supports'			=> array('title', 'editor', 'thumbnail', 'excerpt'),
			)
		);
	}

	add_action('init', 'create_post_type');
















?>
