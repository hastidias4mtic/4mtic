<?php
acf_register_block( array(
    'name' => 'dsnSlider' ,
    'title' => esc_html__( 'Slider' , 'alcy' ) ,
    'icon' => 'archive' ,
    'category' => 'dsn-grid' ,
    'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {

        $ids = alcy_acf_option( 'dsn-image' , array() );
        $img_size = alcy_acf_option( 'size-image' , 'alcy-slider-img' );
        $id_img = '';
        $outRev = '';
        foreach ( $ids as $id ):
            $id_img .= $id[ 'ID' ] . ',';
            $outRev .= wp_get_attachment_image( $id[ 'ID' ] , $size = 'thumbnail' , $icon = false , $attr = array( 'style' => 'margin:5px' ) );
        endforeach;

        if ( $is_preview ) {
            printf( '<h1 class="dsn-title">-- %s</h1>' , $block[ 'title' ] );
            echo $outRev;
        } else {
            echo alcy_view( 'shortcode/dsnSlider' , array( 'attr' => array(
                'ids' => $id_img ,
                'size-image' => $img_size ,
            ) , 'content' => $content ) );

        }


    }

) );

acf_add_local_field_group( array(
    'key' => 'group_5cc1c70b93a85' ,
    'title' => 'Blocks Slider' ,
    'fields' => array(
        alcy_field_size_img( 'field_5d2a54656f2cb' ) ,
        alcy_array_gallery( 'field_5cc1c70bc46cc' )

    ) ,
    'location' => array(
        array(
            array(
                'param' => 'block' ,
                'operator' => '==' ,
                'value' => 'acf/dsnslider' ,
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
