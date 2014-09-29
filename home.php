<?php


	get_header();
	echo '<main class="the_loop">';
		if(is_home()){
			echo '<div class="sexy-loops">';
			get_template_part('loop','home');
			echo '</div>';
		};
		get_template_part('loop');
	echo '</main> <hr>';
	get_sidebar();
	get_footer();