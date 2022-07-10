<?php
acf_register_block( array(
    'name' => 'dsnBrand' ,
    'title' => esc_html__( 'Brand' , 'alcy' ) ,
    'icon' => 'info' ,
    'category' => 'dsn-grid' ,

    'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {


        $title = alcy_acf_option( 'dsn-title' );
        $content = alcy_acf_option( 'dsn-item' , array() );
        $outRev = '';

        foreach ( $content as $con ):
            $co_title = alcy_acf_option_array( $con , 'name' );
            $co_content = alcy_acf_option_array( $con , 'link' );
            $brand_icon = alcy_acf_option_array( $con , 'brand_icon' );
            $outRev .= alcy_view( 'shortcode/brandItem' , array( 'attr' => array(
                'name' => $co_title ,
                'id_img' => $brand_icon
            ) , 'content' => $co_content ) );


        endforeach;

        if ( $is_preview ) {
            printf( '<h1 class="dsn-title">-- %s</h1>' , $block[ 'title' ] );
        }

        echo alcy_view( 'shortcode/dsnBrand' , array( 'attr' => array(
            'title' => $title ,
        ) , 'content' => $outRev ) );


    }
) );


acf_add_local_field_group( array(
    'key' => 'group_5cc23da7b5fd6' ,
    'title' => esc_html__( 'Blocks Brand' , 'alcy' ) ,
    'fields' => array(
        array(
            'key' => 'field_5cc23da7c6789' ,
            'label' => esc_html__( 'Title' , 'alcy' ) ,
            'name' => 'dsn-title' ,
            'type' => 'text' ,
            'instructions' => '' ,
            'required' => 0 ,
            'conditional_logic' => 0 ,
            'wrapper' => array(
                'width' => '' ,
                'class' => '' ,
                'id' => '' ,
            ) ,
            'default_value' => esc_html__( 'Proudly served some of the most famous brands.' , 'alcy' ) ,
            'placeholder' => '' ,
            'prepend' => '' ,
            'append' => '' ,
            'maxlength' => '' ,
        ) ,
        array(
            'key' => 'field_5cc23da7c6f88' ,
            'label' => esc_html__( 'Brand Item' , 'alcy' ) ,
            'name' => 'dsn-item' ,
            'type' => 'repeater' ,
            'instructions' => '' ,
            'required' => 0 ,
            'conditional_logic' => 0 ,
            'wrapper' => array(
                'width' => '' ,
                'class' => '' ,
                'id' => '' ,
            ) ,
            'collapsed' => 'field_5cc23da7ce7f6' ,
            'min' => 0 ,
            'max' => 0 ,
            'layout' => 'block' ,
            'button_label' => '' ,
            'sub_fields' => array(
                array(
                    'key' => 'field_5cc23da7ce7f6' ,
                    'label' => esc_html__( 'Link' , 'alcy' ) ,
                    'name' => 'link' ,
                    'type' => 'url' ,
                    'instructions' => '' ,
                    'required' => 0 ,
                    'conditional_logic' => 0 ,
                    'wrapper' => array(
                        'width' => '' ,
                        'class' => '' ,
                        'id' => '' ,
                    ) ,
                    'default_value' => '' ,
                    'placeholder' => '' ,
                ) ,

                array(
                    'key' => 'field_5cc23de840d49' ,
                    'label' => esc_html__( 'Brand icon' , 'alcy' ) ,
                    'name' => 'brand_icon' ,
                    'type' => 'image' ,
                    'instructions' => '' ,
                    'required' => 0 ,
                    'conditional_logic' => 0 ,
                    'wrapper' => array(
                        'width' => '' ,
                        'class' => '' ,
                        'id' => '' ,
                    ) ,
                    'return_format' => 'id' ,
                    'preview_size' => 'thumbnail' ,
                    'library' => 'all' ,
                    'min_width' => '' ,
                    'min_height' => '' ,
                    'min_size' => '' ,
                    'max_width' => '' ,
                    'max_height' => '' ,
                    'max_size' => '' ,
                    'mime_types' => '' ,
                ) ,
            ) ,
        ) ,
    ) ,
    'location' => array(
        array(
            array(
                'param' => 'block' ,
                'operator' => '==' ,
                'value' => 'acf/dsnbrand' ,
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
