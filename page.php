<?php 
/*
*	standard page template 
*
*	page.php
*
*/

get_header(); 

// query
if (have_posts()) : 

// loop
while (have_posts()) : the_post();

// seperate file.
get_template_part('content','page');

// end loop
endwhile; 

// end query
endif;

// links pulled from custom menus
	wp_link_pages( 
		array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bdw' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
	));

get_sidebar();
get_footer();