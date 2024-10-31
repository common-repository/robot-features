<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'flexslider' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Sliders', 'robot-features' ),
		'popup-title'   => __( 'Add/Edit Slide', 'robot-features' ),
		'desc'          => __( 'Create your slides', 'robot-features' ),
		'template'      => '{{=slide_image}}',
		'popup-options' => array(
			'slide_image'            => array(
				'type'  => 'upload',
				'label' => __( 'Image', 'robot-features' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'robot-features' )
			),
		),
	)
);