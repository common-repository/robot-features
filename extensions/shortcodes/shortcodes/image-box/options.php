<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Image', 'robot-features' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'robot-features' )
	),
	'link_type'   => array(
		'type'  => 'select',
		'label' => __( 'Link type', 'robot-features' ),
		'desc'  => __( 'Select the link type.', 'robot-features' ),
		'value' => 'normal',
		'choices' => array(
			'normal' => __('Normal', 'robot-features'),
			'lightbox' => __('Lightbox', 'robot-features'),
		),
	),
	'link'       => array(
		'type'  => 'text',
		'label' => __( 'Link', 'robot-features' ),
		'desc'  => __( 'Link for the image.', 'robot-features' )
	),
	'name'       => array(
		'type'  => 'text',
		'label' => __( 'Title', 'robot-features' ),
		'desc'  => __( 'Add the content.', 'robot-features' )
	),
	'content'       => array(
		'type'  => 'textarea',
		'label' => __( 'Description', 'robot-features' ),
		'desc'  => __( 'Add the content.', 'robot-features' )
	),
);