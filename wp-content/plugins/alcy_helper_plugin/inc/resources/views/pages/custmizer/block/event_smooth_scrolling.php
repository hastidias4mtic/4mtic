<?php


Kirki::add_section( $dsn_section , array(
    'panel' => $dsn_panel ,
    'title' => esc_html__( 'Smooth Scrolling Option' , 'alcy' )
) );


Kirki::add_field( $dsn_customize , [
    'type'        => 'toggle' ,
    'settings'    => 'event_smooth_scrolling' ,
    'label'       => esc_html__( 'Event Smooth Scrolling' , 'alcy' ) ,
    'description' => esc_html__( 'Distance. Use smaller value for shorter scroll and greater value for longer scroll' , 'alcy' ) ,
    'section'     => $dsn_section ,
    'default'     => false ,
] );


$options_smoth_scroll = array(
    array(
        'label'               => esc_html__( 'Mouse Scroll Step' , 'alcy' ) ,
        'id'                  => 'mouse_scroll_step' ,
        'description'         => 'scrolling speed with mouse wheel (pixel) Default - 25' ,
        'default_scroll_time' => 25
    ) ,

    array(
        'label'               => esc_html__( 'Scroll Speed' , 'alcy' ) ,
        'id'                  => 'scroll_speed' ,
        'description'         => 'scrolling speed Default - 250' ,
        'default_scroll_time' => 250
    ) ,

    array(
        'label'               => esc_html__( 'Cursor Drag Speed' , 'alcy' ) ,
        'id'                  => 'cursor_drag_speed' ,
        'description'         => 'speed of selection when dragged with cursor , Default - 0.3' ,
        'default_scroll_time' => 0.3
    ) ,
);


foreach ( $options_smoth_scroll as $opss ):
    alcy_custom_Label( $dsn_section , '' , $opss[ 'label' ] , array(
        array(
            [
                [
                    'setting'  => 'event_smooth_scrolling' ,
                    'operator' => '==' ,
                    'value'    => true ,
                ]
            ]
        )
    ) );
    Kirki::add_field( $dsn_customize , [
        'type'            => 'number' ,
        'settings'        => $opss[ 'id' ] ,
        'label'           => $opss[ 'label' ] ,
        'description'     => $opss[ 'description' ] ,
        'section'         => $dsn_section ,
        'default'         => $opss[ 'default_scroll_time' ] ,
        'choices'         => [
            'step' => 1 ,
        ] ,
        'active_callback' => [
            [
                'setting'  => 'event_smooth_scrolling' ,
                'operator' => '==' ,
                'value'    => true ,
            ]
        ] ,

    ] );


endforeach;

