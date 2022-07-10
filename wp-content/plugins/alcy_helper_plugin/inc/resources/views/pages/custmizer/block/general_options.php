<?php

Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'General Options' , 'alcy' )
) );

Kirki::add_field( $dsn_customize , [
    'type'        => 'text' ,
    'settings'    => 'alcy-custom-project-slug' ,
    'label'       => esc_html__( 'Portfolio custom slug' , 'alcy' ) ,
    'description' => esc_html__( 'if you want your portfolio post type to have a custom slug in the url.' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => alcy_project_slug()
] );

//Kirki::add_field( $dsn_customize , [
//    'type'        => 'text' ,
//    'settings'    => 'alcy-project-slug' ,
//    'label'       => esc_html__( 'Portfolio custom slug' , 'alcy' ) ,
//    'description' => esc_html__( 'if you want your portfolio post type to have a custom slug in the url.' , 'alcy' ) ,
//    'section'     => $dsn_section ,
//    'default'     => 'alcy-projects'
//] );


Kirki::add_field( $dsn_customize , [
    'type'        => 'toggle' ,
    'settings'    => 'page_preloader' ,
    'label'       => esc_html__( 'Page Preloader' , 'alcy' ) ,
    'description' => esc_html__( 'Enable preloader mask while the page is loading.' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => '1' ,
] );

Kirki::add_field( $dsn_customize , [
    'type'     => 'toggle' ,
    'settings' => 'stye_theme_alcy' ,
    'label'    => esc_html__( 'Show Button Style Theme' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => 0 ,
] );


Kirki::add_field( $dsn_customize , [
    'type'     => 'toggle' ,
    'settings' => 'effect_aos' ,
    'label'    => esc_html__( 'Effect AOS' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => 0
    ,
] );


Kirki::add_field( $dsn_customize , [
    'type'     => 'toggle' ,
    'settings' => 'effect_cursor' ,
    'label'    => esc_html__( 'Effect Cursor' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => 0
    ,
] );



