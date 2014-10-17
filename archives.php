<?php get_header(); ?>
<!--
Template Name: Archives
-->


<main class="content">
	<?php the_post(); ?>
	<h2 class="title">
		<?php the_title(); ?>
	</h2>
	<?php get_search_form(); ?>
	<h3>Archives by Month:</h3>
	<ul>
		<?php wp_get_archives( 'type=monthly'); ?>
	</ul>
	<h3>Archives by Subject:</h3>
	<ul>
		<?php wp_list_categories(); ?>
	</ul>
</main>
<?php get_sidebar(); get_footer(); ?>