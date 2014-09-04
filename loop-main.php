<!-- the loop-main.php -->
<!-- 

This is a template_part. to call into other files use command
	get_template_part('slug','name'); 

to call this template part use. 
	get_template part('loop','main');

-->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?><!-- begin loop  -->
		<hr /> <!-- remove this later -->
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
			<p class="byline">
					Posted by: <?php the_author(); ?>
			</p>
			<p class="dated">
				Posted on: <?php echo get_the_date(); ?>, at <?php echo get_the_time(); ?> in <?php the_category(','); ?>
			</p>
			<div class="the_content">
				<?php the_content(); ?>
			</div>			
		</article>
										
		<?php endwhile; ?> <!--ends the_loop -->
		<?php	
			next_posts_link('&laquo; Previous Entries');
			previous_posts_link('Next Entries &laquo;');
			else : 
		?>
				<p>Not Found</p>
				<p>sorry blah blah blah, whatever you're looking for doesn't exist</p>
<?php endif; ?><!-- goes back to index.php -->