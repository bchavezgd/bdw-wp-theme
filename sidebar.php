<!-- Sidebar -->
<aside id="sidebar">
	<ul>
		<?php 
			if(!function_exists('dynamic_sidebar')||!dynamic_sidebar('Sidebar') ) : 
//echo 'sidebar widets go here';
			endif;
		?>  
		<?php 
			if (!dynamic_sidebar('Primary Widget Area'));
			if (!dynamic_sidebar('Surprise Mother Fucker'));
		?>
	</ul>
</aside>
<!-- end sidebar -->