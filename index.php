<!-- 

the loop for wordpress. comments will not render into the outputted html files. 

index.php 

-->

<?php get_header(); ?>
<!-- body and wrapper still open. -->
<main class="the_loop">
		<p>stuff and things</p>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<!-- begin loop  -->

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
						
 <!--end loop -->
		<?php endwhile; ?>
		<?php	
			next_posts_link('&laquo; Previous Entries');
			previous_posts_link('Next Entries &laquo;');
			else : 
		?>
				<p>Not Found</p>
				<p>sorry blah blah blah, whatever you're looking for doesn't exist</p>
<?php endif; ?>
</main>
<?php get_sidebar(); get_footer(); ?>