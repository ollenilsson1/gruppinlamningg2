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

   
    <?php wp_head(); ?>
</head>
<body> 

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sport Store</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo" class="img-fluid float-start" style="width: 15vw; height: 5vw; margin-right: 3vw;"/> 
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        
        <li><a href="" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

