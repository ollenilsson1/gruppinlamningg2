<?php get_header(); ?>

<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-xs-12 col-md-9 p-3 m-4 w-75">
<?php while (have_posts()) : the_post(); ?>
    <article class="<?php post_class(); ?>">
        <h1><?php the_title(); ?></h1>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile;
?>
</div>
</div>
</div>
<?php get_footer(); ?>