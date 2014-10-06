<section class="featured cf">
	<?php 
		$do_not_duplicate=null; 
		$args=array( // featured post loop arguments. 
			'showposts' => 2, 
			'category_name' => 'featured' 
		); 
		$featured=new WP_query($args);
		while($featured->have_posts()): $featured->the_post(); 
		// save the post ID  to DND
		$do_not_duplicate[]=$post->ID; 
	?>
	<!-- loop content and styling -->

	<article id="post-
		<?php the_ID(); ?>" <?php post_class() ?>>
		
			<?php 			
				// adds thumbnails for posts.
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
	</article><!-- end loop -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</section>

<div class="row">
	<section class="second-loop">
	<h2>Latest Stuff:</h2>
	<?php  
		// loop arguments
		$args=array( 
			'showposts' => 1, 
			'category_name' => 'stuff.' 
		); 

		// query 
		$second_loop=new WP_query($args); 

		// loop 
		while($second_loop->have_posts()): $second_loop->the_post(); 
		
		

		// prevents output of featured posts to second loop.
		if(in_array($post->ID, $do_not_duplicate))continue; 
		update_post_caches($posts); 
	?>
		<!-- loop content and styling -->
			<article <?php post_class() ?> id="post-
				<?php the_ID(); ?>">
				<?php 			
				// adds thumbnails for posts.
				if(has_post_thumbnail()) {
					echo '<figure>';
					the_post_thumbnail('thumbnail');
					echo '</figure>';
				}; 
			?>
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
				</a>
				<p class="byline">Posted by:
					<?php the_author(); ?>
					<br>Posted on:
					<?php echo get_the_date(); ?>, at
					<?php echo get_the_time(); ?>in
					<?php the_category( ','); ?>
				</p>
				<div class="the_content">
					<?php the_excerpt(); ?>
				</div>
			</article>
	
		<!-- end loop content and styling -->
		<?php 
			// save id to DND
			$do_not_duplicate[]=$post->ID; 
		?>
		<?php endwhile; ?><!--ends loop -->
		<?php wp_reset_postdata(); ?><!-- goes back to home.php -->

</section>
<!-- end second-loop -->
<!-- third loop -->
	<section class="third-loop">
		<h2>Latest things:</h2>
			<?php 
				// loop arguments
				$args = array(
					'category_name' => 'things',
					'showposts' => 1
				);
				// query
				$third_loop=new WP_query($args);
				// loop
				while($third_loop->have_posts()): $third_loop->the_post(); 

				// filters duplicate posts
				if(in_array($post->ID,$do_not_duplicate))continue;
				update_post_caches($posts);
			
			?>
		<!-- loop content and style output -->
			<article <?php post_class() ?> id="post-
				<?php the_ID(); ?>">
				<?php 			
				// adds thumbnails for posts.
				if(has_post_thumbnail()) {
					echo '<figure>';
					the_post_thumbnail('thumbnail');
					echo '</figure>';
				}; 
			?>
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
				</a>
				<p class="byline">Posted by:
					<?php the_author(); ?><br>
					Posted on:
					<?php echo get_the_date(); ?>, at
					<?php echo get_the_time(); ?>in
					<?php the_category( ','); ?>
				</p>
				<div class="the_content">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php $do_not_duplicate[]=$post->ID; ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</section><!-- end third loop -->
</div><!-- end row -->

	<!-- begin loop -->	
	<?php 
while( have_posts() ) : the_post(); 
if(in_array($post->ID,$do_not_duplicate))continue;
update_post_caches($posts);
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="the_content">	
		<?php 
			// adds thumbnails for posts.
				if(has_post_thumbnail()) {
					echo '<figure>';
					the_post_thumbnail('thumbnail');
					echo '</figure>';
				};
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
			</div>
			<p class="byline">Posted by: <?php the_author(); ?></p>
			<p class="dated">Posted on: <?php echo get_the_date(); ?>, at <?php echo get_the_time(); ?> in <?php the_category(', '); ?></p>
			
		</article>
 					
		<?php endwhile; ?><!-- end loop -->
		<?php	
			next_posts_link('&laquo; Previous Entries');
			previous_posts_link('Next Entries &laquo;');
?>
		