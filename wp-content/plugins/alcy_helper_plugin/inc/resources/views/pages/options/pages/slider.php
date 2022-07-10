<?php

if ( !function_exists( 'alcy_get_all_posts' ) ):
    function alcy_get_all_posts( $post_type )
    {
        $myposts = get_posts( array( 'numberposts' => -1 , 'post_type' => array( $post_type ) ) );

        $v = array();
        foreach ( $myposts as $current_post ) :
            $v[ $current_post->ID ] = $current_post->post_title;
        endforeach;

        return $v;


    }
endif;

acf_add_local_field_group( array(
                               'key'                   => 'group_5cbe0fe4e8e24' ,
                               'title'                 => 'Slider Option' ,
                               'fields'                => array(

                                   array(
                                       'key'               => 'field_5cbe0ff7a6c56' ,
                                       'label'             => 'Views' ,
                                       'name'              => 'dsn-views' ,
                                       'type'              => 'radio' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'choices'           => array(
                                           'work'   => 'Works' ,
                                           'custom' => 'Custom Slide' ,
                                       ) ,
                                       'allow_null'        => 0 ,
                                       'other_choice'      => 0 ,
                                       'default_value'     => 'work' ,
                                       'layout'            => 'horizontal' ,
                                       'return_format'     => 'value' ,
                                       'save_other_choice' => 0 ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5cca2dac66ff7' ,
                                       'label'             => 'Order' ,
                                       'name'              => 'slid_order' ,
                                       'type'              => 'radio' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => array(
                                           array(
                                               array(
                                                   'field'    => 'field_5cbe0ff7a6c56' ,
                                                   'operator' => '==' ,
                                                   'value'    => 'work' ,
                                               ) ,
                                           ) ,
                                       ) ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'choices'           => array(
                                           'ASC'  => 'Old To New' ,
                                           'DESC' => 'New To Old' ,
                                       ) ,
                                       'allow_null'        => 0 ,
                                       'other_choice'      => 0 ,
                                       'default_value'     => 'ASC' ,
                                       'layout'            => 'horizontal' ,
                                       'return_format'     => 'value' ,
                                       'save_other_choice' => 0 ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5cbe11c6a6c58' ,
                                       'label'             => 'Maximum Number Of Slider' ,
                                       'name'              => 'maximum_number_of_slider' ,
                                       'type'              => 'number' ,
                                       'instructions'      => 'if you want display all slider	, input number (-1)' ,
                                       'required'          => 1 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'default_value'     => 5 ,
                                       'placeholder'       => '' ,
                                       'prepend'           => '' ,
                                       'append'            => '' ,
                                       'min'               => -1 ,
                                       'max'               => '' ,
                                       'step'              => 1 ,
                                   ) ,
                                   array(
                                       'key' => 'field_5d2ddeab6d691',
                                       'label' => 'Background Overlay',
                                       'name' => 'overlay',
                                       'type' => 'number',
                                       'instructions' => '',
                                       'required' => 0,
                                       'conditional_logic' => 0,
                                       'wrapper' => array(
                                           'width' => '',
                                           'class' => '',
                                           'id' => '',
                                       ),
                                       'default_value' => 4,
                                       'placeholder' => '',
                                       'prepend' => '',
                                       'append' => '',
                                       'min' => 0,
                                       'max' => 10,
                                       'step' => 1,
                                   ),
                                   array(
                                       'key'               => 'field_5cbe127da6c59' ,
                                       'label'             => 'Custom Slider' ,
                                       'name'              => 'custom_slider' ,
                                       'type'              => 'repeater' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => array(
                                           array(
                                               array(
                                                   'field'    => 'field_5cbe0ff7a6c56' ,
                                                   'operator' => '==' ,
                                                   'value'    => 'custom' ,
                                               ) ,
                                           ) ,
                                       ) ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'collapsed'         => 'field_5cbe13064ca7a' ,
                                       'min'               => 0 ,
                                       'max'               => 0 ,
                                       'layout'            => 'row' ,
                                       'button_label'      => '' ,
                                       'sub_fields'        => array(
                                           array(
                                               'key'               => 'field_5cbe13064ca7a' ,
                                               'label'             => 'Title' ,
                                               'name'              => 'title' ,
                                               'type'              => 'text' ,
                                               'instructions'      => '' ,
                                               'required'          => 1 ,
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
                                               'key'               => 'field_5cbe13234ca7b' ,
                                               'label'             => 'Description' ,
                                               'name'              => 'description' ,
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
                                               'key'               => 'field_5svodeab6d691' ,
                                               'label'             => 'Link' ,
                                               'name'              => 'link' ,
                                               'type'              => 'select' ,
                                               'instructions'      => '' ,
                                               'required'          => 1 ,
                                               'conditional_logic' => 0 ,
                                               'wrapper'           => array(
                                                   'width' => '' ,
                                                   'class' => '' ,
                                                   'id'    => '' ,
                                               ) ,
                                               'choices'           => array(
                                                   'Work' => alcy_get_all_posts( alcy_project_slug() ) ,
                                                   'Post' => alcy_get_all_posts( 'post' ) ,
                                                   'Page' => alcy_get_all_posts( 'page' ) ,
                                               ) ,
                                               'default_value'     => array() ,
                                               'allow_null'        => 1 ,
                                               'multiple'          => 0 ,
                                               'ui'                => 1 ,
                                               'return_format'     => 'value' ,
                                               'ajax'              => 0 ,
                                               'placeholder'       => '' ,
                                           ) ,


                                           array(
                                               'key'               => 'field_5cbe14f698ce1' ,
                                               'label'             => 'Image' ,
                                               'name'              => 'image' ,
                                               'type'              => 'image' ,
                                               'instructions'      => '' ,
                                               'required'          => 0 ,
                                               'conditional_logic' => 0 ,
                                               'wrapper'           => array(
                                                   'width' => '' ,
                                                   'class' => '' ,
                                                   'id'    => '' ,
                                               ) ,
                                               'return_format'     => 'array' ,
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
                                   ) ,
                               ) ,
                               'location'              => array(
                                   array(
                                       array(
                                           'param'    => 'page_template' ,
                                           'operator' => '==' ,
                                           'value'    => 'page-slider.php' ,
                                       ) ,
                                   ) ,
                               ) ,
                               'menu_order'            => 0 ,
                               'position'              => 'normal' ,
                               'style'                 => 'default' ,
                               'label_placement'       => 'top' ,
                               'instruction_placement' => 'label' ,
                               'hide_on_screen'        => array(
                                   0  => 'the_content' ,
                                   1  => 'excerpt' ,
                                   2  => 'discussion' ,
                                   3  => 'comments' ,
                                   4  => 'revisions' ,
                                   5  => 'author' ,
                                   6  => 'format' ,
                                   7  => 'page_attributes' ,
                                   8  => 'featured_image' ,
                                   9  => 'categories' ,
                                   10 => 'tags' ,
                                   11 => 'send-trackbacks' ,
                               ) ,
                               'active'                => true ,
                               'description'           => '' ,
                           ) );

