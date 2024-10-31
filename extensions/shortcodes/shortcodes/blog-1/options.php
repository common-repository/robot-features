<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post categories

$post_categories = array();
$category_terms = get_categories();
foreach ( $category_terms as $category_term ) {
$post_categories[$category_term->slug] = $category_term->slug;}
$category_tags_tmp = array_unshift($post_categories, "All");

$single_posts = array();
$post_slugs_args = array(
	'posts_per_page'   => 1000,
);
$post_slugs = get_posts( $post_slugs_args );
foreach ( $post_slugs as $post_slug ) {
$single_posts[$post_slug->ID] = $post_slug->post_title;}

$options = array(
	'infos' => array(
		'type'  => 'checkboxes',
		'value' => array(
			'date' => true,
			'author' => true,
			'categories' => true,
			'comments' => true,
			'tags' => true,
		),
		'label' => __('Info Types', 'robot-features'),
		'desc'  => __('Select the info types for posts.', 'robot-features'),
		'choices' => array(
			'date' => __('Date', 'robot-features'),
			'author' => __('Author', 'robot-features'),
			'categories' => __('Categories', 'robot-features'),
			'comments' => __('Comments', 'robot-features'),
			'tags' => __('Tags', 'robot-features'),
		),
		'inline' => true,
	),
	'order_by' => array(
		'type' => 'select',
		'label' => __('Order By', 'robot-features'),
		'value'	  => 'date',
		'choices' => array(
			'date' => __('Date', 'robot-features'),
			'modified' => __('Modified', 'robot-features'),
			'ID' => __('ID', 'robot-features'),
			'author' => __('Author', 'robot-features'),
			'title' => __('Title', 'robot-features'),
			'rand' => __('Random', 'robot-features'),
			'comment_count' => __('Comment count', 'robot-features'),
		),
	),
	'order' => array(
		'type' => 'select',
		'label' => __('Sort Order', 'robot-features'),
		'value'	  => 'DESC',
		'choices' => array(
			'DESC' => __('Descending', 'robot-features'),
			'ASC' => __('Ascending', 'robot-features'),
		),
	),
	'number' => array(
		'label' => __('Number of Posts', 'robot-features'),
		'type' => 'text',
		'value' => '',
		'desc' => __('Add a number or leave it blank for all posts.', 'robot-features'),
	),
	'category' => array(
		'type' => 'select',
		'label' => __('Category', 'robot-features'),
		'value'	  => '1',
		'desc' => __('Select a category or leave it blank for all posts.', 'robot-features'),
		'choices' => $post_categories
	),
	'only_posts' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Select Posts', 'robot-features'),
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
				'desc' => __('Turn on, if You want to select the posts.', 'robot-features'),
			)
		),
		'choices' => array(
			'on' => array(
				'posts' => array(
					'type'  => 'select-multiple',
					'label' => __('Single Posts', 'robot-features'),
					'desc'  => __('Select the posts.', 'robot-features'),
					'choices' => $single_posts,
					'inline' => true,
				),
			),
		),
		'show_borders' => false,
	),
);