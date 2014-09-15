<?php
	get_header();
	echo '<main class="the_loop">';
		get_template_part('loop');
	echo '</main>';
	get_sidebar();
	get_footer();