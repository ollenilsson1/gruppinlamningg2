<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title></title>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-speciallettersandnumbers" crossorigin="anonymous">
    <script src="js/jquery.js"></script>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SportStore</title>
  <?php wp_head(); ?>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
    <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="<?php bloginfo('url')?>"> <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo" class="img-fluid float-start" style="width: 15vw; height: 5vw; margin-right: 3vw;"/></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

<?php get_search_form(); ?>  
    </div>
</nav>


