<?php

/*
Plugin Name: Test Plugin
Description: A simple test plugin to demonstrate WordPress plugin development.
Version: 1.0
*/

add_action('wp_footer', function() { 
    echo '<h1>Hello from the test plugin </h1>';
});
