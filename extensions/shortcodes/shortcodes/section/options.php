<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'fullwidth'                    => array(
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
		'desc'         => __( 'Set if You want Full Width. Only suggested on one column page.', 'robot-features' ),
	),
	'padding' => array(
		'label' => __( 'Padding', 'robot-features' ),
		'type'  => 'slider',
		'value' => 0,
		'desc'  => __( 'Add the size of the padding at the bottom and the top. (px)', 'robot-features' ),
	),
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Background Image', 'robot-features' ),
		'desc'  => __( 'Add the link of Your image.', 'robot-features' )
	),
	'image_position'   => array(
		'type'  => 'select',
		'label' => __( 'Image Position', 'robot-features' ),
		'desc'  => __( 'The position of the image.', 'robot-features' ),
		'value' => 'background',
		'choices' => array(
			'background' => __('Background', 'robot-features'),
			'pattern' => __('Pattern', 'robot-features'),
			'left' => __('Left', 'robot-features'),
			'right' => __('Right', 'robot-features')
		),
	),
	'parallax'                    => array(
		'label'        => __( 'Parallax', 'robot-features' ),
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
		'desc'         => __( 'Set if You want parallax image.', 'robot-features' ),
	),
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Text Align', 'robot-features' ),
		'desc'  => __( 'Set the align.', 'robot-features' ),
		'value' => 'left',
		'choices' => array(
			'left' => __('left', 'robot-features'),
			'right' => __('right', 'robot-features'),
			'center' => __('center', 'robot-features'),
		),
	),
	'layer' => array(
		'label' => __( 'Layer Opacity', 'robot-features' ),
		'type'  => 'slider',
		'value' => 0,
		'desc'  => __( 'Add a number for the layer opacity (0-99).', 'robot-features' ),
	),
	'layer_color' => array(
		'label' => __('Layer Color', 'robot-features'),
		'desc'  => __('Select the color', 'robot-features'),
		'type'  => 'color-picker',
	),
	'background_color' => array(
		'label' => __('Background Color', 'robot-features'),
		'desc'  => __('Select the background color', 'robot-features'),
		'type'  => 'color-picker',
	),
	'color' => array(
		'label' => __('Font Color', 'robot-features'),
		'desc'  => __('Select the color', 'robot-features'),
		'type'  => 'color-picker',
	),
	'border_top'       => array(
		'type'  => 'text',
		'label' => __( 'Border Top', 'robot-features' ),
		'desc'  => __( 'Add custom css for border.', 'robot-features' )
	),
	'border_bottom'       => array(
		'type'  => 'text',
		'label' => __( 'Border Bottom', 'robot-features' ),
		'desc'  => __( 'Add custom css for border.', 'robot-features' )
	),
	'customclass'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Class', 'robot-features' ),
		'desc'  => __( 'Add custom class, if You need.', 'robot-features' )
	),
	'container'                    => array(
		'label'        => __( 'Container', 'robot-features' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'robot-features' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'robot-features' )
		),
		'value'        => 'yes',
		'desc'         => __( 'If You don`t need container for the content, switch it off.', 'robot-features' ),
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
