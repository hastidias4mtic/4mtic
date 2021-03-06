<?php
acf_register_block( array(
                        'name'     => 'dsnExperience' ,
                        'title'    => esc_html__( 'Experience' , 'alcy' ) ,
                        'icon'     => '<svg height="649pt" viewBox="-25 -20 649 649.33548" width="649pt" xmlns="http://www.w3.org/2000/svg"><path d="m119.832031 158.996094c-33.121093 0-59.96875-26.851563-59.96875-59.96875 0-33.121094 26.847657-59.964844 59.96875-59.964844 33.117188 0 59.964844 26.84375 59.964844 59.964844-.03125 33.101562-26.863281 59.933594-59.964844 59.96875zm0-99.945313c-22.082031 0-39.980469 17.894531-39.980469 39.976563 0 22.078125 17.898438 39.980468 39.980469 39.980468 22.078125 0 39.976563-17.902343 39.976563-39.980468 0-22.082032-17.898438-39.976563-39.976563-39.976563zm0 0"/><path d="m359.699219 438.84375v59.96875h-109.9375v-137.136719l-59.96875-19.992187v-102.730469h89.949219c27.585937-.035156 49.941406-22.390625 49.976562-49.972656v-19.988281h-279.851562c-27.585938.027343-49.9375005 22.382812-49.972657 49.972656v109.9375c0 16.558594 13.425781 29.984375 29.984375 29.984375h19.988282v179.902343h-49.972657v69.964844h19.992188v-49.976562h139.921875v49.976562h19.988281v-89.953125h179.902344v89.953125h19.992187v-149.921875h199.890625v149.921875h19.988281v-169.910156zm-309.832031-209.886719v109.941407h-19.988282c-5.519531 0-9.992187-4.476563-9.992187-9.996094v-109.9375c0-16.566406 13.421875-29.984375 29.980469-29.984375h259.859374c0 16.558593-13.425781 29.984375-29.984374 29.984375h-109.9375v137.132812l59.964843 19.988282v122.726562h-29.980469v-106.875l-99.949218-37.480469v184.332031h-29.980469v-309.832031zm109.941406 269.855469v39.976562h-39.976563v-155.484374l59.964844 22.484374v93.023438zm0 0"/><path d="m439.65625 408.859375h79.957031v-249.863281h57.871094l-97.847656-158.996094-97.847657 158.996094h57.867188zm-22.085938-269.851563 62.066407-100.871093 62.066406 100.871093h-42.078125v249.863282h-39.976562v-249.863282zm0 0"/></svg>' ,
                        'category' => 'dsn-grid' ,

                        'render_callback' => function ( $block , $content = '' , $is_preview = false , $post_id = 0 ) {

                            $title    = alcy_acf_option( 'dsn-title' );
                            $contents = alcy_acf_option( 'items' );


                            if ( $is_preview ) {
                                printf( '<h1 class="dsn-title">%s</h1>' , $block[ 'title' ] );
                            }


                            $condetion = get_page_template_slug( $post_id ) !== 'page-about.php';

                            if ( $condetion ):
                                echo '<div class="main-box">';
                                echo '<div class="box-about-work">';
                            endif;
                            echo alcy_view( 'shortcode/experience' , array(
                                'attr'        => array(
                                    'title' => $title ,
                                    'items' => $contents
                                ) , 'content' => $content
                            ) );
                            if ( $condetion ):
                                echo '</div>';
                                echo '</div>';
                            endif;

                        } ,
                        'post_types'      => array( 'page' )

                    ) );


acf_add_local_field_group( array(
                               'key'                   => 'group_9dd32b3dcd144' ,
                               'title'                 => esc_html__( 'Blocks Experience' , 'alcy' ) ,
                               'fields'                => array(
                                   array(
                                       'key'               => 'field_5cc22b3ddf9e5' ,
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
                                       'key'               => 'field_5d3cceab6d691' ,
                                       'label'             => 'Items' ,
                                       'name'              => 'items' ,
                                       'type'              => 'repeater' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'collapsed'         => 'field_5d2e3ddbae25d' ,
                                       'min'               => 0 ,
                                       'max'               => 0 ,
                                       'layout'            => 'row' ,
                                       'button_label'      => 'Add Experince' ,
                                       'sub_fields'        => array(
                                           array(
                                               'key'               => 'field_5d2e3ddbae25d' ,
                                               'label'             => 'Year' ,
                                               'name'              => 'year' ,
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
                                               'key'               => 'field_5d2e3de6ae25e' ,
                                               'label'             => 'description' ,
                                               'name'              => 'description' ,
                                               'type'              => 'textarea' ,
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
                                               'maxlength'         => '' ,
                                               'rows'              => 4 ,
                                               'new_lines'         => '' ,
                                           ) ,
                                       ) ,
                                   ) ,
                               ) ,
                               'location'              => array(
                                   array(
                                       array(
                                           'param'    => 'block' ,
                                           'operator' => '==' ,
                                           'value'    => 'acf/dsnexperience' ,
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

