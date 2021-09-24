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
        <?php
								// Gets the menu from WP, in the admin panel you can see i used a plugin so i can get the socials ikons in the menu.  
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'socials',
										'container' => 'ul',
										'menu_class' => 'social'
                                    )
                                );
                            ?>
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
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Om oss</h5>
                    <!-- add_a_class kommer från functions.php -->
                    <?php wp_nav_menu(

                        array(

                            'theme_location' => 'main-menu',

                            'container' => false,

                            'menu_class' => 'list-unstyled mb-2',

                            'add_a_class'     => 'text-white text-decoration-none',
                        )
                    );

                    ?>
                
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Support</h5>
                    <?php wp_nav_menu(

                        array(

                            'theme_location' => 'new-menu',

                            'container' => false,

                            'menu_class' => 'list-unstyled mb-2',

                            'add_a_class'     => 'text-white text-decoration-none',
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
                    </ul>

                </div>

                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo" class="img-fluid float-end" />
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>

    </section>
    
    <!-- Section: Social media -->

    
   
      
  </div>
  <!--Grid row-->
  </section>
  <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright Sportstore
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

<?php wp_footer(); ?>
</body>


</html>