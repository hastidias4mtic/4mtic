<?php


acf_add_local_field_group( array(
    'key' => 'group_5d28d6ba0edc2' ,
    'title' => 'Option Project' ,
    'fields' => array(
        array(
            'key' => 'field_5d28d6ba2a98f' ,
            'label' => 'option' ,
            'name' => 'option' ,
            'type' => 'clone' ,
            'instructions' => '' ,
            'required' => 0 ,
            'conditional_logic' => 0 ,
            'wrapper' => array(
                'width' => '' ,
                'class' => '' ,
                'id' => '' ,
            ) ,
            'clone' => array(
                0 => 'field_5d28e72057a3c' ,
                1 => 'field_5d28e73b57a3d' ,
                2 => 'field_5d28e75957a3e' ,
                3 => 'field_5d277d7783e23' ,
                4 => 'field_5d277f7383e24' ,
                5 => 'field_5d2781a091f9a' ,
                6 => 'field_5d28c044f23f9' ,
                7 => 'field_5d28be9cfe744' ,
                8 => 'field_5d27836b5f452' ,
                9 => 'field_5d2783875f453' ,
                10 => 'field_5d2784225f454' ,
            ) ,
            'display' => 'seamless' ,
            'layout' => 'block' ,
            'prefix_label' => 0 ,
            'prefix_name' => 0 ,
        ) ,
    ) ,
    'location' => array(
        array(
            array(
                'param' => 'post_type' ,
                'operator' => '==' ,
                'value' => alcy_project_slug() ,
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