<?php
add_action('wp_enqueue_scripts',
'enqueue_parent_styles');

    function enqueue_parent_styles(){
        wp_enqueue_style('parent-style',
        get_template_directory_uri().'/style.css');
    }

    /*STYLESHEET ORDER*/  
    add_action( 'elementor/frontend/after_enqueue_styles', function() {
        wp_enqueue_style( 'elementor-post-1025-css', get_stylesheet_uri(), NULL, filemtime( get_stylesheet_directory() . '/style.css' ) );
    ;
    } );