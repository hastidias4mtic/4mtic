<?php

acf_register_block( array(
    'name' => 'embeddedVideo' ,
    'title' => esc_html__( 'Parallax Embedded Video' , 'alcy' ) ,
    'icon' => 'format-video' ,
    'category' => 'dsn-grid' ,
    'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {


        $url = alcy_acf_option( 'dsn-url' , '' );
        $ids = alcy_acf_option( 'dsn-image' );
        $img_size = alcy_acf_option( 'size-image' , 'large' );

        if ( $is_preview ) {
            printf( '<h1 class="dsn-title">-- %s</h1>' , $block[ 'title' ] );

            echo wp_get_attachment_image( $ids , 'full' );
            echo '<div class="dsn-block-video" >' . esc_html__( 'Play' , 'alcy' ) . '</div>';

        } else {
            echo alcy_view( 'shortcode/embedded' , array( 'attr' => array(
                'id-img' => $ids ,
                'size-image' => $img_size
            ) , 'content' => $url ) );
        }


    }

) );


acf_add_local_field_group( array(
    'key' => 'group_5cc1b6274038d' ,
    'title' => 'Blocks Embedded Video' ,
    'fields' => array(
        alcy_field_size_img( 'field_5d2a54656f3cb' , 'large' ) ,
        alcy_array_image( 'field_5cc1b627752c2' ) ,
        alcy_array_url( 'field_5cc1b640bd254' )

    ) ,
    'location' => array(
        array(
            array(
                'param' => 'block' ,
                'operator' => '==' ,
                'value' => 'acf/embeddedvideo' ,
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
