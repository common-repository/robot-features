<?php if (!defined('FW')) die( 'Forbidden' ); 

$rbt_s_cta_padding = '';
$rbt_s_cta_line = fw_get_db_customizer_option( 'rbt_s_cta_line');
$rbt_s_cta_img_an = fw_get_db_customizer_option( 'rbt_s_cta_img_an');
$rbt_s_cta_colors = fw_get_db_customizer_option( 'rbt_s_cta_colors/on_off');

if ($atts['rbt_s_cta_unique']['on_off'] == 'on') {
	$rbt_s_cta_padding = ' style=padding:'.$atts['rbt_s_cta_unique']['on']['rbt_s_cta_padding'].' !important;';
	$rbt_s_cta_line = $atts['rbt_s_cta_unique']['on']['rbt_s_cta_line'];
	$rbt_s_cta_img_an = $atts['rbt_s_cta_unique']['on']['rbt_s_cta_img_an'];
}

$atts['title'] = trim($atts['title']);
		
$postmiracle_2 = array(
	'posts_per_page' => 1,
	'name' => '' . sanitize_title($atts['title']) . '');

$postmiracle_2 = new WP_Query( $postmiracle_2 ); 
while ($postmiracle_2->have_posts()) : $postmiracle_2->the_post(); 

$permalink = get_permalink();
$title = get_the_title() ;
$excerpt = substr(get_the_excerpt(), 0,150);
$post_id = get_the_ID();
$unique_excerpt = fw_get_db_post_option( $post_id, 'rbt_post_excerpt' ) ;
if ($unique_excerpt != '') $excerpt = substr($unique_excerpt, 0,150);
$taglist = get_the_tag_list( '<span class="tag-list">', '</span><span class="tag-list"> ', '</span>' ) ;
$month = get_the_time('M') ;
$day = get_the_time('d') ;
$tag = get_the_tags();
$image = '';
if (has_post_thumbnail( $postmiracle_2->ID ) ){
$image = get_post_thumbnail_id($postmiracle_2->ID);
$image = wp_get_attachment_image_src($image,'medium');
$image = $image[0];
}
?>
<div class="rbt-post-sc rbt-post-sc-single rbt-cta-col rbt-cta-col-<?php echo esc_attr($rbt_s_cta_line); ?>-line rbt-cta-col-<?php echo esc_attr($rbt_s_cta_img_an); ?>-img-an<?php if ($rbt_s_cta_colors == 'on') { ?> rbt-cta-colors<?php } ?>"<?php echo esc_attr($rbt_s_cta_padding); ?>>
    <div class="rbt-post-1-content rbt-cta-content">
    	<div class="rbt-cta-content-bg"<?php if (has_post_thumbnail( $postmiracle_2->ID ) ){ ?> style="background-image: url(<?php echo esc_url($image); ?>);"<?php } ?>></div>
        <div class="rbt-cta-layer"></div>
        <div class="rbt-cta-layer-2"></div>
        <div class="rbt-cta-cover">
            <div class="rbt-post-1-date">
                <div class="rbt-post-date-ch">
                    <div class="rbt-post-date-c">
                        <h4><?php echo esc_html($day); ?></h4>
                        <h4><?php echo esc_html($month); ?></h4>
                    </div>
                </div>
            </div>
            <div class="rbt-post-1-title">
                <h2><?php echo esc_html($title); ?></h2>
            </div>
        </div>
        <div class="rbt-cta-hover">
			<div class="rbt-cta-hover-content">
                <h3><?php echo wp_kses_post($taglist); ?></h3>
                <p><?php echo wp_kses_post($excerpt); ?>...</p>
                <a href="<?php echo esc_url($permalink); ?>" title="<?php echo esc_html($title); ?>">
                    <h4 class="rbt-post-1-more"><?php robot_read_more_text(); ?></h4>
                </a>
            </div>
        </div>
    </div>
</div>
<?php 							  
endwhile;
wp_reset_query(); ?>