<?php
Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Social Settings' , 'alcy' ) ,
) );


Kirki::add_field( $dsn_customize , [
    'type'     => 'radio' ,
    'settings' => 'display_social_footer' ,
    'label'    => esc_html__( 'Display Social ( Footer )' , 'alcy' ) ,
    'section'  => $dsn_section ,
    'default'  => 'name' ,
    'choices'  => [
        'name'      => esc_html__( 'Social Name' , 'alcy' ) ,
        'init_name' => esc_html__( 'initial Social Name' , 'alcy' )
    ] ,
] );


Kirki::add_field( $dsn_customize , [
    'type'         => 'repeater' ,
    'label'        => esc_html__( 'All Social' , 'alcy' ) ,
    'section'      => $dsn_section ,
    'transport'    => 'postMessage' ,
    'row_label'    => [
        'type'      => 'field' ,
        'value'     => esc_html__( 'Social Settings' , 'alcy' ) ,
        'field'     => 'name' ,
        'transport' => 'postMessage' ,

    ] ,
    'button_label' => esc_html__( '"Add new" (Social) ' , 'alcy' ) ,
    'settings'     => 'alcy_social' ,
    'fields'       => [
        'name'           => [
            'type'      => 'text' ,
            'label'     => esc_html__( 'Social Name' , 'alcy' ) ,
            'default'   => '' ,
            'required'  => true ,
            'transport' => 'postMessage' ,

        ] ,
        'init_name'      => [
            'type'      => 'text' ,
            'label'     => esc_html__( 'initial Social Name' , 'alcy' ) ,
            'default'   => '' ,
            'transport' => 'postMessage' ,

        ]  ,
        'link'           => [
            'type'    => 'text' ,
            'label'   => esc_html__( 'URL' , 'alcy' ) ,
            'default' => '' ,

        ] ,

    ]
] );

