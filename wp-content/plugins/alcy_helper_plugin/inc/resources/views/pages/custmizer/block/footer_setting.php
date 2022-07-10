<?php
Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Footer Settings' , 'alcy' ) ,

) );

Kirki::add_field( $dsn_customize , [
    'type'              => 'textarea' ,
    'settings'          => 'footer_cr' ,
    'label'             => esc_attr__( 'Footer Credits Text' , 'alcy' ) ,
    'description'       => esc_attr__( 'Allowed HTML Tags: a, em, br, strong, img, i.' , 'lida' ) ,
    'section'           => $dsn_section ,
    'sanitize_callback' => 'alcy_sanitize_minimal_decoration' ,
    'default'           => '&copy; ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) ,
] );


Kirki::add_field( $dsn_customize , [
    'type'      => 'code' ,
    'settings'  => 'html_footer_code' ,
    'label'     => esc_html__( 'Code HTML Footer' , 'alcy' ) ,
    'section'   => $dsn_section ,
    'default'   => '' ,
    'transport' => 'auto' ,
    'choices'   => [
        'language' => 'html' ,
    ] ,
] );


Kirki::add_field( $dsn_customize , [
    'type'      => 'code' ,
    'settings'  => 'js_footer_code' ,
    'label'     => esc_html__( 'Code JS Footer' , 'alcy' ) ,
    'section'   => $dsn_section ,
    'transport' => 'auto' ,
    'default'   => '' ,
    'choices'   => [
        'language' => 'js' ,
    ] ,

] );


