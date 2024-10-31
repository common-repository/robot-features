<?php if (!defined('FW')) die( 'Forbidden' );

$atts['category'] = trim($atts['category']);
if ($atts['number'] == '') $atts['number'] = 1000;
if ($atts['only_posts']['on_off'] == 'off') $atts['only_posts']['on']['posts'] = '';

$blog_template = array(
    'category_name' => '' . sanitize_title($atts['category']) . '',
	'orderby' => '' . esc_attr($atts['order_by']) . '',
    'order'    => '' . esc_attr($atts['order']) . '',
	'posts_per_page'	=>	'' . esc_attr($atts['number']) . '',
	'post__in' => $atts['only_posts']['on']['posts']
);

query_posts($blog_template);


?>
<div id="rbt-blog-normal-content">
	<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
    <?php 
	$post_id = get_the_ID();
	$post_format = get_post_format();
	$excerpt = get_the_excerpt();
	if ( function_exists( 'fw_get_db_post_option') ) {  
		$rbt_gallery_format = fw_get_db_post_option( $post_id, 'rbt_gallery_format' ) ;
		$rbt_video_format = fw_get_db_post_option( $post_id, 'rbt_video_format' ) ;
		$rbt_audio_format = fw_get_db_post_option( $post_id, 'rbt_audio_format' ) ;	
		$rbt_quote_format = fw_get_db_post_option( $post_id, 'rbt_quote_format' ) ;
		$rbt_quote_format_author = fw_get_db_post_option( $post_id, 'rbt_quote_format_author' ) ;
		$rbt_link_format = fw_get_db_post_option( $post_id, 'rbt_link_format' ) ;	
		$unique_excerpt = fw_get_db_post_option( $post_id, 'rbt_post_excerpt' ) ;
		if ($unique_excerpt != '') $excerpt = $unique_excerpt;
	}
	?> 
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="rbt-article-container">
			<?php if ($post_format == 'quote') { ?>
            <div class="entry-content">
                <div class="rbt-blockquote-2-holder">
                    <div class="rbt-blockquote-2">
                        <?php if( !empty ($rbt_quote_format)){ ?>
                        <div class="rbt-blockquote-2-content"><?php echo $rbt_quote_format; ?></div>
                        <?php } ?>
                        <?php if( !empty ($rbt_quote_format_author)){ ?>
                        <h3 class="rbt-blockquote-2-author"><?php echo $rbt_quote_format_author; ?></h3>
                        <?php } ?>
                        <div class="clear"></div>
                    </div>
                </div>	
            </div>
            <div class="clearfix"></div>
            <?php } else { ?>
            <div class="blog-entry">
                <div class="entry-image">
                	<?php if (($post_format == 'audio') && (!empty ($rbt_audio_format))) { ?>
                    	<div class="iframe-holder"><?php echo $rbt_audio_format; ?></div>
                    <?php } elseif (($post_format == 'video') && (!empty ($rbt_video_format))) { ?>
                    	<div class="iframe-holder"><?php echo $rbt_video_format; ?></div>
                    <?php } elseif (($post_format == 'gallery') && (!empty ($rbt_gallery_format))) { ?>
                    	<div class="postimg">
                            <div id="postgallery-<?php echo get_the_ID() ; ?>" class="flexslider">
                                <ul class="slides">
                                    <?php foreach ( $rbt_gallery_format as $attachment):  ?>
                                    <li class="slide">
                                        <div class="rbt-spih">
                                            <div class="single-post-image" style="background-image: url(<?php echo esc_url ( $attachment['url'] );?>)"></div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?> 
                                </ul>
                            </div>
                        </div>
                    <?php } else { ?>
					<div class="rbt-spih">
                    	<?php the_post_thumbnail( 'robot-entry-image' ) ; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="rbt-entry-texts">
                    <div class="rbt-psth">
                        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'robot-features' ), the_title_attribute( 'echo=0' ) ); ?>"><h3 class="rbt-post-single-title"><?php echo the_title(); ?></h3></a>
                        <p class="rbt-ps-categories"><?php the_category(' '); ?></p>
                    </div>     
                    <div class="entry-content">
                            <p class="rbt-entry-excerpt"><?php echo wp_kses_post($excerpt); ?></p>
                            <div class="rbt-post-button-holder">
                        <a class="rbt-btn rbt-btn-basic" href="<?php if (($post_format == 'link') && (!empty ($rbt_link_format))) { echo esc_url($rbt_link_format); } else { the_permalink(); }?>">
                            <div class="rbt-btn-overlay"></div>
                            <div class="rbt-btn-content"><?php robot_read_more_text(); ?></div>
                        </a>
                        	</div>
                    </div>
                    <div class="rbt-entry-infos">
                        <div class="rbt-entry-utility">
                        	<?php if( (isset($atts['infos']['date'])) || (isset($atts['infos']['author'])) || (isset($atts['infos']['categories'])) || (isset($atts['infos']['comments'])) ){ ?>
                        	<div class="rbt-post-infos">
								<?php if(isset($atts['infos']['date'])){ ?>
                                <div class="date"><i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['author'])){ ?>
                                <div class="user"> <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author();?></a></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['categories'])){ ?>
                                <div class="category"> <i class="fa fa-folder"></i> <?php the_category(', '); ?></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['comments'])){ ?>
                                <div class="comment"> <i class="fa fa-comment"></i> 
                                    <?php 
                                      comments_popup_link( 
                                      __( 'No Comments', 'robot-features' ), 
                                      __( '1 Comment', 'robot-features' ), 
                                      __( '% Comments', 'robot-features' ),
                                      __( 'Comments Closed', 'robot-features' )
                                      );
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(isset($atts['infos']['tags'])){ ?>
                        <div class="rbt-entry-tag">
							<?php
                            $posttags = get_the_tags();
                            if($posttags){
                            ?>
                            <span class="rbt-tag-text"><?php _e('Tags:','robot-features'); ?></span>
                            <?php 
                            the_tags('<div class="rbt-tag-items"><span>','</span><span>','</span></div>'); 
                            } 
                            ?>
                        </div>
                        <?php } ?>
                    </div>    
            	</div>
            </div>
            <div class="clearfix"></div>
            <?php } ?>
        </div>
	</article>
	<?php endwhile; // End the loop. Whew. ?>
    
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>