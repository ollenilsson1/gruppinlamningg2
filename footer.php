<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Text -->
        <section class="mb-4">
            <p>
                en text typ
            </p>
        </section>
        <!-- Section: Text -->
        <!-- Section: Links -->
        <section class="row">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-2">
                    <h5 class="text-uppercase">Om oss</h5>
                    <ul>
                    <?php wp_nav_menu(

                        array(

                            'theme_location' => 'main-menu',

                            'container' => 'a',

                            'style' => 'link-light',

                            'menu_class' => 'menu'
                        )
                    );

                    ?>
                </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Support</h5>
                    <?php wp_nav_menu(

                        array(

                            'theme_location' => 'new-menu',

                            'container' => 'ul',

                            'style' => "list-unstyled",

                            'menu_class' => 'menu'
                        )
                    );

                    ?>
                </div>
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <h5 class="text-uppercase">Betalning & leverans </h5>
                    <ul class="list-unstyled mb-0 d-flex flex-row justify-content-evenly">
                        <li>
                            <i class="fab fa-cc-visa fa-2x"></i>
                        </li>
                        <li>
                            <i class="fab fa-cc-paypal fa-2x"></i>
                        </li>
                        <li>
                            <i class="fab fa-cc-mastercard fa-2x"></i>
                        </li>
                        <li>
                            <i class="fab fa-apple-pay fa-2x"></i>
                        </li>
                        <li>
                        <i class="fab fa-cc-amex fa-2x"></i>
                        </li>
                    </ul>

                </div>

                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="margin-top: 2vw;">
                <a href= "<?php bloginfo('url')?>" > <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo" class="img-fluid float-end" /></a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>

</footer>

<?php wp_footer(); ?>
</body>


</html>