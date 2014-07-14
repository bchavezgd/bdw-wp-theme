<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<title>
		<?php 
			bloginfo('name'); 
		?> 
		<?php if( is_single() ) { ?> 
			&raquo; Blog Archive 
		<?php } ?>
		<?php wp_title(); ?>
	</title>
	<link /> <!-- font face import --> 
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheets_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head (); ?>
</head>
	<body <?php body_class(); ?> >
		<div class="wrapper">
		<header class="site_name">
			<div>
				<h1>
					<a href="<?php bloginfo('url'); ?>" id="site_name"><?php bloginfo('name'); ?></a>
				</h1>
				<p>
					<?php bloginfo('description'); ?>
				</p>
			</div>
		</header>
	<!-- end header.php -->