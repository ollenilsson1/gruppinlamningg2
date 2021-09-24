<?php
get_header();
$data = get_field('slides', 77);  //OLLE 33, ANDRES 48, MALIN 77, CORNELIA 69

?>

<main>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide m-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner shadow p-1 mb-5 bg-body rounded">
                <div class="carousel-item active">
                    <img class="d-block w-100 border border-5 border-dark rounded-3" src="<?php echo $data['image_1']['url']; ?>" alt="First slide">
                </div>
                <div class="carousel-item p-4">
                    <img class="d-block w-100 border border-5 border-dark rounded-3" src="<?php echo $data['image_2']['url']; ?>" alt="Second slide">
                </div>
                <div class="carousel-item p-4">
                    <img class="d-block w-100 border border-5 border-dark rounded-3" src="<?php echo $data['image_3']['url']; ?>" alt="Third slide">
                </div>
    </section>

    <section>


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
                    <div class="d-inline-flex p-4 m-4 bd-highlight justify-content-end border border-4 border-light ">
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

                <?php else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                    </div>
    </section>
</main>


<?php get_footer(); ?>