<?php
/*
Plugin Name: Shopally
Plugin URI: https://theshopally.com
Description: Shopally helpers to create your post with shopally products
Version: 0.1.0
Author: Shopally
Author URI: https://theshopally.com
License: GPLv2
*/


add_action('init', function () {
    wp_enqueue_style(
        'shopally-blog-style',
        'https://www.theshopally.com/assets/frontend/css/blog.min.css'
    );
    wp_enqueue_script(
        'shopally-blog-script',
        'https://www.theshopally.com/assets/frontend/js/blog.min.js',
        array(),
        false,
        true
    );
});
