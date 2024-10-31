<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post categories

$post_categories = array();
$category_terms = get_categories();
foreach ( $category_terms as $category_term ) {
$post_categories[$category_term->slug] = $category_term->slug;}
$category_tags_tmp = array_unshift($post_categories, "All");

$options = array(
	'fullwidth'	=> array(
		'label'        => __( 'Full Width', 'robot-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'robot-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'robot-features' )
		),
		'value'        => 'no',
		'desc'         => __( 'Choose yes if You want Full Width. Only works on one column page.', 'robot-features' ),
	),
	'category' => array(
		'type' => 'select',
		'label' => __('Category', 'robot-features'),
		'value'	  => '1',
		'desc' => __('Select a category or leave it blank for all posts.', 'robot-features'),
		'choices' => $post_categories
	),
	'column'  => array(
		'label'   => __( 'Columns', 'robot-features' ),
		'desc'    => __( 'Number of columns on big screens.', 'robot-features' ),
		'type'    => 'select',
		'value'	  => '3',
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4'
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