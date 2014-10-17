<?php 
	// adds thumbnails for posts.
		if(has_post_thumbnail()) {
			echo '<figure class="thumbnail">';
			the_post_thumbnail('thumbnail');
			echo '</figure>';
		};
	// adding post formats 
		if(has_post_format('aside'))
		{
			echo the_content();
		}
