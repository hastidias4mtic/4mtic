<?php
acf_add_local_field_group( array(
	'key'                   => 'group_5cbb72c8770fa',
	'title'                 => esc_html__( 'Filter Work', 'alcy' ),
	'fields'                => array(
		array(
			'key'               => 'field_5cbb7320fc682',
			'label'             => esc_html__( 'Filter', 'alcy' ),
			'name'              => 'is_filter',
			'type'              => 'true_false',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'message'           => '',
			'default_value'     => 1,
			'ui'                => 1,
			'ui_on_text'        => '',
			'ui_off_text'       => '',
		),
	),
	'location'              => array(
		array(
			array(
				'param'    => 'page_template',
				'operator' => '==',
				'value'    => 'page-works.php',
			),
		),
	),
	'menu_order'            => 0,
	'position'              => 'normal',
	'style'                 => 'default',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => '',
	'active'                => true,
	'description'           => '',
) );