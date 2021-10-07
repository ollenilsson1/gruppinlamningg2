<?php
/**
 * Template för sökrutan
 
 */
?>
<form method="get" id="searchform" class="d-flex" action="<?php echo esc_url(home_url('/')); ?>" role="search">

    <label for="s" class="screen-reader-text"><?php _e('Sök efter:', 'shape'); ?></label>
    <input type="text" class="form-control me-2" name="s" value="<?php echo esc_attr(get_search_query()); ?>" id="s" placeholder="<?php esc_attr_e(''); ?>" />
    <button type="submit" class="btn btn-secondary" name="submit" id="searchsubmit">Sök</button>

</form>