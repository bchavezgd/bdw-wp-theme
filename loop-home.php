
<?php 
/* 
*	Featured loop 
* 	
*	this is the featured loop. anything marked
*	in the Featured category will appear here.
*	
*	if there isn't anything in the Featured Category, 
*	nothing will show up. 
*/

// prevents undefined variable error
$do_not_duplicate=null; 

/* FRUITLOOPS */
// featured post loop arguments.		
$featured=array(  
	'showposts' => 2, 
	'category_name' => 'featured' 
); 

// creating new query.
$feature=new WP_query($featured);

// if statment to prevent showing a blank div
if($feature->have_posts()):

// starts html 
echo '<section class="featured cf">';

// start new loop.
while($feature->have_posts()): $feature->the_post(); 

// save the post ID  to DND array
$do_not_duplicate[]=$post->ID; 

// seperates content from loop. 
get_template_part('content','home');

// ends loop
endwhile; 
endif;

// ends html
echo '</section>';

// restarts loop.
wp_reset_postdata(); 


// loop arguments
$second=array( 
	'showposts' => 1, 
	'category_name' => 'stuff' 
); 
// query 
$second_loop=new WP_query($second); 

if($second_loop->have_posts()):

echo '<div class="row">';
// second loop
echo '<section class="second-loop"><h2>Latest Stuff:</h2>';

// loop 
while($second_loop->have_posts()): $second_loop->the_post(); 

// prevents error if there are no Featured posts
if($feature->have_posts()){
	// prevents output of featured posts to second loop.
	if(in_array($post->ID, $do_not_duplicate))continue;
};
// filters posts
update_post_caches($posts); 

// seperates content from loop. 
get_template_part('content','home');

// end second loop
echo '</section><!-- end second-loop -->';

// save id to DND
$do_not_duplicate[]=$post->ID; 

// end loop
endwhile;
endif;
// restarts loop
wp_reset_postdata(); 



// loop arguments
$third = array(
	'category_name' => 'things',
	'showposts' => 1
);
// query
$third_loop=new WP_query($third);

// third loop 
if($third_loop->have_posts()):
echo '<section class="third-loop"><h2>Latest things:</h2>';
// loop
while($third_loop->have_posts()): $third_loop->the_post(); 

// prevents error if there are no Featured posts
if($second_loop->have_posts()){
	// filters duplicate posts
	if(in_array($post->ID,$do_not_duplicate))continue;
};
update_post_caches($posts);

// seperates content from loop. 
get_template_part('content','home');

// save id to DND
$do_not_duplicate[]=$post->ID; 

// end loop
endwhile;
endif;
// end second loop
echo '</section><!-- end third-loop -->';

echo '</div><!-- end row -->';


// restarts loop
wp_reset_postdata(); 
// main loop 

// loop, no query
while( have_posts() ) : the_post(); 

// filter posts that have already been displayed. 
if(in_array($post->ID,$do_not_duplicate))continue;
update_post_caches($posts);

// seperate content from loop. 
// get_template_part('content',get_post_format());
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="the_content">	
<?php 
	// adds thumbnails for posts.
		if(has_post_thumbnail()) {
			echo '<figure>';
			the_post_thumbnail('thumbnail');
			echo '</figure>';
		};
	// adding post formats 
		if(has_post_format('aside'))
		{
			echo the_content();
		}
		elseif(has_post_format('chat'))
		{
			echo '<h3 class="title">';
			echo the_title();
			echo '</h3>';
			echo the_content();
		}
		elseif(has_post_format('gallery'))
		{
			echo '<h3 class="title">';
			echo the_title();
			echo '</h3>';
			echo the_content();
		}
		elseif(has_post_format('image')) 
		{
			echo '<h3 class="title">';
			echo the_title();
			echo '</h3>';
			echo the_post_thumbnail('image-format');
			echo the_content();
		}
		elseif(has_post_format('link'))
		{
			echo '<h3 class="title">';
			echo the_title();
			echo '</h3>';
			echo the_content();
		}
		elseif(has_post_format('quote'))
		{
			echo the_content();
		}
		elseif(has_post_format('status'))
		{
			echo the_content();
		}
		elseif(has_post_format('video'))
		{
			echo '<h3 class="title">';
			echo the_title();
			echo '</h3>';
			echo the_content();
		}
		elseif(has_post_format('audio'))
		{
			echo '<h3 class="title">';
			echo the_title();
			echo '</h3>';
			echo the_content();
		}
		else { 
// if no other post types are present, 
// displays standard post type
			echo '<h3 class="title"><a href="';
			echo the_permalink();
			echo ' "> ';
			echo the_title();
			echo '</a></h3>';
			echo the_excerpt();
		}

// links from this loop will lead all to single.php template
// us get_template_part('content', get_post_format()); 
// to make custom post format templates. 

	?>
	</div>
	<p class="byline">Posted by: <?php the_author(); ?></p>
	<p class="dated">Posted on: <?php echo get_the_date(); ?>, at <?php echo get_the_time(); ?> in <?php the_category(', '); ?></p>

</article>

<?php endwhile; ?><!-- end loop -->
<?php	
	next_posts_link('&laquo; Previous Entries');
	previous_posts_link('Next Entries &laquo;');
?>
