<?php
get_header();
echo '<main class="the_loop">';
if(is_home()){
	get_template_part('loop','home');
} 
else {
	get_template_part('loop');
};
echo '</main> <hr>';
get_sidebar();
get_footer();