<?php if (!defined('FW')) die( 'Forbidden' ); 

$button_class = '';	

if ( $atts['color'] != 'inverse' && $atts['color'] != 'custom' && $atts['color'] != 'bw' ) $atts['color'] = 'basic';

$atts['size'] = trim($atts['size']);
if ( $atts['size'] == '' ) $atts['size'] = 'normal';	

	/* icon */
$atts['icon_position'] = trim($atts['icon_position']);
if ( $atts['icon_position'] != 'left' && $atts['icon_position'] != 'right') $atts['icon_position'] = 'none';		
$atts['icon'] = trim($atts['icon']);
if ( $atts['icon'] != '' && $atts['icon'] != 'fa fa-1-no-icon') {
	$ic = '<i class="'.$atts['icon'].' '.$atts['icon_position'].'-icon"></i>';
	$button_class .= ' has_icon';
} else $ic = '';

	/* link */
$atts['link'] = trim($atts['link']);
if ( $atts['link'] ) {
	if ( trim($atts['target']) == '_blank' ) $atts['target'] = '_blank'; else $atts['target'] = '_self';
	$atts['target'] = ' target="'.$atts['target'].'"';
	$href = ' href='.esc_url($atts['link']).'';
} else {
	$atts['target'] = '';
	$href = '';
}

	/* content */
if ( !trim($atts['content']) ) $button_class .= ' rbt-btn-no-content';
?>	
<a class="rbt-btn rbt-btn-<?php echo esc_attr($atts['color']) ?> <?php echo esc_attr($button_class) ?> rbt-btn-<?php echo esc_attr($atts['size']) ?>" <?php echo esc_attr($href) ?> <?php echo $atts['target'] ?><?php if ( ($atts['color'] == 'custom') || ( $atts['border_radius'] != '' )) { ?> style=" <?php if ( $atts['color'] == 'custom' ) { ?>background-color: <?php echo esc_attr($atts['custom_color']) ?>;<?php } ?><?php if ( $atts['border_radius'] != '' ) { ?> border-radius: <?php echo esc_attr($atts['border_radius']) ?>;<?php } ?>"<?php } ?>>
	<div class="rbt-btn-overlay"></div>
<?php if ( $atts['icon_position'] == 'left') { ?><div class="rbt-btn-content" <?php if ( $atts['custom_font_color'] != '' ) { ?> style="color: <?php echo esc_attr($atts['custom_font_color']) ?>;"<?php } ?>><?php echo $ic; echo esc_html($atts['content']); ?></div><?php }
elseif ( $atts['icon_position'] == 'right') { ?><div class="rbt-btn-content" <?php if ( $atts['custom_font_color'] != '' ) { ?> style="color: <?php echo esc_attr($atts['custom_font_color']) ?>;"<?php } ?>><?php echo esc_html($atts['content']); echo $ic ; ?></div> <?php } else {?><div class="rbt-btn-content" <?php if ( $atts['custom_font_color'] != '' ) { ?> style="color: <?php echo esc_attr($atts['custom_font_color']) ?>;"<?php } ?>><?php echo esc_html($atts['content']) ?></div><?php } ?>
</a>