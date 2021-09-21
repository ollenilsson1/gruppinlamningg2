<?php 
get_header();
?>

<main>
<section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/gymbild1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/gymbild2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/gymbild3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<!-- the query -->
<div class="container">
<?php 
$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1));
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
<?php 
get_footer(); 
?>


</main>

