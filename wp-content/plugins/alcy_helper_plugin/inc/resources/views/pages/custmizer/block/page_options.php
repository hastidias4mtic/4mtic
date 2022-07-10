<?php

/**
 *  Home Page
 */

Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Option Pages' , 'alcy' )
) );


alcy_custom_Label( $dsn_section , 'Home' );


Kirki::add_field( $dsn_customize , [
    'type'     => 'select' ,
    'settings' => 'home_header_type' ,
    'label'    => esc_html__( 'Header Type' , 'lida' ) ,
    'section'  => $dsn_section ,
    'default'  => 'normal' ,
    'multiple' => 1 ,
    'choices'  => [
        'normal' => esc_html__( 'Normal Header' , 'alcy' ) ,
        'none'   => esc_html__( 'None' , 'alcy' ) ,
    ] ,
] );

Kirki::add_field( $dsn_customize , [
    'type'              => 'text' ,
    'settings'          => 'home_custom_title' ,
    'label'             => esc_html__( 'Title' , 'alcy' ) ,
    'section'           => $dsn_section ,
    'default'           => 'Our <br/> Stories' ,
    'sanitize_callback' => 'alcy_sanitize_minimal_decoration' ,

    'active_callback' => [
        [
            'setting'  => 'home_header_type' ,
            'operator' => '==' ,
            'value'    => 'normal' ,
        ]
    ] ,
] );


Kirki::add_field( $dsn_customize , [
    'type'            => 'text' ,
    'settings'        => 'home_custom_desc' ,
    'label'           => esc_html__( 'Description' , 'alcy' ) ,
    'section'         => $dsn_section ,
    'default'         => '' ,
    'active_callback' => [
        [
            'setting'  => 'home_header_type' ,
            'operator' => '==' ,
            'value'    => 'normal' ,
        ]
    ] ,
] );


Kirki::add_field( $dsn_customize , [
    'type'     => 'select' ,
    'settings' => 'home_show_sidebar' ,
    'label'    => esc_html__( 'Sidebar' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => 'Show' ,
    'multiple' => 1 ,
    'choices'  => [
        'show' => esc_html__( 'Show' , 'alcy' ) ,
        'hide' => esc_html__( 'Hide' , 'alcy' )
    ]
] );

alcy_custom_Label( $dsn_section , 'Blog' );

Kirki::add_field( $dsn_customize , [
    'type'     => 'number' ,
    'settings' => 'dsn_except_length' ,
    'label'    => esc_html__( 'Except Length' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => 50 ,
    'choices'  => [
        'min'  => 0 ,
        'max'  => 150 ,
        'step' => 1 ,
    ] ,
] );

Kirki::add_field( $dsn_customize , [
    'type'     => 'text' ,
    'settings' => 'dsn_end_of_excerpt_text' ,
    'label'    => esc_html__( 'End Of Excerpt Text' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => '...'
] );

alcy_custom_Label( $dsn_section , 'Share Links' );

Kirki::add_field( $dsn_customize , [
    'type'        => 'toggle' ,
    'settings'    => 'share_link' ,
    'label'       => esc_html__( 'Sharing Buttons' , 'alcy' ) ,
    'description' => esc_html__( 'enable you to add social share buttons to WordPress' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => false ,
] );


Kirki::add_field( $dsn_customize , [
    'type'            => 'sortable' ,
    'settings'        => 'show_hide_share_link' ,
    'label'           => esc_html__( 'This is Share Buttons' , 'alcy' ) ,
    'section'         => $dsn_section ,
    'default'         => [
        'facebook' ,
        'twitter' ,
        'google-plus' ,
        'pinterest' ,
    ] ,
    'choices'         => [
        'facebook'    => esc_html__( 'Facebook' , 'alcy' ) ,
        'twitter'     => esc_html__( 'Twitter' , 'alcy' ) ,
        'google-plus' => esc_html__( 'Google+' , 'alcy' ) ,
        'pinterest'   => esc_html__( 'Pinterest' , 'alcy' ) ,
        'get-pocket'  => esc_html__( 'Get Pocket' , 'alcy' ) ,
        'telegram'    => esc_html__( 'Telegram' , 'alcy' ) ,
    ] ,
    'active_callback' => [
        [
            'setting'  => 'share_link' ,
            'operator' => '==' ,
            'value'    => true ,
        ]
    ] ,
] );


alcy_custom_Label( $dsn_section , 'Archive' );


Kirki::add_field( $dsn_customize , [
    'type'     => 'select' ,
    'settings' => 'archive_header_type' ,
    'label'    => esc_html__( 'Header Type' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => 'normal' ,
    'multiple' => 1 ,
    'choices'  => [
        'normal' => esc_html__( 'Normal Header' , 'alcy' ) ,
        'none'   => esc_html__( 'None' , 'alcy' ) ,
    ] ,
] );

Kirki::add_field( $dsn_customize , [
    'type'     => 'select' ,
    'settings' => 'archive_show_sidebar' ,
    'label'    => esc_html__( 'Sidebar' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => 'Show' ,
    'multiple' => 1 ,
    'choices'  => [
        'show' => esc_html__( 'Show' , 'alcy' ) ,
        'hide' => esc_html__( 'Hide' , 'alcy' )
    ]
] );

alcy_custom_Label( $dsn_section , '404' );


Kirki::add_field( $dsn_customize , [
    'type'     => 'image' ,
    'settings' => '404_bg_image' ,
    'label'    => esc_html__( 'Background Image' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => ALCY__PLUGIN_DIR_URL . 'assets/img/404.jpg' ,

] );




