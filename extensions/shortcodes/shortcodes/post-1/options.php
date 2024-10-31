<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post titles

$post_title = array();
$args=array('order'=>'ASC','posts_per_page'	=>	1000,);
$posts = get_posts( $args );
if ( $posts ) {
foreach ( $posts as $post ) {
   $post_title[$post->post_title] = $post->post_title;
}
}

$options = array(
	'title'		=> array(
		'label'   => __( 'Title', 'robot-features' ),
		'type'    => 'select',
		'desc'    => __( 'Select from the posts.', 'robot-features' ),
		'choices' => $post_title
	),
	'unique_design_text'                      => array(
		'label' => __( 'Unique Design', 'robot-features' ),
		'type'  => 'html',
		'value' => '',
		'html'  => '',
	),
	'rbt_s_cta_unique' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Unique Design', 'robot-features'),
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
				'desc' => __('Turn on or off.', 'robot-features'),
			)
		),
		'choices' => array(
			'on' => array(
				'rbt_s_cta_padding' => array(
					'type' => 'text',
					'label' => __('Item Padding', 'robot-features'),
					'desc' => __('Add the padding css for the items.', 'robot-features'),
					'value' => '10px',
				),
				'rbt_s_cta_line' => array(
					'label' => __('Line Animation', 'robot-features'),
					'type' => 'short-select',
					'value' => 'none',
					'choices' => array(
						'none' => __('None', 'robot-features'),
						'frame' => __('Frame', 'robot-features'),
					),
				),
				'rbt_s_cta_img_an' => array(
					'label' => __('Image Animation', 'robot-features'),
					'type' => 'short-select',
					'value' => 'none',
					'choices' => array(
						'none' => __('None', 'robot-features'),
						'zoom' => __('Zoom', 'robot-features'),
					),
				),
			),

		),
		'show_borders' => false,
	),	
);