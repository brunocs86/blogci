<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Alfahelix</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>public/img/alfa.png" rel="icon">
  <link href="<?php echo base_url(); ?>public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
	<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
	<?php
	if( isset($styles) ){
		foreach ($styles as $style_name) {
			$href = base_url()."public/css/".$style_name; ?>
			<link href="<?=$href?>" rel="stylesheet">
	   <?php }
	} ?>

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1>
					<a href="<?php echo base_url(); ?>" class="scrollto">Alfahelix</a>
				</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="menu-has-children"><a href="<?php echo base_url(); ?>">Menu</a>
            <ul>
              <li><a href="<?php echo base_url(); ?>#about">About Us</a></li>
              <li><a href="<?php echo base_url(); ?>#services">Services</a></li>
              <li><a href="<?php echo base_url(); ?>#portfolio">Portfolio</a></li>
              <li><a href="<?php echo base_url(); ?>#team">Team</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url(); ?>#contact">Contact</a></li>
          <li><a href="<?php echo base_url(); ?>restrict">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
