<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'column'  => array(
		'label'   => __( 'Columns', 'robot-features' ),
		'desc'    => __( 'Number of columns on big screens.', 'robot-features' ),
		'type'    => 'select',
		'value'	  => '1',
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3'
		)
	),
	'delay'   => array(
		'label' => __( 'Delay', 'robot-features' ),
		'desc'  => __( 'The delay for autoplay in sec. (default: false)', 'robot-features' ),
		'type'  => 'text',
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
		'value'	  => 'normal',
		'choices' => array(
			'normal' => __( 'Normal', 'robot-features' ),
			'normal-2' => __( 'Normal 2', 'robot-features' ),
			'big' => __( 'Big', 'robot-features' ),
			'false' => __( 'False', 'robot-features' ),
		)
	),
	'quotes' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Quotes', 'robot-features' ),
		'popup-title'   => __( 'Add/Edit Quote', 'robot-features' ),
		'desc'          => __( 'Create your quotes', 'robot-features' ),
		'template'      => '{{=quote_author}}',
		'popup-options' => array(
			'quote_author' => array(
				'type'  => 'text',
				'label' => __('Author', 'robot-features'),
				'desc'  => __( 'Add the author.', 'robot-features' )
			),
			'quote_author_position' => array(
				'type'  => 'text',
				'label' => __('Author Role', 'robot-features'),
				'desc'  => __( 'Add some text.', 'robot-features' )
			),
			'quote_image'            => array(
				'type'  => 'upload',
				'label' => __( 'Author image', 'robot-features' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'robot-features' )
			),
			'quote_content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'robot-features')
			)
		),
	)
);