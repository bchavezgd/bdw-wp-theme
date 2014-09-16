<!--

single post template 

single.php

-->
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="entry" >
	<section class="content cf">
		<!-- change to get_template_part('content',get_post_format()); -->
		<h3 class="title"><?php the_title(); ?></h3>
		<?php the_content();?> 

	</section><!-- /content -->
	<div class="entry-info">
		<p class="blogcategory">Categories: <?php the_category(' &bull; '); ?></p>
		<p class="blogtags"><?php the_tags(); ?> </p> 
		<?php 
			edit_post_link(__('<strong>Edit</strong>'));
			endwhile;
			endif;
		?>
	</div>
	</article><!-- /entry -->
<hr>
	<?php
		wp_link_pages( 
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bdw' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
		));
	?>

<hr>
<?php
    get_sidebar();
    get_footer();
?>