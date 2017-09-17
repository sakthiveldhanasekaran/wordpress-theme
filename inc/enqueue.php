<?php
    function load_css_files() {
        wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto', false, false, 'all' );
        wp_enqueue_style( 'Inconsolata', 'https://fonts.googleapis.com/css?family=Inconsolata', false, false, 'all' );
        wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all' );
        wp_enqueue_style( 'code', get_template_directory_uri().'/css/code.css', array(), '1.0.0', 'all' );
    }

    add_action( 'wp_enqueue_scripts', 'load_css_files' );


    function load_js_files() {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', false, '3.2.1', true );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'handle', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
    }

    add_action( 'wp_enqueue_scripts', 'load_js_files' );