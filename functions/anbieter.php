<?php

/* Custom Post Type Start */
function create_posttype() {
    register_post_type( 'anbieter',
        // CPT Options
        array(
            'labels' => array(
            'name' => __( 'Anbieter' ),
            'singular_name' => __( 'Anbieters' )
        ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'anbieter'),
            'menu_icon' => 'dashicons-cart',
            'supports' => array( 'thumbnail', 'excerpt', 'title' )
        )
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );