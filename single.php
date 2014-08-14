<?php // single.php
get_header(); ?>
<hr>
    <article>
        <h3 class="title"><?php the_title(); ?></h3>
       
        <div>
            <?php
                the_content( 
                    __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bdw' ) 
                );
                wp_link_pages( 
                    array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bdw' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ) );
            ?>
	</div><!-- .entry-content -->

    </article>
<hr>
<?php
    get_sidebar();
    get_footer();
?>