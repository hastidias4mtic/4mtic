<?php

acf_register_block( array(
    'name' => 'parallaxImage' ,
    'title' => esc_html__( 'Parallax Image' , 'alcy' ) ,
    'icon' => 'format-image' ,
    'category' => 'dsn-grid' ,
    'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {


        $ids = alcy_acf_option( 'dsn-image' );
        $img_size = alcy_acf_option( 'size-image' , 'full' );

        if ( $is_preview ) {
            printf( '<h1 class="dsn-title">-- %s</h1>' , $block[ 'title' ] );
            echo wp_get_attachment_image( $ids , 'full' );
        } else {
            echo alcy_view( 'shortcode/parallaxImage' , array( 'attr' => array(
                'ids' => $ids ,
                'size-image' => $img_size
            ) , 'content' => $content ) );

        }

    }
) );


acf_add_local_field_group( array(
    'key' => 'group_5cc1ae3017e22' ,
    'title' => esc_html__( 'Blocks Parallax Image' , 'alcy' ) ,
    'fields' => array(
        alcy_field_size_img( 'field_7c3b54656f2cb' , 'full' ) ,
        alcy_array_image( 'field_5cc1b2db63156' )
    ) ,
    'location' => array(
        array(
            array(
                'param' => 'block' ,
                'operator' => '==' ,
                'value' => 'acf/parallaximage' ,
            ) ,
        ) ,
    ) ,
    'menu_order' => 0 ,
    'position' => 'normal' ,
    'style' => 'default' ,
    'label_placement' => 'top' ,
    'instruction_placement' => 'label' ,
    'hide_on_screen' => '' ,
    'active' => true ,
    'description' => '' ,
) );