<?php if (!defined('FW')) die('Forbidden');

$fullwidth_slider = 'allow';
$post_id = get_the_ID();  
if ( function_exists( 'fw_get_db_post_option') ) {
	$rbt_basic_post_layer_select = fw_get_db_post_option( $post_id, 'rbt_basic_post_layer_select' ) ;
}
if ( function_exists( 'fw_get_db_customizer_option') ) {
	$rbt_basic_layer_select = fw_get_db_customizer_option( 'rbt_basic_layer_select');
}

if ($rbt_basic_post_layer_select == '2-col-l' || $rbt_basic_post_layer_select == '2-col-r') {
	$fullwidth_slider = 'disable';
} elseif ($rbt_basic_layer_select == '2-col-l' || $rbt_basic_layer_select == '2-col-r') {
	$fullwidth_slider = 'disable';
}

if ($data['settings']['extra']['delay'] == '' ) { 
	$data['settings']['extra']['delay'] = '8000';
}

if (!($data['settings']['extra']['fullwidth'] == 'yes' && $fullwidth_slider == 'disable')) :

$random_slider_number = rand(1000,9999);
$rbt_blank_uri = ROBOT_PLUGIN_URL . '/extensions/media/extensions/slider/extensions/robot-slider/static/images/blank.png';
?>

