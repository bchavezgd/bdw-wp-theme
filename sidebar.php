<!-- Sidebar -->
<aside id="sidebar">
	<ul>
		<?php 
			if(!function_exists('dynamic_sidebar') || // this means or
			   !dynamic_sidebar('Sidebar') ) : 
			endif;
		?>  
		<?php if (!dynamic_sidebar('Primary Widget Area')) : ?>
		<?php endif; ?>
	</ul>
</aside>
<!-- end sidebar -->