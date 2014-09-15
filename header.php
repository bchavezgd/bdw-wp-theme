<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	
	<title>
		<?php 
			bloginfo('name'); 
			if(is_single()) 
				echo "&raquo; Blog Archive";
			wp_title(); 
		?>
	</title>

	<!-- font face import -->  
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic|Source+Code+Pro|Oswald:400,700' rel='stylesheet' type='text/css'>

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if( is_singular()) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head (); ?>
</head>
	
	<body <?php body_class(); ?> >
		<div class="wrapper cf">
		<header>
			<div class="masthead">
				<h1>
					<a href="<?php bloginfo('url'); ?>" id="site_name" >
						<?php bloginfo('name'); ?>
					</a>
				</h1>
				<p>
					<?php bloginfo('description'); // tagline ?>
				</p>
			</div>
		
			<nav>
				<!--<ul>-->
					<?php wp_nav_menu(); ?>
				<!--</ul>-->
			</nav>
			
		</header>