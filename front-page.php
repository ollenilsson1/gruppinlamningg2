<?php
get_header();
$data = get_field('slides', 77);  //OLLE 33, ANDRES 48, MALIN 77, CORNELIA 69

?>

<main>
<div class="p-5">
    <?php the_content(); ?>
</div>
</main>
<?php
get_footer();
?>