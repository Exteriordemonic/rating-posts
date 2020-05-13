<?php


wp_enqueue_style( 'anbieter-style', '/wp-content/plugins/rating-posts/dist/style.css');

function anbieter_includes() {
    wp_enqueue_script( 'anbieter-scripts-jq-124', 'https://code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script( 'anbieter-scripts-124', '/wp-content/plugins/rating-posts/dist/scripts.js');
} 

if(!is_admin()){
    add_action('init', 'anbieter_includes');
}