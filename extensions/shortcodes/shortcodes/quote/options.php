<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'author'   => array(
		'label' => __( 'Author', 'robot-features' ),
		'desc'  => __( 'Add the author.', 'robot-features' ),
		'type'  => 'text',
	),
	'style'  => array(
		'label'   => __( 'Style', 'robot-features' ),
		'desc'    => __( 'Select one from the styles.', 'robot-features' ),
		'type'    => 'select',
		'value'	  => '1',
		'choices' => array(
			'1' => __('1', 'robot-features'),
			'2' => __('2', 'robot-features'),
		)
	),
	'content'  => array(
		'label' => __( 'Content', 'robot-features' ),
		'desc'  => __( 'Add the content.', 'robot-features' ),
		'type'  => 'textarea',
	),
);