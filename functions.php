<?php

function crate_files() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Open+Sans:wght@300;400&display=swap');
    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('crate_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'crate_files');
