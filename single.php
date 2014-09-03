<?php // single.php
get_header(); ?>
<hr>
<article class="entry" >
	<section class="content cf">
		<h3 class="title"><?php the_title(); ?></h3>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content();?>
	</section><!-- .entry-content -->
		<p class="blogcategory">Categories: <?php the_category(' &bull; '); ?></p>
		<p class="blogtags"><?php the_tags(); ?> </p> 
		<?php 
			edit_post_link(__('<strong>Edit</strong>'));
				endwhile;
				endif;
		?>
	
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
</article>
<hr>
<?php
    get_sidebar();
    get_footer();
?>