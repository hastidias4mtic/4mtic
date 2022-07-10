<?php
acf_register_block( array(
    'name' => 'dsnService' ,
    'title' => esc_html__( 'Service' , 'alcy' ) ,
    'icon' => 'universal-access' ,
    'category' => 'dsn-grid' ,
    'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {

        $title = alcy_acf_option( 'dsn-title' );
        $content = alcy_acf_option( 'dsn-item' , array() );
        $type_image = alcy_acf_option( 'type_image' , 'img' );
        $outRev = '';
        foreach ( $content as $con ):
            $icons = '';
            if ( $type_image === 'img' ):
                $id = alcy_acf_option_array( $con , 'image' );
                $icons = wp_get_attachment_image( $id );
            else:
                $icons = alcy_acf_option_array( $con , 'icon' );
            endif;
            $co_title = alcy_acf_option_array( $con , 'title' );
            $co_description = alcy_acf_option_array( $con , 'description' );


            $outRev .= alcy_view( 'shortcode/serviceItem' , array( 'attr' => array(
                'title' => $co_title ,
                'icon' => $icons ,
                'description' => $co_description ,
            ) , 'content' => '' ) );
        endforeach;

        if ( $is_preview ) {
            printf( '<h1 class="dsn-title">-- %s</h1>' , $block[ 'title' ] );
        }

        echo alcy_view( 'shortcode/dsnService' , array( 'attr' => array(
            'title' => $title ,
        ) , 'content' => $outRev ) );


    } ,


) );


acf_add_local_field_group( array(
    'key' => 'group_5d2a5461413b0' ,
    'title' => 'Service' ,
    'fields' => array(
        array(
            'key' => 'field_5d2b294125602' ,
            'label' => 'Title' ,
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
            'default_value' => '' ,
            'placeholder' => '' ,
            'prepend' => '' ,
            'append' => '' ,
            'maxlength' => '' ,
        ) ,
        array(
            'key' => 'field_5d2b29e225605' ,
            'label' => 'Type Image' ,
            'name' => 'type_image' ,
            'type' => 'radio' ,
            'instructions' => '' ,
            'required' => 0 ,
            'conditional_logic' => 0 ,
            'wrapper' => array(
                'width' => '' ,
                'class' => '' ,
                'id' => '' ,
            ) ,
            'choices' => array(
                'icon' => 'Icon' ,
                'img' => 'Image' ,
            ) ,
            'allow_null' => 0 ,
            'other_choice' => 0 ,
            'default_value' => 'img' ,
            'layout' => 'vertical' ,
            'return_format' => 'value' ,
            'save_other_choice' => 0 ,
        ) ,
        array(
            'key' => 'field_5d2b295125603' ,
            'label' => 'Item' ,
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
            'collapsed' => 'field_5d2b2bdb25607' ,
            'min' => 0 ,
            'max' => 0 ,
            'layout' => 'row' ,
            'button_label' => 'Add Item' ,
            'sub_fields' => array(
                array(
                    'key' => 'field_5d2b297625604' ,
                    'label' => 'icon' ,
                    'name' => 'icon' ,
                    'type' => 'text' ,
                    'instructions' => '<p>You can control this icons from <a href="https://fontawesome.com/icons?d=gallery&amp;m=free" target="_blank">This Page</a></p>
<h5>copy into class like '.esc_html('<i class="fab fa-500px"></i>').'</h5>' ,
                    'required' => 0 ,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_5d2b29e225605' ,
                                'operator' => '==' ,
                                'value' => 'icon' ,
                            ) ,
                        ) ,
                    ) ,
                    'wrapper' => array(
                        'width' => '' ,
                        'class' => '' ,
                        'id' => '' ,
                    ) ,
                    'default_value' => '' ,
                    'placeholder' => '' ,
                    'prepend' => '' ,
                    'append' => '' ,
                    'maxlength' => '' ,
                ) ,
                array(
                    'key' => 'field_5d2b2b5e25606' ,
                    'label' => 'image' ,
                    'name' => 'image' ,
                    'type' => 'image' ,
                    'instructions' => '' ,
                    'required' => 0 ,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_5d2b29e225605' ,
                                'operator' => '==' ,
                                'value' => 'img' ,
                            ) ,
                        ) ,
                    ) ,
                    'wrapper' => array(
                        'width' => '' ,
                        'class' => '' ,
                        'id' => '' ,
                    ) ,
                    'return_format' => 'id' ,
                    'preview_size' => 'medium' ,
                    'library' => 'all' ,
                    'min_width' => '' ,
                    'min_height' => '' ,
                    'min_size' => '' ,
                    'max_width' => '' ,
                    'max_height' => '' ,
                    'max_size' => '' ,
                    'mime_types' => '' ,
                ) ,
                array(
                    'key' => 'field_5d2b2bdb25607' ,
                    'label' => 'Title' ,
                    'name' => 'title' ,
                    'type' => 'text' ,
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
                    'prepend' => '' ,
                    'append' => '' ,
                    'maxlength' => '' ,
                ) ,
                array(
                    'key' => 'field_5d2b2be725608' ,
                    'label' => 'Description' ,
                    'name' => 'description' ,
                    'type' => 'textarea' ,
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
                    'maxlength' => '' ,
                    'rows' => '' ,
                    'new_lines' => 'br' ,
                ) ,
            ) ,
        ) ,
    ) ,
    'location' => array(
        array(
            array(
                'param' => 'block' ,
                'operator' => '==' ,
                'value' => 'acf/dsnservice' ,
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


