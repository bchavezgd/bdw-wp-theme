<?php 
get_header();
// if it is a search result
if(is_search()): ?>
<section class="page-header">
	<h2 class="page-title">
		you searched for:<br>
		<span><?php the_search_query(); ?></span>
	</h2>
</section>
<?php endif; ?>