<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
	
	<div class="entry-meta">
		<p>Posted on: <time datetime="<?php echo get_the_date(); ?> <?php the_time(); ?>"><?php the_date(); ?><?php the_time(); ?></time></p>
		<p>by: <?php the_author_link(); ?></p>
		
		<!-- categories --> 
		<?php 
			// show categories and tags on single posts
			if(is_singular('posts')): 
		?>
		<p class="blogcategory">
		Filed in: <?php the_category(', '); ?>
		<br>	
		<?php the_tags('and tagged with ', ', ', ' '); ?>
		</p>
		<?php endif; ?>
			
		
		<!-- comments -->
		<?php 

			edit_post_link(__( '<p><strong>edit post.</strong></p>')); 

			// are comments open?
			if (comments_open()){ 
				echo '&bull; ';
				comments_popup_link('no comments', '1 comment', '% comments');  
			}; 
		?>
		
	</div>
	
</article>
<!-- /entry -->