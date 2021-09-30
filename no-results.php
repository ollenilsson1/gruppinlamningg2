<?php
/**
 * Template för meddelande om inget sökresultat hittats
 *
 */
?>

<article id="post-0" class="post no-results not-found">
    <header class="entry-header">
        <h1 class="entry-title"><?php _e('Inga blogginlägg hittades..', 'shape');?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php if (is_home() && current_user_can('publish_posts')): ?>

            <p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'shape'), admin_url('post-new.php'));?></p>

        <?php elseif (is_search()): ?>

            <p><?php _e('Tyvärr kunde vi inte hitta något, försök gärna igen med andra sökord.', 'shape');?></p>
            <?php get_search_form();?>

        <?php else: ?>

            <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'shape');?></p>
            <?php get_search_form();?>

        <?php endif;?>
    </div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->