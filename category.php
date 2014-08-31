<?php get_header(); ?>
<hr><main>
<h2>category <?php the_category(', '); ?> </h2>
	<?php // loop
		if(have_posts()):while(have_posts()):the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	 			<div class="content">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h3><?php the_title(); ?></h3>
					</a>
				</div><!-- end content -->
			</div><!-- end post_class -->
	<?php 
		endwhile;
		else: 
			echo "<p>";
			_e('nothing to see here');
			echo "</p>";
endif; // end loop
echo "</main><hr>"; // end main
// sidebar left out intentionally.
get_footer();
