<?php if (!defined('FW')) die('Forbidden');
/*
 * options.php - extra options shown after default options on add and edit slider page.
*/
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
		'desc'         => __( 'Choose yes if You want Full Width. If You choose yes, it will only appears on one column page.', 'robot-features' ),
	),
	'navigation' => array(
		'label' => __('Navigation', 'robot-features'),
		'type' => 'short-select',
		'value' => 'none',
		'desc' => __('Select navigation type for the slider.', 'robot-features'),
		'choices' => array(
			'none' => 'none',
			'bullet' => 'bullet',
			'arrow' => 'arrow',
			'both' => 'both',
		),
	),
	'effect' => array(
		'label' => __('Effect', 'robot-features'),
		'type' => 'short-select',
		'value' => 'fade',
		'desc' => __('Select the transition effect.', 'robot-features'),
		'choices' => array(
			'fade' => __('fade', 'robot-features'),
			'fold' => __('fold', 'robot-features'),
			'sliceDown' => __('sliceDown', 'robot-features'),
			'sliceDownLeft' => __('sliceDownLeft', 'robot-features'),
			'sliceUp' => __('sliceUp', 'robot-features'),
			'sliceUpLeft' => __('sliceUpLeft', 'robot-features'),
			'sliceUpDown' => __('sliceUpDown', 'robot-features'),
			'sliceUpDownLeft' => __('sliceUpDownLeft', 'robot-features'),
			'random' => __('random', 'robot-features'),
		),
	),
	'delay'   => array(
		'label' => __( 'Delay', 'robot-features' ),
		'desc'  => __( 'The delay for autoplay in milisec. (default: 8000)', 'robot-features' ),
		'type'  => 'text',
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