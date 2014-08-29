<?php 
	if(function_exists('register_sidebar'))
		// adds area for wordpress widgets. 
		register_sidebar(
			array(
				'name' 	=> _('Primary Widget Area'),
				'id' 	=> 'widget-name',
				'description'	 =>  _('The primary widget area'),
				'before_widget'	 => '<li id="%1$s" class="widget-container %2$s">',
				'after_widget'	 => '</li>',
				'before_title'	 => '<h3 class="widget-title">',
				'after_title'	 => '</h3>', 
			)// end array
		)// end register sidebar
	; // endif 
// creates second widget
	register_sidebar(
			array(
				'name' => 'Second Widget Area',
				'description' => _('Surprise Mother Fucker'),
				'id' => 'widget02'
			));
// registers a "nav_menu" to be called into theme customization 
	register_nav_menu('primary', __('Navigation Menu', 'bdw'));
// create an area in the "customize" section for a nav menu. 
// adds theme support
	add_theme_support('nav-menus');
// add support for common post types. 
	add_theme_support('post-formats',
		  array(
			'aside',
			'chat',
			'gallery',
			'image',
			'link',
			'quote',
			'status',
			'video', 
			'audio',
		));
// add theme support for thumbnails.
	add_theme_support('post-thumbnails');
// custom images sizes
	add_image_size('custom', 300, 200, true);
// creating custom post types. 
//defaults to single.php, need to add single-generic-content.php to for custom template. 
	add_action('init','create_post_type');
		function create_post_type(){
			register_post_type('generic-content', 
				array(
					'labels' => array(
						'name' => __('Generic Content'),
						'singular_name' => __('Generic Content')
						),
					'public' => true
				)
			);
		}
