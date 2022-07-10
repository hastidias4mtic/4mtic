<?php
Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Information Menu' , 'alcy' ) ,
) );


Kirki::add_field( $dsn_customize , [
    'type'        => 'number' ,
    'settings'    => 'num_menu_contact' ,
    'label'       => esc_html__( 'The total number of each' ) ,
    'description' => '' ,
    'section'     => $dsn_section ,
    'default'     => 3 ,
    'choices'     => [
        'min'  => 1 ,
        'max'  => 10 ,
        'step' => 1 ,
    ]
] );


Kirki::add_field( $dsn_customize , [
    'type'         => 'repeater' ,
    'label'        => esc_html__( 'All Information' , 'alcy' ) ,
    'section'      => $dsn_section ,
    'transport'    => 'postMessage' ,
    'row_label'    => [
        'type'      => 'field' ,
        'value'     => esc_html__( 'Settings' , 'alcy' ) ,
        'field'     => 'name' ,
        'transport' => 'postMessage' ,

    ] ,
    'button_label' => esc_html__( '"Add new" (Info) ' , 'alcy' ) ,
    'settings'     => 'alcy_info_contact' ,
    'fields'       => [
        'name' => [
            'type'      => 'text' ,
            'label'     => esc_html__( 'Value' , 'alcy' ) ,
            'default'   => '' ,
            'required'  => true ,
            'transport' => 'postMessage' ,

        ] ,
    ]
] );

