<?php


Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Ajax Options' , 'alcy' )
) );

Kirki::add_field( $dsn_customize , [
    'type'        => 'toggle' ,
    'settings'    => 'ajax_pages' ,
    'label'       => esc_html__( 'Load Pages With Ajax' , 'alcy' ) ,
    'description' => esc_html__( 'When navigate like (menu , link) loads ' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => false ,
] );


Kirki::add_field( $dsn_customize , [
    'type'            => 'toggle' ,
    'settings'        => 'ajax_slider' ,
    'label'           => esc_html__( 'Load Slider With Ajax' , 'alcy' ) ,
    'description'     => esc_html__( 'When navigate from slider loads the target content without reloading the current page.' , 'alcy' ) ,
    'section'         => $dsn_section ,
    'default'         => false ,
    'active_callback' => [
        [
            'setting'  => 'ajax_pages' ,
            'operator' => '==' ,
            'value'    => true ,
        ]
    ] ,
] );


Kirki::add_field( $dsn_customize , [
    'type'            => 'slider' ,
    'settings'        => 'hold_time' ,
    'label'           => esc_html__( 'Holding Time' , 'alcy' ) ,
    'description'     => esc_html__( 'Duration in seconds.' , 'alcy' ) ,
    'section'         => $dsn_section ,
    'default'         => 1.5 ,
    'choices'         => [
        'min'  => .3 ,
        'max'  => 10 ,
        'step' => .1 ,
    ] ,
    'active_callback' => [
        [
            'setting'  => 'ajax_slider' ,
            'operator' => '==' ,
            'value'    => true ,
        ]
    ] ,

] );
