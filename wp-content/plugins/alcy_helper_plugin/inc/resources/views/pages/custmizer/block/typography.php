<?php


Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Typography' , 'alcy' )
) );

Kirki::add_field( $dsn_customize , [
    'type'        => 'toggle' ,
    'settings'    => 'event_typography' ,
    'label'       => esc_html__( 'Event Smooth Scrolling' , 'alcy' ) ,
    'description' => esc_html__( 'Distance. Use smaller value for shorter scroll and greater value for longer scroll' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => false ,
] );

Kirki::add_field( $dsn_customize , array(
    'type'     => 'typography' ,
    'settings' => 'logo_font' ,
    'section'  => $dsn_section ,
    'label'    => esc_html__( 'Logo Font' , 'alcy' ) ,

    'choices' => [
        'fonts' => [
            'standard' => [ 'sans-serif' ] ,
        ] ,
    ] ,

    'default'         => array(
        'font-family' => 'Roboto' ,
        'font-size'   => '55px' ,
    ) ,
    'output'          => array(
        array(
            'element' => '.sidebar .box-logo h4' ,
        ) ,
    ) ,
    'active_callback' => [
        [
            'setting'  => 'event_typography' ,
            'operator' => '==' ,
            'value'    => true ,
        ]
    ] ,

) );


Kirki::add_field( $dsn_customize , array(
    'type'     => 'typography' ,
    'settings' => 'body_font' ,
    'section'  => $dsn_section ,
    'label'    => esc_html__( 'Primary Font' , 'alcy' ) ,

    'choices' => [
        'fonts' => [
            'standard' => [ 'sans-serif' ] ,

        ] ,
    ] ,

    'default'         => array(
        'font-family' => 'Roboto' ,
        'font-size'   => '15px' ,
        'line-height' => '1.2' ,
        'font-weight' => '400' ,
    ) ,
    'output'          => array(
        array(
            'element' => 'body' ,
        ) ,
    ) ,
    'active_callback' => [
        [
            'setting'  => 'event_typography' ,
            'operator' => '==' ,
            'value'    => true ,
        ]
    ] ,

) );


Kirki::add_field( $dsn_customize , array(
    'type'     => 'typography' ,
    'settings' => 'heading_font' ,
    'section'  => $dsn_section ,
    'label'    => esc_html__( 'Heading Font' , 'alcy' ) ,

    'choices' => [
        'fonts' => [
            'standard' => [ 'sans-serif' ] ,
        ] ,
    ] ,

    'default'         => array(
        'font-family' => 'Open Sans' ,
        'font-weight' => '600' ,

    ) ,
    'output'          => array(
        array(
            'element' => 'h1 , h2 , h3 , h4 , h5' ,
        ) ,
    ) ,
    'active_callback' => [
        [
            'setting'  => 'event_typography' ,
            'operator' => '==' ,
            'value'    => true ,
        ]
    ] ,

) );


Kirki::add_field( $dsn_customize , array(
    'type'     => 'typography' ,
    'settings' => 'Lloading_text' ,
    'section'  => $dsn_section ,
    'label'    => esc_html__( 'Loading Tite' , 'alcy' ) ,

    'choices' => [
        'fonts' => [
            'standard' => [ 'sans-serif' ] ,
        ] ,
    ] ,

    'default'         => array(
        'font-family'    => 'Open Sans' ,
        'font-weight'    => '400' ,
        'font-size'      => '25px' ,
        'letter-spacing' => '5px' ,

    ) ,
    'output'          => array(
        array(
            'element' => '.preloader .preloader-block .title' ,
        ) ,
    ) ,
    'active_callback' => [
        [
            'setting'  => 'event_typography' ,
            'operator' => '==' ,
            'value'    => true ,
        ]
    ] ,

) );


