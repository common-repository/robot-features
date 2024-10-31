<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'size'  => array(
		'label'   => __( 'Size', 'robot-features' ),
		'desc'    => __( 'Select the size of the separator.', 'robot-features' ),
		'type'    => 'select',
		'value'	  => 'normal',
		'choices' => array(
			'normal' => __('Normal', 'robot-features'),
			'small' => __('Small', 'robot-features')
		)
	),
	'color'              => array(
		'label' => __( 'Color', 'robot-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code.', 'robot-features' ),
	),
	'margin' => array(
		'label' => __( 'Margin', 'robot-features' ),
		'type'  => 'slider',
		'value' => 10,
		'desc'  => __( 'Add the size of the margin (px).', 'robot-features' ),
	),
	'icon'  		=> array(
		'label' => __( 'Icon', 'robot-features' ),
		'desc'  => __( 'Select an icon.', 'robot-features' ),
		'type' => 'icon',
	),
);