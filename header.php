<!doctype html>
<html lang="en">
  <head>
    <?php wp_head(); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Open+Sans:wght@300;400&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>The Wooden Crate</title>
    </head>
    <body>
      <section id="title">
    <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand">The Wooden Crate</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                  <?php
                    $navitems = array("About", "Pricing", "Download", "Contact");
                    $count = 0;

                    while($count < count($navitems)) {
                      echo "<li class='nav-item'>
                      <a href='#' class='nav-link'>$navitems[$count]</a></li>";
                      $count++;
                    }               
                  ?>
                </ul>
            </div>
        </nav>