<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'  => array(
		'label' => __( 'Button Label', 'robot-features' ),
		'desc'  => __( 'This is the text that appears on your button.', 'robot-features' ),
		'type'  => 'text',
	),
	'link'   => array(
		'label' => __( 'Button Link', 'robot-features' ),
		'desc'  => __( 'Where should your button link to.', 'robot-features' ),
		'type'  => 'text',
		'value' => '#'
	),
	'color'  => array(
		'label'   => __( 'Color Type', 'robot-features' ),
		'desc'    => __( 'Select the color type.', 'robot-features' ),
		'type'    => 'select',
		'choices' => array(
			'basic' => __('basic', 'robot-features'),
			'inverse' => __('basic 2', 'robot-features'),
			'bw' => __('black & white', 'robot-features'),
			'custom' => __('custom', 'robot-features'),
		)
	),
	'custom_color'              => array(
		'label' => __( 'Custom Background Color', 'robot-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code for custom button.', 'robot-features' ),
	),
	'custom_font_color'              => array(
		'label' => __( 'Unique Font Color', 'robot-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code for the button.', 'robot-features' ),
	),
	'size'  => array(
		'label'   => __( 'Size', 'robot-features' ),
		'desc'    => __( 'Select the size.', 'robot-features' ),
		'type'    => 'select',
		'choices' => array(
			'' => '',
			'small' => __('small', 'robot-features'),
			'normal' => __('normal', 'robot-features'),
			'big' => __('big', 'robot-features'),
			'bigger' => __('bigger', 'robot-features'),
		)
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'robot-features' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window.', 'robot-features' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'robot-features'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'robot-features'),
		),
	),
	'icon_position'  => array(
		'label'   => __( 'Enable Icon', 'robot-features' ),
		'desc'    => __( 'Left or right.', 'robot-features' ),
		'type'    => 'select',
		'value'	  => 'none',
		'choices' => array(
			'none' => __('none', 'robot-features'),
			'right' => __('right', 'robot-features'),
			'left' => __('left', 'robot-features'),
		)
	),
	'icon' => array(
		'label' => __('Icon', 'robot-features'),
		'type' => 'icon',
		'value' => 'fa fa-1-no-icon',
		'desc' => __('Select the icon.', 'robot-features'),
	),
	'border_radius'   => array(
		'label' => __( 'Border Radius', 'robot-features' ),
		'desc'  => __( 'Add css code or leave it blank.', 'robot-features' ),
		'type'  => 'text',
		'value' => '4px'
	),
);