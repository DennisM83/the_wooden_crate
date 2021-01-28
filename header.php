<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>The Wooden Crate</title>
    </head>
    <body>
      <section id="title">
    <nav class="navbar navbar-expand-lg navbar-light">
            <a href="<?php echo site_url() ?>" class="navbar-brand">The Wooden Crate</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                <!--<?php
                    $navitems = array("About", "Pricing", "Download");
                    $count = 0;

                    while($count < count($navitems)) {
                      echo "<li class='nav-item'>
                      <a href='#' class='nav-link'>$navitems[$count]</a></li>";
                      $count++;
                    }               
                  ?>-->
                  <li class='nav-item'>
                    <a href='<?php echo site_url('/about-us')?>' class='nav-link'>About</a>
                  </li>
                  <li class='nav-item'>
                    <a href='#' class='nav-link'>Pricing</a>
                  </li>
                </ul>
            </div>
        </nav>