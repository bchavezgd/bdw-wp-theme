<div id="comments">
	<?php 
	// is the post password protected?
	if(post_password_required()): ?>
		<p class="nopassword">
		This post is password protected. <br>
		please enter your password
		</p>
</div><!-- end comments, conditional -->
	<?php 

	// go back
	return;

	// end password check
	endif; 

	// looking for comments
	if(have_comments()): ?>

<h2 class="comment-title">
There are <?php comments_number('no comments', '1 comment', '% comments'); ?>
</h2>
	<?php 
	// comment navigation
	if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
		<nav id="comment-nav-above" class="comment-nav-above">
			<div class="nav-previous">
				<?php previous_comment_link(' &larr; Older comments'); ?>
			</div>
			<div class="nav-next">
				<?php next_comment_link('Newer comments &rarr;'); ?>
			</div>
		</nav>
	<?php 
		// comment nav
		endif; 
	?>

<ol class="commentlist">
	<?php wp_list_comments(); ?>
</ol>
<?php 
// comment navigation
if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
<nav id="comment-nav-below" class="comment-nav-below">
	<div class="nav-previous">
		<?php previous_comment_link(' &larr; Older comments'); ?>
	</div>
	<div class="nav-next">
		<?php next_comment_link('Newer comments &rarr;'); ?>
	</div>
</nav>
<?php 	
		// comment nav
		endif; 

		// if(have_comments()):
		endif; 

	// leave a comment 
	comment_form();
?>
</div><!-- end comments, conditional -->