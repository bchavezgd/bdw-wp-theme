<!-- 

page.php

-->

<?php get_header(); ?>
<main class="cf">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	
 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <h3 class="title">
		 <a href="<?php the_permalink(); ?>" rel="bookmark" >
		 	<?php the_title(); ?>
		 </a>
	 </h3><!-- end title -->
	 <section class="content cf">
	 	<?php the_content(__('(more...)')); ?>
	 </section><!-- end content -->
 
	 <?php 
	endwhile;
	else: 
		echo "<p>";
		 _e('Keep Moving... nothing to see here');
		echo "</p>";
	endif;
?>
	 

</div>
	<p> this is the end of the content div. below should be sidebar</p>
	</main>
<?php get_sidebar(); ?>
end sidebar, footer below
<?php get_footer(); ?>