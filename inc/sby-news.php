<?php
// create shortcode to list all SBY News
add_shortcode( 'sby-news', 'sby_news_shortcode' );
function sby_news_shortcode( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'order' => 'DESC',
        'orderby' => 'publish_date',
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="sby-news-listing">
	        <ul>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		            <div class="post-time"><a href="#"><?php echo get_the_time('l, jS F Y G:i'); ?></a></div>
	                <div class="post-title"><a href="#"><?php the_title();?></a></div>
	                <div class="post-excerpt"><?php the_excerpt()?></div>
				</li>
            <?php endwhile;?>
	        </ul>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}

?>