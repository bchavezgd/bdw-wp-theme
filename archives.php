<?php
/*
Template Name: Archives
*/
get_header(); ?>

<main class="content">
	<?php the_post(); ?>
	<h1 class="title"><?php the_title(); ?></h1>
	<?php get_search_form(); ?>
	<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
	<h2>Archives by Subject:</h2>
	<ul>
		<?php wp_list_categories(); ?>
	</ul>
</main>
<?php 
	get_sidebar();
	get_footer(); 
?>