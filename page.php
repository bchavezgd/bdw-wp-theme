<?php // page.php

get_header(); ?>
<main class="cf">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <h3 class="title">
		 <a href="<?php the_permalink(); ?>" rel="bookmark" >
		 	<?php the_title(); ?>
		 </a>
	 </h3><!-- end title -->
	 <div class="content">
	 	<?php the_content(__('(more...)')); ?>
	 </div><!-- end content -->
 <?php 
	endwhile;
	else: 
		echo "<p>";
		 _e('Keep Moving... nothing to see here');
		echo "</p>";
	endif;

echo "</div>"; //<!-- end post -->

echo "</main>";

get_sidebar();
get_footer();