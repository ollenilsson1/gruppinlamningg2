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
    <?php the_content(); ?>

</main>
<?php
get_footer();
?>