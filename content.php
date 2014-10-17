<article class="entry">

	<section class="content cf">
		<?php 			
			// adds post thumbnail.
			if(has_post_thumbnail()) {
				echo '<figure class="banner">';
				the_post_thumbnail('large');
				echo '</figure>';
			}; 
		?>
		<h2 class="title"><?php the_title(); ?></h2>
		<?php the_content();?>
	</section>
	<!-- /content -->
	
	<div class="entry-info">
		<p class="blogcategory">Categories:
			<?php the_category('&bull;'); ?>
		</p>
		<p class="blogtags">
			<?php the_tags(); ?>
		</p>
		<?php edit_post_link(__( '<strong>edit post.</strong>')); ?>
	</div>
	
</article>
<!-- /entry -->