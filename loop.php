<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<article class="the_content">
			
		<?php 
			// adds thumbnails for posts.
				if(has_post_thumbnail()) {
					the_post_thumbnail('thumbnail');
				}
			// adding post formats 
				if(has_post_format('aside'))
				{
					echo the_content();
				}
				elseif(has_post_format('chat'))
				{
					echo '<h3 class="title">';
					echo the_title();
					echo '</h3>';
					echo the_content();
				}
				elseif(has_post_format('gallery'))
				{
					echo '<h3 class="title">';
					echo the_title();
					echo '</h3>';
					echo the_content();
				}
				elseif(has_post_format('image')) 
				{
					echo '<h3 class="title">';
					echo the_title();
					echo '</h3>';
					echo the_post_thumbnail('image-format');
					echo the_content();
				}
				elseif(has_post_format('link'))
				{
					echo '<h3 class="title">';
					echo the_title();
					echo '</h3>';
					echo the_content();
				}
				elseif(has_post_format('quote'))
				{
					echo the_content();
				}
				elseif(has_post_format('status'))
				{
					echo the_content();
				}
				elseif(has_post_format('video'))
				{
					echo '<h3 class="title">';
					echo the_title();
					echo '</h3>';
					echo the_content();
				}
				elseif(has_post_format('audio'))
				{
					echo '<h3 class="title">';
					echo the_title();
					echo '</h3>';
					echo the_content();
				}
				else { 
// if no other post types are present, 
// displays standard post type
					echo '<h3 class="title"><a href="';
					echo the_permalink();
					echo ' "> ';
					echo the_title();
					echo '</a></h3>';
					echo the_excerpt();
				}
						
// links from this loop will lead all to single.php template
// us get_template_part('content', get_post_format()); 
// to make custom post format templates. 
	
			?>
			</article>
			<p class="byline">Posted by: <?php the_author(); ?></p>
			<p class="dated">Posted on: <?php echo get_the_date(); ?>, at <?php echo get_the_time(); ?> in <?php the_category(', '); ?></p>
			
		</section>
 					
		<?php endwhile; ?><!-- end loop -->
		<?php	
			next_posts_link('&laquo; Previous Entries');
			previous_posts_link('Next Entries &laquo;');
			else : ?>
				<p>Not Found</p>
				<p>sorry blah blah blah, whatever you're looking for doesn't exist</p>
		<?php endif; ?>