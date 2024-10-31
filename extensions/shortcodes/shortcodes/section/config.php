<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'         => esc_html__( 'Layout Elements', 'robot-features' ),
		'title'       => esc_html__( 'Section', 'robot-features' ),
		'description' => esc_html__( 'Add a Section', 'robot-features' ),
		'popup_size'  => 'large',
		'type'        => 'section' // WARNING: Do not edit this
	)
);