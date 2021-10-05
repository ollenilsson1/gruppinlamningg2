<?php get_header(); ?>

<!-- the query -->
<div class="container">
    <?php
    $paged = get_query_var('paged');
    $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 2, 'paged' => $paged));
    if ($wpb_all_query->have_posts()) :
    ?>
        <!-- loop to get posts -->
        <?php
        while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();
        ?>
<div class="row d-flex justify-content-center">
            <article class="card p-3 m-4 w-75">
                <div class="card-body">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="title">
                    <?php the_title(); ?>
                    
                        
                    </h2>
                    </a>
                    <?php if(has_post_thumbnail()) : ?>
                                <!-- If you click on the image then you will go to its post  -->
                                <a href="<?php the_permalink();?>">   
                                    <!-- Gets the Image  -->
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
                                </a>
                            <?php endif; ?>
                    <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </article>

        </div>
        <?php endwhile; ?>
        <!-- end of loop -->

        <?php wp_reset_postdata(); ?>
        <!--  restores the $post global to the current post in the main query -->

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center my-4">
            <li class="page-item">
                <button class="btn btn-outline-dark" style="text-decoration:none; cursor: pointer;">

                <?php

                global $wp_query;

                $big = 999999999; // need an unlikely integer

                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages,
                ));

                ?>
</button>
            </li>
        </ul>
    </nav>
</div>

<?php get_footer(); ?>