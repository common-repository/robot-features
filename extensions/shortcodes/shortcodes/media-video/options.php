<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Insert Video URL', 'robot-features' ),
		'desc'  => __( 'Insert Video URL to embed this video. (Vimeo or Youtube)', 'robot-features' )
	),
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Image', 'robot-features' ),
		'desc'  => __( 'Add a cover image or leave it blank.', 'robot-features' )
	),
	'border'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Border', 'robot-features' ),
		'desc'  => __( 'Add style or leave it blank.', 'robot-features' )
	),
);
