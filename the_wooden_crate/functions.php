<?php

function crate_files() {
    wp_enqueue_style('crate_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'crate_files');
