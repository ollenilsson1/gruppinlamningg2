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
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Om oss</h5>

          <?php wp_nav_menu(

            array(

              'theme_location' => 'main-menu',

              'container' => 'ul',

              'menu_class' => 'menu'
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

              'container' => 'ul',

              'menu_class' => 'menu'
            )
          );

          ?>
        </div>
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <h5 class="text-uppercase">Betalning & leverans </h5>
          <ul class="list-unstyled mb-0">
            <li>
              <i class="fab fa-cc-visa"></i>
            </li>
            <li>
              <i class="fab fa-cc-paypal"></i>
            </li>
            <li>
              <i class="fab fa-cc-mastercard"></i>
            </li>
            <li>
              <i class="fab fa-apple-pay"></i>
            </li>
          </ul>

        </div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <ul class="list-unstyled mb-0">
          <h5 class="text-uppercase">-logo-</h5>


      </div>
      <!--Grid column-->
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