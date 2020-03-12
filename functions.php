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
				'top-menu' => ('Top Menu')
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

			<div style="background-image: url('<?php echo $instance['image']; ?>')">

				<?php if ( ! empty( $instance['sub_title'] ) ) {
					echo $args['before_title'] . apply_filters( 'widget_title', $instance['sub_title'] ). $args['after_title'];
				} ?>

				<h2 class="hero-title"><?php echo wpautop( esc_html( $instance['title'] ) ) ?></h2>

				<div class='hero-description'>
					<?php echo wpautop( esc_html( $instance['description'] ) ) ?>
				</div>

				<div class='hero-link'>
					<a href='<?php echo esc_url( $instance['link_url'] ) ?>'><?php echo esc_html( $instance['link_title'] ) ?></a>
				</div>

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

	// Initialize Widgets
	function blank_widgets_init() {
		register_sidebar(array(
			'name' 			=> 	('Home Hero Banner'),
			'id' 			=> 	'home-hero',
			'description' 	=> 	'Home Page Hero Banner',
			'before_widget' => 	'<div class="widget-home-hero">',
			'after_widget' 	=> 	'</div>',
			'before_title' 	=> 	'<h3 class="hero-sub-title">',
			'after_title' 	=> 	'</h3>'
		));
	}

	add_action('widgets_init', 'blank_widgets_init');

	/**********Add Featured Image Capability**********/
	add_theme_support('post-thumbnails');

	/**********Create a Custom Post Type for Tutorials**********/
	

?>