<?php
acf_register_block( array(
                        'name'     => 'dsnBoxStart' ,
                        'title'    => esc_html__( 'Box About Start' , 'alcy' ) ,
                        'icon'     => 'info' ,
                        'category' => 'dsn-grid' ,
                        'post_types' => array( 'page' ) ,
                        'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {
                            $condetion = get_page_template_slug( $post_id ) !== 'page-about.php';
                            if ( $post_id && alcy_check_block( $block , $is_preview , $condetion , 'About Template' ) ) {
                                return false;
                            }

                            $title      = alcy_acf_option( 'dsn-title' );
                            $brand_icon = alcy_acf_option( 'brand_icon' );


                            if ( $is_preview ) {
                                printf( '<h1 class="dsn-title">-- %s</h1>' , $block[ 'title' ] );
                                printf( '<div class="line-box">%s</div>' , $title );

                            } else {


                                echo alcy_view( 'shortcode/box-about-start' , array(
                                    'attr'        => array(
                                        'title'  => $title ,
                                        'id_img' => $brand_icon
                                    ) , 'content' => $content
                                ) );

                            }


                        }
                    ) );


acf_add_local_field_group( array(
                               'key'                   => 'group_66d23da7b5fd6' ,
                               'title'                 => esc_html__( 'Blocks Box About Start' , 'alcy' ) ,
                               'fields'                => array(
                                   array(
                                       'key'               => 'field_9bb23da7c6789' ,
                                       'label'             => esc_html__( 'Title' , 'alcy' ) ,
                                       'name'              => 'dsn-title' ,
                                       'type'              => 'text' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'default_value'     => '' ,
                                       'placeholder'       => '' ,
                                       'prepend'           => '' ,
                                       'append'            => '' ,
                                       'maxlength'         => '' ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5cc23de840d49' ,
                                       'label'             => esc_html__( 'Brand icon' , 'alcy' ) ,
                                       'name'              => 'brand_icon' ,
                                       'type'              => 'image' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'return_format'     => 'id' ,
                                       'preview_size'      => 'thumbnail' ,
                                       'library'           => 'all' ,
                                       'min_width'         => '' ,
                                       'min_height'        => '' ,
                                       'min_size'          => '' ,
                                       'max_width'         => '' ,
                                       'max_height'        => '' ,
                                       'max_size'          => '' ,
                                       'mime_types'        => '' ,
                                   ) ,

                               ) ,
                               'location'              => array(
                                   array(
                                       array(
                                           'param'    => 'block' ,
                                           'operator' => '==' ,
                                           'value'    => 'acf/dsnboxstart' ,
                                       ) ,
                                   ) ,
                               ) ,
                               'menu_order'            => 0 ,
                               'position'              => 'normal' ,
                               'style'                 => 'default' ,
                               'label_placement'       => 'top' ,
                               'instruction_placement' => 'label' ,
                               'hide_on_screen'        => '' ,
                               'active'                => true ,
                               'description'           => '' ,
                           ) );
