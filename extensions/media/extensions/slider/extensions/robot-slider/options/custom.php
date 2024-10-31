<?php if (!defined('FW')) die('Forbidden');
/*
 * options.php - extra options shown after default options on add and edit slider page.
*/
					
$options = array(
	'rbt_ta' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Text Area', 'robot-features'),
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
				'rbt_ta_align' => array(
					'label' => __('Align', 'robot-features'),
					'type' => 'switch',
					'right-choice' => array(
						'value' => 'right',
						'label' => __('Right', 'robot-features')
					),
					'left-choice' => array(
						'value' => 'left',
						'label' => __('Left', 'robot-features')
					),
					'value' => 'left',
				),
				'rbt_ta_pos_top' => array(
					'label' => __('Position from the top', 'robot-features'),
					'type' => 'text',
					'value' => '25%'
				),
				'rbt_ta_pos_side' => array(
					'label' => __('Position from the side edge', 'robot-features'),
					'type' => 'text',
					'value' => '1%'
				),
				'rbt_ta_subtitle' => array(
					'label' => __('Subtitle', 'robot-features'),
					'type' => 'text',
					'value' => ''
				),
				'rbt_ta_text' => array(
					'label' => __('Text', 'robot-features'),
					'type' => 'textarea',
					'value' => ''
				),
				'rbt_ta_button_1' => array(
					'label' => __('Button 1 Text', 'robot-features'),
					'type' => 'text',
					'value' => ''
				),
				'rbt_ta_b1_url' => array(
					'label' => __('Button 1 URL', 'robot-features'),
					'type' => 'text',
					'value' => ''
				),
				'rbt_ta_button_2' => array(
					'label' => __('Button 2 Text', 'robot-features'),
					'type' => 'text',
					'value' => ''
				),
				'rbt_ta_b2_url' => array(
					'label' => __('Button 2 URL', 'robot-features'),
					'type' => 'text',
					'value' => ''
				),
			),

		),
		'show_borders' => false,
	),
	'rbt_pis' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Parallax Image', 'robot-features' ),
		'popup-title'   => __( 'Parallax Image options.', 'robot-features' ),
		'desc'          => __( 'Add parallax images to Your slide.', 'robot-features' ),
		'popup-options' => array(
			'rbt_pi_image' => array(
				'label' => __('Image', 'robot-features'),
				'desc' => __('Upload the parallax image.', 'robot-features'),
				'type' => 'upload',
			),
			'rbt_pi_top' => array(
				'label' => __('Position Top', 'robot-features'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'robot-features'),
			),
			'rbt_pi_right' => array(
				'label' => __('Position Right', 'robot-features'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'robot-features'),
			),
			'rbt_pi_bottom' => array(
				'label' => __('Position Bottom', 'robot-features'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'robot-features'),
			),
			'rbt_pi_left' => array(
				'label' => __('Position Left', 'robot-features'),
				'type' => 'text',
				'value' => '',
				'desc' => __('Add a css value or leave it blank.', 'robot-features'),
			),
			'rbt_pi_name' => array(
				'label' => __('Name of the image', 'robot-features'),
				'type' => 'text',
				'value' => '',
			),
		),
	),
);