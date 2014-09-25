<!-- loop-second.php -->
<!-- 

This is a template_part. to call into other files use command
	get_template_part('slug','name'); 

to call this template part use. 
	get_template part('loop','second');

second post loop, second loop, if blog posts are on the landing page. 

-->

<?php 

	$args=array( // second post loop arguments. 
		'showposts'=>3 
		// 'category_name'=>'stuff'
	);

	$second_loop=new WP_query($args);

	while($second_loop->have_posts()): $second_loop->the_post(); ?>
<!-- begin loop everything from here to end will repeat -->
		
<!-- loop content and styling --> 

		<section <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>" ><h2><?php the_title(); ?></h2></a>
			<p class="byline">Posted by: <?php the_author(); ?><br>
				Posted on: <?php echo get_the_date(); ?>, at <?php echo get_the_time(); ?> in <?php the_category(','); ?>
			</p>
			<div class="the_content">
				<?php the_excerpt(); ?>
			</div>			
		</section>
<!-- end loop content and styling --> 						

<?php endwhile; ?> <!--ends loop -->
<?php wp_reset_postdata(); ?>
<!-- goes back to home.php -->