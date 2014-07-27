<!-- functions.php -->
<?php 
	if(function_exists('register_sidebar'))
		register_sidebar(
			array(
				'name' => _('Primary Widget Area'),
				'id' => 'widget-name',
				'description' =>  _('The primary widget area'),
				'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h3 class="widet-title">',
				'after_title' => '</h3>', 
			) ); 
		register_sidebar(
			array(
				'name' => 'Second Widget Area',
			));
		register_nav_menu(
			'primary', __(
				'Navigation Menu', 'twentythirteen'
			));
		add_theme_support('nav-menus');



// end functions.php 