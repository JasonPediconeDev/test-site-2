<?php

function u_enqueue() {
    wp_register_style(
        'u-font-rubik-and-pacifico', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
            [],
            null
    );
    wp_register_style(
        'u-bootstrap-icons', get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );
    wp_register_style(
        'u-theme', get_theme_file_uri('assets/public/index.css')
    );
    wp_enqueue_style('u-font-rubik-and-pacifico');
    wp_enqueue_style('u-bootstrap-icons');
    wp_enqueue_style('u-theme');
}