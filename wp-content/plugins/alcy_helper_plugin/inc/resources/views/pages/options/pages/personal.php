<?php
acf_add_local_field_group( array(
                               'key'                   => 'group_5d2b5ad06898a' ,
                               'title'                 => 'Options Personal Demo' ,
                               'fields'                => array(
                                   array(
                                       'key'               => 'field_5d2cabb0541b4' ,
                                       'label'             => 'Information Person' ,
                                       'name'              => '' ,
                                       'type'              => 'tab' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'placement'         => 'left' ,
                                       'endpoint'          => 0 ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d2ca3d373503' ,
                                       'label'             => 'Full Name' ,
                                       'name'              => 'full_name' ,
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
                                       'key'               => 'field_5d2ca40873504' ,
                                       'label'             => 'Position' ,
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
                                       'key'               => 'field_5d2cabf1541b5' ,
                                       'label'             => 'Bannar' ,
                                       'name'              => '' ,
                                       'type'              => 'tab' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'placement'         => 'left' ,
                                       'endpoint'          => 0 ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d2cac3465556' ,
                                       'label'             => 'Background Color' ,
                                       'name'              => 'background_color' ,
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
                                           'dark'  => 'Dark' ,
                                           'light' => 'Light' ,
                                       ) ,
                                       'allow_null'        => 0 ,
                                       'other_choice'      => 0 ,
                                       'default_value'     => 'dark' ,
                                       'layout'            => 'vertical' ,
                                       'return_format'     => 'value' ,
                                       'save_other_choice' => 0 ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d2ca7937f4ae' ,
                                       'label'             => 'Background Overlay' ,
                                       'name'              => 'background_overlay' ,
                                       'type'              => 'range' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'default_value'     => 2 ,
                                       'min'               => 0 ,
                                       'max'               => 10 ,
                                       'step'              => '' ,
                                       'prepend'           => '' ,
                                       'append'            => '' ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d2ca42273505' ,
                                       'label'             => 'Use Parallax' ,
                                       'name'              => 'use_parallax' ,
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
                                       'default_value'     => 0 ,
                                       'ui'                => 1 ,
                                       'ui_on_text'        => '' ,
                                       'ui_off_text'       => '' ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d2ca7f4feb06' ,
                                       'label'             => 'Use Type Text' ,
                                       'name'              => 'use_type_text' ,
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
                                       'default_value'     => 0 ,
                                       'ui'                => 1 ,
                                       'ui_on_text'        => '' ,
                                       'ui_off_text'       => '' ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d2ca4690998f' ,
                                       'label'             => 'Type Text' ,
                                       'name'              => 'type_text' ,
                                       'type'              => 'textarea' ,
                                       'instructions'      => 'Enter ( , ) choice on a new value. for example ( Web developer , Designer , freelancer , Photographer )' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => array(
                                           array(
                                               array(
                                                   'field'    => 'field_5d2ca7f4feb06' ,
                                                   'operator' => '==' ,
                                                   'value'    => '1' ,
                                               ) ,
                                           ) ,
                                       ) ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'default_value'     => '' ,
                                       'placeholder'       => '' ,
                                       'maxlength'         => '' ,
                                       'rows'              => '' ,
                                       'new_lines'         => '' ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d2ca6bb00ab1' ,
                                       'label'             => 'Use Video' ,
                                       'name'              => 'use_video' ,
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
                                       'default_value'     => 0 ,
                                       'ui'                => 1 ,
                                       'ui_on_text'        => '' ,
                                       'ui_off_text'       => '' ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d2ca6d200ab2' ,
                                       'label'             => 'link Video' ,
                                       'name'              => 'link_video' ,
                                       'type'              => 'url' ,
                                       'instructions'      => 'Youtube' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => array(
                                           array(
                                               array(
                                                   'field'    => 'field_5d2ca6bb00ab1' ,
                                                   'operator' => '==' ,
                                                   'value'    => '1' ,
                                               ) ,
                                           ) ,
                                       ) ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'default_value'     => '' ,
                                       'placeholder'       => '' ,
                                   ) ,
                                   array(
                                       'key'               => 'field_5d311049388b9' ,
                                       'label'             => 'About Button' ,
                                       'name'              => 'about_button' ,
                                       'type'              => 'select' ,
                                       'instructions'      => '' ,
                                       'required'          => 0 ,
                                       'conditional_logic' => 0 ,
                                       'wrapper'           => array(
                                           'width' => '' ,
                                           'class' => '' ,
                                           'id'    => '' ,
                                       ) ,
                                       'choices'           => alcy_search_templete( 'page-about.php' ) ,
                                       'default_value'     => 0 ,
                                       'allow_null'        => 0 ,
                                       'multiple'          => 0 ,
                                       'ui'                => 0 ,
                                       'return_format'     => 'value' ,
                                       'ajax'              => 0 ,
                                       'placeholder'       => '' ,
                                   ) ,
                               ) ,
                               'location'              => array(
                                   array(
                                       array(
                                           'param'    => 'post_template' ,
                                           'operator' => '==' ,
                                           'value'    => 'page-personal.php' ,
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