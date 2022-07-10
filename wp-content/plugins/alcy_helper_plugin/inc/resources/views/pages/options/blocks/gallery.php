<?php
acf_register_block( array(
    'name' => 'dsnGallery' ,
    'title' => esc_html__( 'Gallery' , 'alcy' ) ,
    'icon' => 'images-alt2' ,
    'category' => 'dsn-grid' ,
    'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {

        $ids = alcy_acf_option( 'dsn-image' , array() );
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
            echo alcy_view( 'shortcode/dsnGallery' , array( 'attr' => array('ids' => $id_img) , 'content' => $content ) );
        }


    }

) );


acf_add_local_field_group( array(
    'key' => 'group_5cc2240c5ff86' ,
    'title' => esc_html__( 'Blocks Gallery' , 'alcy' ) ,
    'fields' => array(
        alcy_array_gallery( 'field_5cc2240c75cb0' )
    ) ,
    'location' => array(
        array(
            array(
                'param' => 'block' ,
                'operator' => '==' ,
                'value' => 'acf/dsngallery' ,
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
