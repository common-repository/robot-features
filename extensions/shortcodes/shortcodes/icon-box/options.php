<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'                  => array(
		'label' => __( 'Title', 'robot-features' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add the title.', 'robot-features' ),
	),
	'icon' => array(
		'label' => __('Icon', 'robot-features'),
		'type' => 'icon',
		'desc' => __('Select the icon.', 'robot-features'),
	),
	'link'                  => array(
		'label' => __( 'Link', 'robot-features' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add a link or leave it blank.', 'robot-features' ),
	),
	'content'                  => array(
		'label' => __( 'Content', 'robot-features' ),
		'type'  => 'textarea',
		'value' => '',
		'desc'  => __( 'Add the content.', 'robot-features' ),
	),
);