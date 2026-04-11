<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?php echo isset($page_title) ? $page_title . " | BravArt" : "BravArt"; ?></title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="512x512" href="images/favicon.png">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <?php if (isset($extra_css)) echo $extra_css; ?>
</head>

<body class="<?php echo isset($body_class) ? $body_class : ''; ?>">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="top_nav">
      <div class="container">
        <div class="contact_link-container">
          <a href="https://www.google.com/maps/search/?api=1&query=Posavska+33,+Brodski+Varoš,+Croatia" target="_blank" class="contact_link1">
            <img src="images/location.png" alt="" />
            <span>
              Posavska 33, Brodski Varoš
            </span>
          </a>
          <a href="tel:+385912345678" class="contact_link2">
            <img src="images/call.png" alt="" />
            <span>
              Kontaktirajte nas
            </span>
          </a>
          <a href="mailto:info@bravart.hr" class="contact_link3">
            <img src="images/mail.png" alt="" />
            <span>
              info@bravart.hr
            </span>
          </a>
        </div>
      </div>
    </div>
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
            <span>
              BravArt
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item <?php echo ($active_page == 'index') ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php">Početna <?php if ($active_page == 'index') echo '<span class="sr-only">(trenutno)</span>'; ?></a>
              </li>
              <li class="nav-item <?php echo ($active_page == 'about') ? 'active' : ''; ?>">
                <a class="nav-link" href="about.php"> O nama</a>
              </li>
              <li class="nav-item <?php echo ($active_page == 'service') ? 'active' : ''; ?>">
                <a class="nav-link" href="service.php"> Usluge </a>
              </li>
              <li class="nav-item <?php echo ($active_page == 'product') ? 'active' : ''; ?>">
                <a class="nav-link" href="product.php"> Proizvodi </a>
              </li>
              <li class="nav-item <?php echo ($active_page == 'contact') ? 'active' : ''; ?>">
                <a class="nav-link" href="contact.php">Kontakt</a>
              </li>
            </ul>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
