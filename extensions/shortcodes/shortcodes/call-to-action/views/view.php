<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 

$rbt_s_cta_padding = '';
$rbt_s_cta_line = fw_get_db_customizer_option( 'rbt_s_cta_line');
$rbt_s_cta_img_an = fw_get_db_customizer_option( 'rbt_s_cta_img_an');
$rbt_s_cta_colors = fw_get_db_customizer_option( 'rbt_s_cta_colors/on_off');

if ($atts['rbt_s_cta_unique']['on_off'] == 'on') {
	$rbt_s_cta_padding = ' style=padding:'.$atts['rbt_s_cta_unique']['on']['rbt_s_cta_padding'].' !important;';
	$rbt_s_cta_line = $atts['rbt_s_cta_unique']['on']['rbt_s_cta_line'];
	$rbt_s_cta_img_an = $atts['rbt_s_cta_unique']['on']['rbt_s_cta_img_an'];
}

$atts['column'] = trim($atts['column']);
if ( $atts['column'] != '1'  && $atts['column'] != '2' && $atts['column'] != '4' ) $atts['column'] = '3';
$lesscolumn = $atts['column'];
if ( $atts['column']==4 ) $lesscolumn = 3;

$random_cta_number = rand(1000,9999);

$fullwidth = $atts['fullwidth'];
$post_id = get_the_ID();  
$rbt_basic_post_layer_select = fw_get_db_post_option( $post_id, 'rbt_basic_post_layer_select' ) ;
$rbt_basic_layer_select = fw_get_db_customizer_option( 'rbt_basic_layer_select');

if ($rbt_basic_post_layer_select == '2-col-l' || $rbt_basic_post_layer_select == '2-col-r') {
	$fullwidth = 'no';
} elseif ($rbt_basic_layer_select == '2-col-l' || $rbt_basic_layer_select == '2-col-r') {
	$fullwidth = 'no';
}

?>
<div class="rbt-cta-h<?php if ( $fullwidth == 'yes') { ?> rbt-fullwidth-h<?php } ?>">
    <div id="rbt-cta" class="owl-carousel carousel owl row rbt-cta-<?php echo esc_attr($random_cta_number); ?> rbt-owl-pagination-<?php echo esc_attr($atts['pagination']); ?> rbt-owl-navigation-<?php echo esc_attr($atts['navigation']); ?><?php if ( $fullwidth == 'yes') { ?> rbt-fullwidth<?php } ?>">
    <?php foreach ($atts['cta'] as $key => $cta) : ?>
		<div class="rbt-cta-col rbt-cta-col-<?php echo esc_attr($rbt_s_cta_line); ?>-line rbt-cta-col-<?php echo esc_attr($rbt_s_cta_img_an); ?>-img-an<?php if ($rbt_s_cta_colors == 'on') { ?> rbt-cta-colors<?php } ?>"<?php echo esc_attr($rbt_s_cta_padding); ?>>
        	<?php if (!empty($cta['link'])): ?>
        	<a href="<?php echo esc_url($cta['link']); ?>">
            <?php endif; ?>
                <div class="rbt-cta-content">
                	<div class="rbt-cta-content-bg"<?php if ($cta['img'] != '') { ?> style="background-image: url(<?php echo esc_url($cta['img']['url']); ?>);"<?php } ?>></div>
                    <div class="rbt-cta-layer"></div>
                    <div class="rbt-cta-layer-2"></div>
                    <div class="rbt-cta-cover">
                        <i class="<?php echo esc_attr($cta['icon']); ?>"></i>
                        <h2><?php echo esc_html($cta['name']); ?></h2>
                    </div>
                    <div class="rbt-cta-hover">
                            <h3><?php echo esc_html($cta['head']); ?></h3>
                            <p><?php echo esc_html($cta['desc']); ?></p>
                            <?php if (!empty($cta['link'])): ?>
                            <h4 class="rbt-cta-more"><?php robot_read_more_text(); ?></h4>
                            <?php endif; ?>
                    </div>
                </div>
            <?php if (!empty($cta['link'])): ?>
            </a>
            <?php endif; ?>
        </div>
	<?php endforeach; ?>
    </div>
    <div class="clearfix"></div>
</div>
<script type="text/javascript"> 
	jQuery(document).ready(function($){
		$(document).ready(function() {
	
		  var owl = $(".rbt-cta-<?php echo esc_attr($random_cta_number); ?>");
	
		  owl.owlCarousel({
			  
		  navigation : true, // Show next and prev buttons
		  navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		  pagination : true,
	 
		  items : <?php echo esc_attr($atts['column']); ?>, 
		  itemsDesktop : [5000,<?php echo esc_attr($atts['column']); ?>], 
		  itemsDesktop : [1170,<?php echo esc_attr($lesscolumn); ?>],
		  itemsDesktopSmall : [900,<?php echo esc_attr($lesscolumn); ?>], 
		  itemsTablet: [767,1], 
		  itemsMobile : [400,1],
		  <?php if ( $atts['delay'] != 'false' && $atts['delay'] != '') { ?> 			  
		  autoPlay : <?php echo esc_attr($atts['delay']); ?>000,
		  <?php } else { ?>
		  autoPlay : false,
		  <?php } ?>		
		  });
		});
	 });
</script>