<?php get_header(); ?>
<main id="post-0" class="post no-results not-found">
	<h2 class="entry-title">404 Page Not Found</h2>
	<?php 
		echo '<p>';
		_e('Sorry, this page doesn\'t seem to exist. Maybe the link was broken.');
		echo '<br>';
		_e('Would you like to search for whatever you where looking for? ');
		echo '</p>';
		get_search_form(); 
	?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>