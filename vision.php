<?php
/*
    Template Name: Vision
*/
?>
<?php get_header();
?>

<main>
    <section class="bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div id="primary" class="col-xs-12 col-md-9 p-3 m-4 w-75">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
