<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'       => array(
		'type'  => 'text',
		'label' => __( 'Title', 'robot-features' ),
		'desc'  => __( 'Add the content.', 'robot-features' )
	),
	'h'   => array(
		'type'  => 'select',
		'label' => __( 'Size', 'robot-features' ),
		'desc'  => __( 'Select the font size.', 'robot-features' ),
		'value' => '2',
		'choices' => array(
			'1' => __('h1', 'robot-features'),
			'2' => __('h2', 'robot-features'),
			'3' => __('h3', 'robot-features'),
			'4' => __('h4', 'robot-features'),
			'5' => __('h5', 'robot-features'),
			'6' => __('h6', 'robot-features'),
		),
	),
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Align', 'robot-features' ),
		'desc'  => __( 'Set the align.', 'robot-features' ),
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'robot-features'),
			'left' => __('left', 'robot-features'),
			'right' => __('right', 'robot-features'),
		),
	),
	'color'              => array(
		'label' => __( 'Color', 'robot-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'You can add specific color.', 'robot-features' ),
	),
	'allow_icon' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Icon', 'robot-features'),
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
				'desc' => __('Turn on if You want to display icon next to the title.', 'robot-features'),
			)
		),
		'choices' => array(
			'on' => array(
				'icon'  		=> array(
					'label' => __( 'Icon', 'robot-features' ),
					'desc'  => __( 'Select an icon.', 'robot-features' ),
					'type' => 'icon',
					'value' => 'fa fa-1-no-icon',
				),
			),

		),
		'show_borders' => false,
	),
	'border' => array(
		'label' => __('Underline', 'robot-features'),
		'type' => 'slider',
		'desc'  => __( 'Select the size of the bottom border.', 'robot-features' ),
		'value' => 0,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'sep' => 1,
		),
	),
	'fw_border'              => array(
		'label' => __( 'Fullwidth Underline', 'robot-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code, If You want fullwidth underline.', 'robot-features' ),
	),
);