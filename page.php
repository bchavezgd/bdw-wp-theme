<?php get_header(); ?>

<main class="cf">

	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="title">
		 <a href="<?php the_permalink(); ?>" rel="bookmark" >
		 	<?php the_title(); ?>
		 </a>
	 </h2>
		<!-- end title -->
		<section class="content cf">
			<?php the_content(); ?>
		</section>
		<!-- end content -->
		<?php 
			endwhile; 
			else : 
				echo "<p>";
				_e( 'Keep Moving... nothing to see here'); 
				echo "</p>"; 
			endif; 
		?>
	</article>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>