<?php // begin the_loop  
	if( have_posts() ) :
		while( have_posts() ) : the_post(); 
?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>"  ><?php the_title(); ?></a>
			<p class="byline">
					Posted by: <?php the_author(); ?>
			</p>
			<div class="the_content">
				<?php // adding custom post classes 
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
						else { // if no other post types are present, displays standard post type.
                         
                            
							echo '<h3 class="title">';
                            echo '<a href="';
                            echo the_permalink();
                            echo ' "> ';
							echo the_title();
							echo '</a></h3>';
							echo the_excerpt('...');
						}
						// adds thumbnails for posts.
						if(has_post_thumbnail())
						{
							the_post_thumbnail('thumbnail');
						}

					
				?>
			</div>
			<p class="dated">
				Posted on: <?php echo get_the_date(); ?>, at <?php echo get_the_time(); ?> in <?php the_category(','); ?>
			</p>
			
		</article>
										
		<?php //ends the_loop
			endwhile; ?>
		<?php	next_posts_link('&laquo; Previous Entries');
			previous_posts_link('Next Entries &laquo;');
			else : ?>
				<p>Not Found</p>
				<p>sorry blah blah blah, whatever you're looking for doesn't exist</p>
		<?php endif; ?>