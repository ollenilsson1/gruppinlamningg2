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
        <div class="row d-flex justify-content-center m-4">
            <div class="col-sm-12">
            <article class="card p-5 m-3" >
                <div class="card-body">
                    <h2 class="title">
                        <?php the_title(); ?>
                    </h2>
                    <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </article>
       </div> 
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

<!-- Vad har ni gjort Malin lr Cornelia?????
</section>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main> -->


<?php get_footer(); ?>