<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Theme Settings
if ( function_exists( 'fw_get_db_customizer_option') ) {
    $rbt_breadcrumbs_layout = fw_get_db_customizer_option( 'rbt_breadcrumbs_layout');
} 
?>

<?php if ( ! empty( $items ) ) : ?>
<!-- ROBOT BREADCRUMB -->   
<div id="rbt-breadcrumbs" class="rbt-brc-layout-<?php echo esc_attr($rbt_breadcrumbs_layout) ; ?>" style="background-image: url('<?php robot_breadcrumbs_background_display(); ?>');">
    <div class="container">
		<?php for ( $i = 0; $i < count( $items ); $i ++ ) : ?>
			<?php if ( $i == ( count( $items ) - 1 ) ) : ?>
				<span class="last-item"><?php echo $items[ $i ]['name'] ?></span>
                <div class="rbt-breadcrumbs-page"><span class="last-item"><?php echo $items[ $i ]['name'] ; ?></span></div>
			<?php elseif ( $i == 0 ) : ?>
				<span class="first-item">
				<?php if( isset( $items[ $i ]['url'] ) ) : ?>
					<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
				<?php else : echo $items[ $i ]['name']; endif ?>
				<span><?php echo $separator ?></span>
			<?php
			else : ?>
				<span class="<?php echo( $i - 1 ) ?>-item">
					<?php if( isset( $items[ $i ]['url'] ) ) : ?>
						<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
					<?php else : echo $items[ $i ]['name']; endif ?>
				<span><?php echo $separator ?></span>
			<?php endif ?>
		<?php endfor ?>
	</div>
</div>
<!-- END ROBOT BREADCRUMB --> 
<?php endif ?>