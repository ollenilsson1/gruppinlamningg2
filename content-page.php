<?php
/**
 * Template som används för att visa data i search.php
 *
 */
?>


<div id="primary" class="">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<img src="<?php echo get_the_post_thumbnail_url() ?>" />
<a href="<?php the_permalink();?>">
<h1 class="title"><?php the_title();?></h1>
</a>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'shape' ), 'after' => '</div>' ) ); ?>
    </div>
</article>
</div>