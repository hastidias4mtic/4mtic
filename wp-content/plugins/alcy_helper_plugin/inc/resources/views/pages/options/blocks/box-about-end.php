<?php
acf_register_block( array(
                        'name'            => 'dsnBoxEnd' ,
                        'title'           => esc_html__( 'Box About End' , 'alcy' ) ,
                        'icon'            => 'info' ,
                        'category'        => 'dsn-grid' ,
                        'post_types'      => array( 'page' ) ,
                        'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {

                            $condetion = get_page_template_slug( $post_id ) !== 'page-about.php';
                            if ( $post_id && alcy_check_block( $block , $is_preview , $condetion , 'About Template' ) ) {
                                return false;
                            }

                            $title = alcy_acf_option( 'dsn-title' );

                            if ( $is_preview ) {
                                printf( '<h1 class="dsn-title">-- %s</h1>' , $block[ 'title' ] );
                                printf( '<div class="line-box">%s</div>' , 'End ' . $title );

                            } else {

                                echo alcy_view( 'shortcode/box-about-end' , array() );

                            }


                        }
                    ) );


acf_add_local_field_group( array(
                               'key'                   => 'group_76m13da7b5fd6' ,
                               'title'                 => esc_html__( 'Blocks Box About End' , 'alcy' ) ,
                               'fields'                => array(
                                   array(
                                       'key'               => 'field_5dd23da7c6789' ,
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


                               ) ,
                               'location'              => array(
                                   array(
                                       array(
                                           'param'    => 'block' ,
                                           'operator' => '==' ,
                                           'value'    => 'acf/dsnboxend' ,
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
