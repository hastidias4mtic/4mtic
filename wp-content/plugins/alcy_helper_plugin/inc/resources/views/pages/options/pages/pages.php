<?php


acf_add_local_field_group( array(
    'key'                   => 'group_5cbb71b6574c9' ,
    'title'                 => 'Pagination' ,
    'fields'                => array(
        array(
            'key'               => 'field_5cbb71e9378eb' ,
            'label'             => 'Ajax Load More' ,
            'name'              => 'ajax_load_more' ,
            'type'              => 'true_false' ,
            'instructions'      => '' ,
            'required'          => 0 ,
            'conditional_logic' => 0 ,
            'wrapper'           => array(
                'width' => '' ,
                'class' => '' ,
                'id'    => '' ,
            ) ,
            'message'           => '' ,
            'default_value'     => 1 ,
            'ui'                => 1 ,
            'ui_on_text'        => '' ,
            'ui_off_text'       => '' ,
        ) ,
    ) ,
    'location'              => array(
        array(
            array(
                'param'    => 'page_template' ,
                'operator' => '==' ,
                'value'    => 'page-posts.php' ,
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


acf_add_local_field_group( array(
    'key'                   => 'group_5d28b42a28fca' ,
    'title'                 => 'Option Page' ,
    'fields'                => array(
        array(
            'key'               => 'field_5d28b42a471fe' ,
            'label'             => 'option' ,
            'name'              => 'option' ,
            'type'              => 'clone' ,
            'instructions'      => '' ,
            'required'          => 0 ,
            'conditional_logic' => 0 ,
            'wrapper'           => array(
                'width' => '' ,
                'class' => '' ,
                'id'    => '' ,
            ) ,
            'clone'             => array(
                0 => 'field_5d277d7783e23' ,
                1 => 'field_5d277f7383e24' ,
                2 => 'field_5d2781a091f9a' ,
                3 => 'field_5d2781b83ad7c' ,
                4 => 'field_5d1679b83ad7c' ,
                5 => 'field_5d27836b5f452' ,
                6 => 'field_5d2783875f453' ,
                7 => 'field_5d2784225f454' ,
            ) ,
            'display'           => 'seamless' ,
            'layout'            => 'block' ,
            'prefix_label'      => 0 ,
            'prefix_name'       => 0 ,
        ) ,
    ) ,
    'location'              => array(
        array(
            array(
                'param'    => 'post_template' ,
                'operator' => '==' ,
                'value'    => 'default' ,
            ) ,
        ) ,
        array(
            array(
                'param'    => 'post_template' ,
                'operator' => '==' ,
                'value'    => 'page-posts.php' ,
            ) ,
        ) ,
        array(
            array(
                'param'    => 'post_template' ,
                'operator' => '==' ,
                'value'    => 'page-works.php' ,
            ) ,
        ) ,
    ) ,
    'menu_order'            => 1 ,
    'position'              => 'normal' ,
    'style'                 => 'default' ,
    'label_placement'       => 'top' ,
    'instruction_placement' => 'label' ,
    'hide_on_screen'        => '' ,
    'active'                => true ,
    'description'           => '' ,
) );