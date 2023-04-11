<?php

function my_theme_styles() {
    wp_enqueue_style('my-theme-css', get_template_directory_uri() . "/style.css", [], '1.0', 'all');
    wp_enqueue_style('my-theme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css", [], '5.3.0', 'all');
}

add_action('wp_enqueue_scripts', 'my_theme_styles');