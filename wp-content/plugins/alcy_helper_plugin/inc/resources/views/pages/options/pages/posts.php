<?php
acf_add_local_field_group( array(
    'key' => 'group_5d277f9228e88' ,
    'title' => 'Option Post' ,
    'fields' => array(
        array(
            'key' => 'field_5d277fa6c699b' ,
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
                0 => 'field_5d277d7783e23' ,
                1 => 'field_5d277f7383e24' ,
                2 => 'field_5d27836b5f452' ,
                3 => 'field_5d2783875f453' ,
                4 => 'field_5d2784225f454' ,
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
                'value' => 'post' ,
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
