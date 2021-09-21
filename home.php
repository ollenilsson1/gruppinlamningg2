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

            <article class="card" style="padding: 4vw; margin: 2vw; justify-content: center;">
                <div class="card-body" >
                <h2 class="title">
                    <?php the_title(); ?>
                </h2>
                <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                <p>
                    <?php the_content(); ?>
                </p>
                </div>
            </article>
        <?php endwhile; ?>
        <!-- end of loop -->

        <?php wp_reset_postdata(); ?>
        <!--  restores the $post global to the current post in the main query -->

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center" >
  <li class="page-item">
 
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
    
  </li></ul></nav>
					</div>

    </section>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>


<?php get_footer(); ?>
