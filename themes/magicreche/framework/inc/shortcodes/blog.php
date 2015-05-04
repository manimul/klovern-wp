<?php

/* Blog
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_blog( $atts, $content = null) {

    extract( shortcode_atts( array(
        'layout'  => 'carousel',
        'posts_limit' => 3,
        'columns' => 3,
        'cat' => ''
    ), $atts ) );

	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => $posts_limit,
		'cat'            => $cat
    );

    query_posts($args);

	if( have_posts() ) :

		if( $layout == 'carousel' ) {
			$return = '<div class="owl-carousel blog-carousel autoHeight" data-visible="' . $columns . '">';
		} else {
			$return = '<div class="post-grid row">';

			switch ($columns) {
				case 1:
					$width = 'col-sm-12';
					break;

				case 2:
					$width = 'col-sm-6';
					break;

				case 3:
					$width = 'col-sm-4';
					break;
				
				default:
					$width = 'col-sm-3';
					break;
			}

		}

		while ( have_posts() ) : the_post();

			if( $layout == 'carousel' ) $return .= '<div>';

			if( $layout == 'carousel' ) {
				$return .= '<div class="item blog-item">';
			} else {
				$return .= '<div class="blog-item ' . $width . '">';
			}

				//$post_id = get_the_ID();

                ob_start();
               	get_template_part( 'content-shortcode' );
                $return .= ob_get_contents();
                ob_end_clean();
				

			if( $layout == 'carousel' ) $return .= '</div>';
			$return .= '</div>';
			
		endwhile;

		$return .= '</div>';
	
	endif;

	wp_reset_query();

    return $return;
}