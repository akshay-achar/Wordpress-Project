<?php

/*
Plugin Name: Test Plugin
Description: A simple test plugin to demonstrate WordPress plugin development.
Version: 1.0
*/

add_action('wp_footer', function() { 
    echo '<h1>Hello from the test plugin </h1>';
});

add_filter('the_content', function($content) {
    return "<p>Start</p>" . $content . "<p>End</p>";
});

add_action('init', function() {
    register_post_type('product', [
        'label' => 'Products',
        'public' => true,
        'has_archive' => true
    ]);
});

add_action('init', function() {
    register_taxonomy('product_category', 'product', [
        'label' => 'Product Categories',
        'hierarchical' => true
    ]);
});