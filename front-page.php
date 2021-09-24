<?php
get_header();
$data = get_field('slides', 69);


?>

<main>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $data['image_1']['url']; ?>" alt="First slide">
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $data['image_2']['url']; ?>" alt="Second slide">
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $data['image_3']['url']; ?>" alt="Third slide">
                </div>
    </section>

    <!--popular products section-->
    <div style="background-color: lightgray;">
        <h1 style="text-align: center;">Our best selling products:</h1>
    </div>
    <section class="container-fluid" style="margin-top: 2vw; margin-bottom: 2vw; justify-content: center;">
        <div class="row">
            <div class="col-sm" style="width: 13rem;">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary">Go to product</a>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="width: 13rem;">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary">Go to product</a>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="width: 13rem;">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary">Go to product</a>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="width: 13rem;">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary">Go to product</a>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="width: 13rem;">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary">Go to product</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Feautered products -->
        <section>
        <div style="background-color: lightgray; width: 100%;">
            <h1 style="text-align: center;">Feautered products:</h1>
        </div>
        <div class="container" style="margin-top: 2vw; margin-bottom: 2vw;">
            <div class="row">
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-secondary">Go to product</a>  
</div>
</div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-secondary">Go to product</a>  
</div>
</div>
                </div>
                <div class="col-sm">
                <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-secondary">Go to product</a> 
</div>
</div>
                </div>
            </div>
        </div>
        <!-- blogpost and sale section-->
    </section>

    <section>
    <div class="container" style="margin-top: 2vw; margin-bottom: 2vw;">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
                        <h5 class="card-title"> <?php the_title(); ?></h5>
                        <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                        <p class="card-text"> <?php the_excerpt(); ?></p>
                        <a href="<?php bloginfo('') ?>" class="badge-secondary">Go to blogg</a>
                    </div>
                    </div>
    </div>
    <div class="col">
   
   
        <div class="card" style="width: 18rem;">
            <?php
            $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1));
            if ($wpb_all_query->have_posts()) :
            ?>
                <!-- loop to get posts -->
                <?php
                while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();
                ?>
                    <div class="card-body">
                        <h5 class="card-title"> <?php the_title(); ?></h5>
                        <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                        <p class="card-text"> <?php the_excerpt(); ?></p>
                        <a href="" class="badge-secondary">Go to blogg</a>
                    </div>
                    </div>
        </div>
    <?php endwhile; ?>
    <!-- end of loop -->

<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
    </section>

</main>


<?php get_footer(); ?>