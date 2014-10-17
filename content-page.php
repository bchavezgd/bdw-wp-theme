<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<section class="head">
	<?php 			
		// adds post thumbnail.
		if(has_post_thumbnail()) {
			echo '<figure class="banner">';
			the_post_thumbnail('large');
			echo '</figure>';
		}; 
	?>
		<h2 class="title">
			<?php the_title(); ?>
		</h2>
	</section>
	<section class="content">
		<?php the_content(); ?>
	</section>
		
		<?php if(is_single()): ?>
			<div class="entry-meta" >
				<p>Posted on: 
					<time datetime="<?php echo get_the_date(); ?> <?php the_time(); ?>">
						<?php the_date(); ?> <?php the_time(); ?>
					</time>
				</p>
				<p>
					by: <?php the_author_link(); ?>
				</p>
			</div>
		<?php endif; ?>
		
		
		<?php // are comments open. 
		if(comments_open()): ?>
			<div class="comments">
				&bull; 
				<?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
			</div>
		<?php endif; ?>
					
					
		<?php if(is_singular('post')): ?>
			<div class="blogcategory">
				Filed in: <?php the_category(', '); ?>
				<br>	
				<?php the_tags('and tagged with ', ', ', ' '); ?>
			</div>
		<?php endif; ?>

	

</article>