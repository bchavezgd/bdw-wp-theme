<article id="post-<?php the_ID(); ?>" <?php post_class() ?> >
		
	<?php 			
		// adds post thumbnail.
		if(has_post_thumbnail()) {
			echo '<figure>';
			the_post_thumbnail('thumbnail');
			echo '</figure>';
		}; 
	?>
		
	<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
	</a>
	<p class="byline">Posted by:
		<?php the_author(); ?><br>
		Posted on: 
		<?php echo get_the_date(); ?>, at
		<?php echo get_the_time(); ?>in
		<?php the_category(','); ?>
	</p>
	<div class="the_content">
		<?php the_excerpt(); ?>
	</div>
</article>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
			<p class="byline">
					Posted by: <?php the_author(); ?>
			<br>
			<span class="dated">
				Posted on: <?php echo get_the_date(); ?>, at <?php echo get_the_time(); ?> in <?php the_category(','); ?>
				</span>
			</p>
			<div class="the_content">
				<?php the_content(); ?>
			</div>			
		</article>