<?php if (isset($data['slides'])): ?>
	<!--Slider-->
	<section id="rbt-slider-section" class="wrap-nivoslider theme-default robot-custom-slider rbt-snav-<?php echo esc_attr($data['settings']['extra']['navigation']); ?><?php if ($data['settings']['extra']['fullwidth'] == 'yes') { ?> robot-fullwidth-slider<?php } ?><?php if ( $data['settings']['extra']['hide_on_desktop'] == 'yes' ) { ?> rbt-hide-on-desktop<?php } if ( $data['settings']['extra']['hide_on_smaller'] == 'yes' ) { ?> rbt-hide-on-smaller<?php } if ( $data['settings']['extra']['hide_on_tablet'] == 'yes' ) { ?> rbt-hide-on-tablet<?php } if ( $data['settings']['extra']['hide_on_mobile'] == 'yes' ) { ?> rbt-hide-on-mobile<?php } ?>" style="display: none;">
    	<div class="robot-slider-holder">
            <div class="nivoSlider nivoSlider-<?php echo esc_attr($random_slider_number) ; ?>">
                <?php foreach ($data['slides'] as $id => $slide): ?>
                <img  width="<?php echo esc_attr($dimensions['width']); ?>"
                      height="<?php echo esc_attr($dimensions['height']); ?>"
                      src="<?php echo esc_attr(fw_resize($slide['src'], $dimensions['width'], $dimensions['height'], true)); ?>"
                      alt="<?php echo esc_attr($slide['title']); ?>"
                      title="#nivo-<?php echo esc_attr($id); ?>" />
                <?php endforeach; ?>
            </div>
            <?php foreach ($data['slides'] as $id => $slide): ?>
            <div id="nivo-<?php echo esc_attr($id) ?>" class="nivo-html-caption">
                <div class="rbt-slider-caption-holder container">
                    <?php if($slide['extra']['rbt_ta']['on_off'] == 'on') { ?>
                    <div id="rbt-slider-tah" class="rbt-slider-ta-<?php echo esc_html($slide['extra']['rbt_ta']['on']['rbt_ta_align']) ?>"<?php if(($slide['extra']['rbt_ta']['on']['rbt_ta_pos_top'] != '') || ($slide['extra']['rbt_ta']['on']['rbt_ta_pos_side'] != '')) { ?> style="top:<?php echo esc_attr($slide['extra']['rbt_ta']['on']['rbt_ta_pos_top']) ?>; <?php if($slide['extra']['rbt_ta']['on']['rbt_ta_align'] != 'right') { ?>left:<?php echo esc_attr($slide['extra']['rbt_ta']['on']['rbt_ta_pos_side']) ?>;<?php } else { ?>right:<?php echo esc_attr($slide['extra']['rbt_ta']['on']['rbt_ta_pos_side']) ?>;<?php } ?>"<?php } ?>>
                    	<div id="rbt-slider-ta">
                        	<p class="rbt-sta-title"><?php echo wp_kses_post($slide['title']) ?></p>
                            <?php if($slide['extra']['rbt_ta']['on']['rbt_ta_subtitle'] != '') { ?><p class="rbt-sta-subtitle"><?php echo wp_kses_post($slide['extra']['rbt_ta']['on']['rbt_ta_subtitle']) ?></p><?php } ?>
                            <?php if($slide['extra']['rbt_ta']['on']['rbt_ta_text'] != '') { ?><p class="rbt-sta-text"><?php echo wp_kses_post($slide['extra']['rbt_ta']['on']['rbt_ta_text']) ?></p><?php } ?>
                            <?php if(($slide['extra']['rbt_ta']['on']['rbt_ta_button_1'] != '') || ($slide['extra']['rbt_ta']['on']['rbt_ta_button_2'] != '')) { ?>
                            <div class="rbt-sta-buttons">
                            	<?php if($slide['extra']['rbt_ta']['on']['rbt_ta_button_1'] != '') { ?>
                                <a href="<?php echo esc_url($slide['extra']['rbt_ta']['on']['rbt_ta_b1_url']) ?>">
                            	<div class="rbt-sta-button-1">
                                	<?php echo wp_kses_post($slide['extra']['rbt_ta']['on']['rbt_ta_button_1']) ?>
                                </div>
                                </a>
                                <?php } ?>
                                <?php if($slide['extra']['rbt_ta']['on']['rbt_ta_button_2'] != '') { ?>
                                <a href="<?php echo esc_url($slide['extra']['rbt_ta']['on']['rbt_ta_b2_url']) ?>">
                                <div class="rbt-sta-button-2">
                                	<?php echo wp_kses_post($slide['extra']['rbt_ta']['on']['rbt_ta_button_2']) ?>
                                </div>
                                </a>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php $i = 0;
					foreach ($slide['extra']['rbt_pis'] as $key => $rbt_pis) : 
					$random_number = rand(1000,9999); ?>
                    <div id="rbt-slider-pi" class="rbt-slider-pi-<?php echo esc_attr($random_number); ?>-<?php echo esc_attr($i); ?>">
                    	<div id="rbt-slider-pi-img"<?php if(($rbt_pis['rbt_pi_top'] != '') || ($rbt_pis['rbt_pi_right'] != '') || ($rbt_pis['rbt_pi_bottom'] != '') || ($rbt_pis['rbt_pi_left'] != '')) { ?> style=" <?php if($rbt_pis['rbt_pi_top'] != '') { ?> top:<?php echo esc_attr($rbt_pis['rbt_pi_top']) ?>;<?php } ?><?php if($rbt_pis['rbt_pi_right'] != '') { ?> right:<?php echo esc_attr($rbt_pis['rbt_pi_right']) ?>;<?php } ?><?php if($rbt_pis['rbt_pi_bottom'] != '') { ?> bottom:<?php echo esc_attr($rbt_pis['rbt_pi_bottom']) ?>;<?php } ?><?php if($rbt_pis['rbt_pi_left'] != '') { ?> left:<?php echo esc_attr($rbt_pis['rbt_pi_left']) ?>;<?php } ?>"<?php } ?>>
                        	<div class="rbt-slider-pi-img-i">
                            	<div id="rbt-slider-pi-img-animation">
                    				<img src="<?php echo esc_url($rbt_pis['rbt_pi_image']['url']);?>" alt="<?php echo esc_attr($rbt_pis['rbt_pi_name']); ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
	</section>
    <script type="text/javascript"> 
		jQuery(function($) {
			$('.nivoSlider-<?php echo esc_attr($random_slider_number) ; ?>').nivoSlider({
				effect:'<?php echo esc_attr($data['settings']['extra']['effect']); ?>',
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				pauseTime: <?php echo esc_attr($data['settings']['extra']['delay']); ?>,
			});
		});
	</script>
	<!--/Slider-->
<?php endif; ?>
<?php endif; ?>