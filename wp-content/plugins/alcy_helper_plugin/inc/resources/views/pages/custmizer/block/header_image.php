<?php


Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Header Image' , 'alcy' ) ,
) );


Kirki::add_field( $dsn_customize , [
    'type'     => 'image' ,
    'settings' => 'custom_logo' ,
    'label'    => esc_html__( 'Light Logo' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => '' ,
    'choices'  => [
        'save_as' => 'id' ,
    ] ,
] );


Kirki::add_field( $dsn_customize , [
    'type'     => 'image' ,
    'settings' => 'custom_logo_dark' ,
    'label'    => esc_html__( 'Dark Logo' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => '' ,
    'choices'  => [
        'save_as' => 'id' ,
    ] ,
] );



Kirki::add_field( $dsn_customize , [
    'type'        => 'number' ,
    'settings'    => 'width_number' ,
    'label'       => esc_html__( 'Logo Width' , 'alcy' ) ,
    'description' => esc_html__( '0 for auto width' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => 80 ,
    'choices'     => [
        'min'  => 0 ,
        'step' => 10 ,
    ] ,
] );


Kirki::add_field( $dsn_customize , [
    'type'        => 'number' ,
    'settings'    => 'height_number' ,
    'label'       => esc_html__( 'Logo Height' , 'alcy' ) ,
    'description' => esc_html__( '0 for auto Height' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => 0 ,
    'choices'     => [
        'min'  => 0 ,
        'step' => 10 ,
    ] ,
] );



Kirki::add_field( $dsn_customize , [
    'type'     => 'image' ,
    'settings' => 'admin_custom_logo' ,
    'label'    => esc_html__( 'Admin Login Logo' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => '' ,

] );


Kirki::add_field( $dsn_customize , [
    'type'      => 'code' ,
    'settings'  => 'html_head_code' ,
    'label'     => esc_html__( 'Code HTML Header' , 'alcy' ) ,
    'section'   => $dsn_section ,
    'default'   => '' ,
    'transport' => 'auto' ,
    'choices'   => [
        'language' => 'html' ,
    ] ,
] );


Kirki::add_field( $dsn_customize , [
    'type'      => 'code' ,
    'settings'  => 'css_head_code' ,
    'label'     => esc_html__( 'Code CSS Header' , 'alcy' ) ,
    'section'   => $dsn_section ,
    'default'   => '' ,
    'transport' => 'auto' ,
    'choices'   => [
        'language' => 'css' ,
    ] ,
] );

Kirki::add_field( $dsn_customize , [
    'type'      => 'code' ,
    'settings'  => 'js_head_code' ,
    'label'     => esc_html__( 'Code JS Header' , 'alcy' ) ,
    'section'   => $dsn_section ,
    'transport' => 'auto' ,
    'default'   => '' ,
    'choices'   => [
        'language' => 'js' ,
    ] ,
] );

