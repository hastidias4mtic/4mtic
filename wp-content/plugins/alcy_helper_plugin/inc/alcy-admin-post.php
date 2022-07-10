<?php


$dsn_projects = alcy_project_slug();
$custom_slug  = alcy_custom_project_slug();

add_theme_support( 'post-thumbnails' , $dsn_projects );
add_action( 'init' , function () use ( $dsn_projects , $custom_slug ) {


    /**
     * Add Page Projects
     */

    $args = array(
        'menu_icon'       => ALCY__PLUGIN_DIR_URL . '/assets/img/portfolio.png' ,
        'hierarchical'    => true ,
        'capability_type' => 'post' ,
        'supports'        => array( 'title' , 'editor' , 'author' , 'thumbnail' , 'revisions' ) ,
        'labels'          => array(
            'name'         => esc_html__( 'Works' , 'alcy' ) ,
            'new_item'     => esc_html__( 'New Work' , 'alcy' ) ,
            'add_new'      => esc_html__( 'Add Work' , 'alcy' ) ,
            'add_new_item' => esc_html__( 'Add New Work' , 'alcy' ) ,
        ) ,
        'rewrite'         => array( 'slug' => sanitize_title( $custom_slug ) , 'with_front' => false ) ,
        'show_in_rest'    => true ,
        'public'          => true ,

    );


    register_post_type( $dsn_projects , $args );
    flush_rewrite_rules();

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => esc_html__( 'Categories' , 'alcy' ) ,
        'singular_name'              => esc_html__( 'Categories' , 'alcy' ) ,
        'search_items'               => esc_html__( 'Search Categories' , 'alcy' ) ,
        'popular_items'              => esc_html__( 'Popular Categories' , 'alcy' ) ,
        'all_items'                  => esc_html__( 'All Categories' , 'alcy' ) ,
        'parent_item'                => null ,
        'parent_item_colon'          => null ,
        'edit_item'                  => esc_html__( 'Edit Categories' , 'alcy' ) ,
        'update_item'                => esc_html__( 'Update Categories' , 'alcy' ) ,
        'add_new_item'               => esc_html__( 'Add New Categories' , 'alcy' ) ,
        'new_item_name'              => esc_html__( 'New Categories Name' , 'alcy' ) ,
        'separate_items_with_commas' => esc_html__( 'Separate Categories with commas' , 'alcy' ) ,
        'add_or_remove_items'        => esc_html__( 'Add or remove Categories' , 'alcy' ) ,
        'choose_from_most_used'      => esc_html__( 'Choose from the most used Categories' , 'alcy' ) ,
        'not_found'                  => esc_html__( 'No Categories found.' , 'alcy' ) ,
        'menu_name'                  => esc_html__( 'Categories' , 'alcy' ) ,
    );

    $cat_slug = alcy_category_slug();
    $args     = array(
        'hierarchical' => true ,
        'labels'       => $labels ,
        'show_ui'      => true ,
        'query_var'    => true ,
        'rewrite'      => array( 'slug' => $cat_slug ) ,
        'show_in_rest' => true ,

    );


    register_taxonomy( $cat_slug , $dsn_projects , $args );


} );


