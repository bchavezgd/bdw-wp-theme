<!-- 

the loop for wordpress. comments will not render into the outputted html files. 

index.php 

-->

<?php get_header(); ?> <!-- body and wrapper still open. -->
	<main class="the_loop wrapper">
		<hr>
		<?php get_template_part('loop'); ?>
	</main>
<?php	
	get_sidebar();
	get_footer();
?>
