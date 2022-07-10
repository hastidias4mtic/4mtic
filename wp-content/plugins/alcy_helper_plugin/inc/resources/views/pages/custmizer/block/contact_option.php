<?php


Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Contact Options' , 'alcy' )
) );

Kirki::add_field( $dsn_customize , [
    'type'        => 'toggle' ,
    'settings'    => 'show_contact' ,
    'label'       => esc_html__( 'show Contact Popup' , 'alcy' ) ,
    'description' => esc_html__( ' can be integrated with Popup in several clicks, but in mix it will give you a great result. will be caught by the eye and attract the attention of your users.' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => false ,
] );


Kirki::add_field( $dsn_customize , [
    'type'              => 'select' ,
    'settings'          => 'contact_id' ,
    'label'             => esc_html__( 'Sidebar' , 'alcy' ) ,
    'section'           => $dsn_section ,
    'default'           => 0 ,
    'multiple'          => 1 ,
    'choices'           => alcy_search_templete( 'page-alcy-contact.php' )
    , 'active_callback' => [
        [
            'setting'  => 'show_contact' ,
            'operator' => '==' ,
            'value'    => true ,
        ]
    ] ,
] );