<?php 

function anbieter_type() {
    register_taxonomy(
        'anbieter_type',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'anbieter',           // post type name
        array(
            'hierarchical' => true,
            'label' => 'Type', // display name
            'query_var' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'anbieter-type',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'anbieter_type');



function create_terms() {
    wp_insert_term(
        'Versicherungen', // the term 
        'anbieter_type', // the taxonomy
        array(
            'description'=> '', 
            'slug' => 'versicherungen'
        )
    );

    wp_insert_term(
        'Banken', // the term 
        'anbieter_type', // the taxonomy
        array(
            'description'=> '', 
            'slug' => 'banken'
        )
    );

    wp_insert_term(
        'Fintechs', // the term 
        'anbieter_type', // the taxonomy
        array(
            'description'=> '', 
            'slug' => 'fintechs'
        )
    );

    wp_insert_term(
        'Broker', // the term 
        'anbieter_type', // the taxonomy
        array(
            'description'=> '', 
            'slug' => 'broker'
        )
    );

    wp_insert_term(
        'Sonstige', // the term 
        'anbieter_type', // the taxonomy
        array(
            'description'=> '', 
            'slug' => 'sonstige'
        )
    );
}

add_action( 'init', 'create_terms' );