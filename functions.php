<?php

function zenblog_register_styles_and_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-icon', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), null, 'all');
    wp_enqueue_style('swipper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), null, 'all');
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), null, 'all');
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), null, 'all');
    wp_enqueue_style('variable', get_template_directory_uri() . '/assets/css/variables.css', array(), null, 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all');
    wp_enqueue_style('custom', get_stylesheet_uri() );

    wp_enqueue_script( 'bootstrap_js', get_theme_file_uri( 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ), array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'swipper_js', get_theme_file_uri( 'assets/vendor/swiper/swiper-bundle.min.js' ), array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'glighbox_js', get_theme_file_uri( 'assets/vendor/glightbox/js/glightbox.min.js' ), array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'aos_js', get_theme_file_uri( 'assets/vendor/aos/aos.js' ), array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'validate_js', get_theme_file_uri( 'assets/vendor/php-email-form/validate.js' ), array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'main_js', get_theme_file_uri( 'assets/js/main.js' ), array(), wp_get_theme()->get( 'Version' ), true );
}
add_action('wp_enqueue_scripts', 'zenblog_register_styles_and_scripts');