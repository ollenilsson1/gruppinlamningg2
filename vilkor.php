<?php
/*
Template name: Vilkor 
*/
?>

<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center m-2 p-4">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>