<?php get_header(); ?>

<<<<<<< HEAD


<!-- the query -->

<div class="container">

<?php

$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));

if ($wpb_all_query->have_posts()) :

?>

<!-- loop to get posts -->

<?php

while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();

?>



<article>

<h2 class="title">

<?php the_title(); ?>

</h2>

<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>

<p>

<?php the_excerpt(); ?>

</p>

</article>

<?php endwhile; ?>

<!-- end of loop -->



<?php wp_reset_postdata(); ?>

<!-- restores the $post global to the current post in the main query -->



<?php else : ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div></div></div></div></div></div></div></div></div>

</section>

</main>




=======
<!-- the query -->
<div class="container">
<?php 
$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));
if ($wpb_all_query->have_posts()) :
?>
<!-- loop to get posts -->
<?php 
while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); 
?>

<article>
<h2 class="title">
<?php the_title(); ?>
</h2>
<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
<p>
<?php the_excerpt(); ?>
</p>
</article>
<?php endwhile; ?>
<!-- end of loop -->

<?php wp_reset_postdata(); ?>
<!--  restores the $post global to the current post in the main query -->

					<?php else : ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>

</section>
</main>


>>>>>>> 4dc2d672d047de74429b07c3b0f12cd6bde7a3a5
<?php get_footer(); ?>