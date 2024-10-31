<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_style('fw-ext-builder-frontend-grid');

$options = array(
	'left' => array(
		'label' => __( 'Padding left', 'robot-features' ),
		'type'  => 'slider',
		'value' => 15,
		'desc'  => __( 'Padding left (px).', 'robot-features' ),
	),
	'right' => array(
		'label' => __( 'Padding right', 'robot-features' ),
		'type'  => 'slider',
		'value' => 15,
		'desc'  => __( 'Padding right (px).', 'robot-features' ),
	),
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Text Align', 'robot-features' ),
		'desc'  => __( 'Set the align.', 'robot-features' ),
		'value' => '',
		'choices' => array(
			'' => '',
			'left' => __('left', 'robot-features'),
			'right' => __('right', 'robot-features'),
			'center' => __('center', 'robot-features'),
		),
	),
	'background'              => array(
		'label' => __( 'Background Color', 'robot-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a background color, if You need.', 'robot-features' ),
	),
	'background_image' => array(
		'label' => __('Background Image', 'robot-features'),
		'desc' => __('Upload an image for the background.', 'robot-features'),
		'type' => 'upload',
	),
	'image_size' => array(
		'label' => __('Background Image Size', 'robot-features'),
		'type' => 'short-select',
		'value' => 'cover',
		'choices' => array(
			'inherit' => 'inherit',
			'cover' => 'cover',
			'contain' => 'contain',
		),
	),
	'image_repeat' => array(
		'label' => __('Background Image Repeat', 'robot-features'),
		'type' => 'short-select',
		'value' => 'no-repeat',
		'choices' => array(
			'no-repeat' => 'no-repeat',
			'repeat' => 'repeat',
			'repeat-x' => 'repeat-x',
			'repeat-y' => 'repeat-y',
		),
	),
	'border'       => array(
		'type'  => 'text',
		'label' => __( 'Border', 'robot-features' ),
		'value' => '',
		'desc'  => __( 'You can add border css here.', 'robot-features' )
	),
	'max_width'       => array(
		'type'  => 'text',
		'label' => __( 'Content Max Width', 'robot-features' ),
		'value' => '',
		'desc'  => __( 'Add max-width css for the content, if You don`t want to fill the whole column.', 'robot-features' )
	),
	'content_position' => array(
		'label' => __('Content Position', 'robot-features'),
		'type' => 'short-select',
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'robot-features'),
			'left' => __('left', 'robot-features'),
			'right' => __('right', 'robot-features'),
		),
		'desc'  => __( 'The position of the content. (Only if max-width value added.)', 'robot-features' )
	),
	'customclass'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Class', 'robot-features' ),
		'desc'  => __( 'Add custom class, if You need.', 'robot-features' )
	),
	'responsive_behaviour_text'                      => array(
		'label' => __( 'Responsive Behaviour', 'robot-features' ),
		'type'  => 'html',
		'value' => '',
		'html'  => '',
	),
	'hide_on_desktop'                    => array(
		'label'        => __( 'Hide on Desktop', 'robot-features' ),
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
		'desc'         => __( 'Hide if media screen is above 1199px.', 'robot-features' ),
	),
	'hide_on_smaller'                    => array(
		'label'        => __( 'Hide on Smaller Screen', 'robot-features' ),
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
		'desc'         => __( 'Hide if media screen is between 1199px and 992px.', 'robot-features' ),
	),
	'width_on_smaller'                    => array(
		'label'        => __( '1/1 Width on Smaller Screen', 'robot-features' ),
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
		'desc'         => __( '100% width if media screen is between 1199px and 992px.', 'robot-features' ),
	),
	'hide_on_tablet'                    => array(
		'label'        => __( 'Hide on Tablet', 'robot-features' ),
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
		'desc'         => __( 'Hide if media screen is between 991px and 768px.', 'robot-features' ),
	),
	'width_on_tablet'                    => array(
		'label'        => __( '1/1 Width on Tablet', 'robot-features' ),
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
		'desc'         => __( '100% width if media screen is between 991px and 768px.', 'robot-features' ),
	),
	'hide_on_mobile'                    => array(
		'label'        => __( 'Hide on Mobile', 'robot-features' ),
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
		'desc'         => __( 'Hide if media screen is under 767px.', 'robot-features' ),
	),
);