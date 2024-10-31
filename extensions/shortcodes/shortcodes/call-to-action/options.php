<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'fullwidth'	=> array(
		'label'        => __( 'Full Width', 'robot-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'robot-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'robot-features' )
		),
		'value'        => 'yes',
		'desc'         => __( 'Choose yes if You want Full Width. Only works on one column page.', 'robot-features' ),
	),
	'column'  => array(
		'label'   => __( 'Columns', 'robot-features' ),
		'desc'    => __( 'Number of columns on big screens.', 'robot-features' ),
		'type'    => 'select',
		'value'	  => '3',
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4'
		)
	),
	'pagination'  => array(
		'label'   => __( 'Pagination', 'robot-features' ),
		'type'    => 'select',
		'value'	  => 'true',
		'choices' => array(
			'true' => __( 'True', 'robot-features' ),
			'false' => __( 'False', 'robot-features' ),
		)
	),
	'navigation'  => array(
		'label'   => __( 'Navigation', 'robot-features' ),
		'type'    => 'select',
		'value'	  => 'dark',
		'choices' => array(
			'normal' => __( 'Normal', 'robot-features' ),
			'normal-2' => __( 'Normal 2', 'robot-features' ),
			'big' => __( 'Big', 'robot-features' ),
			'false' => __( 'False', 'robot-features' ),
		)
	),
	'delay'   => array(
		'label' => __( 'Delay', 'robot-features' ),
		'desc'  => __( 'The delay for autoplay in sec. (default: false)', 'robot-features' ),
		'type'  => 'text',
	),
	'cta' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Columns', 'robot-features' ),
		'popup-title'   => __( 'Add/Edit Column', 'robot-features' ),
		'desc'          => __( 'Create your columns', 'robot-features' ),
		'template'      => '{{=name}}',
		'popup-options' => array(
			'name'       => array(
				'type'  => 'text',
				'label' => __( 'Title', 'robot-features' ),
				'desc'  => __( 'Add a title.', 'robot-features' )
			),
			'icon'  		=> array(
				'label' => __( 'Icon', 'robot-features' ),
				'desc'  => __( 'Select an icon.', 'robot-features' ),
				'type'  => 'icon',
			),
			'link'       => array(
				'type'  => 'text',
				'label' => __( 'Link', 'robot-features' ),
				'desc'  => __( 'Add a link for the area.', 'robot-features' )
			),
			'head'       => array(
				'type'  => 'text',
				'label' => __( 'Hover header', 'robot-features' ),
				'desc'  => __( 'Add a title.', 'robot-features' )
			),
			'desc'       => array(
				'type'  => 'textarea',
				'label' => __( 'Hover description', 'robot-features' ),
				'desc'  => __( 'Add a description.', 'robot-features' )
			),
			'img'            => array(
				'type'  => 'upload',
				'label' => __( 'Column image', 'robot-features' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'robot-features' )
			),
		),
	),
	'unique_design_text'                      => array(
		'label' => __( 'Unique Design', 'robot-features' ),
		'type'  => 'html',
		'value' => '',
		'html'  => '',
	),
	'rbt_s_cta_unique' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Unique Design', 'robot-features'),
				'type' => 'switch',
				'right-choice' => array(
					'value' => 'off',
					'label' => __('Off', 'robot-features')
				),
				'left-choice' => array(
					'value' => 'on',
					'label' => __('On', 'robot-features')
				),
				'value' => 'off',
				'desc' => __('Turn on or off.', 'robot-features'),
			)
		),
		'choices' => array(
			'on' => array(
				'rbt_s_cta_padding' => array(
					'type' => 'text',
					'label' => __('Item Padding', 'robot-features'),
					'desc' => __('Add the padding css for the items.', 'robot-features'),
					'value' => '10px',
				),
				'rbt_s_cta_line' => array(
					'label' => __('Line Animation', 'robot-features'),
					'type' => 'short-select',
					'value' => 'none',
					'choices' => array(
						'none' => __('None', 'robot-features'),
						'frame' => __('Frame', 'robot-features'),
					),
				),
				'rbt_s_cta_img_an' => array(
					'label' => __('Image Animation', 'robot-features'),
					'type' => 'short-select',
					'value' => 'none',
					'choices' => array(
						'none' => __('None', 'robot-features'),
						'zoom' => __('Zoom', 'robot-features'),
					),
				),
			),

		),
		'show_borders' => false,
	),			
);