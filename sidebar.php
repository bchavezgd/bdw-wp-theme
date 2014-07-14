<!-- Sidebar -->
<aside id="side" class="sidebar">
	<ul>
		<?php 
			if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : 
			endif;
		?>
	</ul>
</aside>
<!-- end sidebar -->