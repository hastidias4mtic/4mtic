<?php


acf_add_local_field_group( array(
                               'key'                   => 'group_5d2f3996b425a' ,
                               'title'                 => 'Options About' ,
                               'fields'                => array(
                                   array(
                                       'key'               => 'field_5d2f399d60111' ,
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
                                           2 => 'field_5d2784225f454' ,
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
                                           'value'    => 'page-about.php' ,
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

