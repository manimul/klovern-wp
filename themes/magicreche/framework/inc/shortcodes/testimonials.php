<?php

/* Testimonials
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_testimonials( $atts, $content = null) {

    extract( shortcode_atts( array(
        'layout'  => 'carousel',
        'columns' => 4,
        'show_only_ids' => '',
        'random' => 'no'
    ), $atts ) );

    if( $random == 'yes' ) {
	    $orderby = 'rand';
    } else {
	    $orderby = 'date';
    }

    if( !empty($show_only_ids) ) {
    	$show_only_ids = explode(",", $show_only_ids);
		$args = array(
			'post_type'      => 'review',
			'posts_per_page' => 100,
		    'post__in'       => $show_only_ids,
		    'orderby'        => $orderby
	    );
    } else {
		$args = array(
			'post_type'      => 'review',
			'posts_per_page' => 100,
		    'orderby'        => $orderby
	    );
    }

    query_posts($args);

	if( have_posts() ) :

		if( $layout == 'carousel' ) {
			$return = '<div class="owl-carousel review-carousel autoHeight" data-visible="' . $columns . '">';
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
				$return .= '<div class="item review-item">';
			} else {
				$return .= '<div class="review-item ' . $width . '">';
			}

				$post_id = get_the_ID();

				$review = get_post_meta( $post_id, 'magicreche_review', true );
				$name = get_post_meta( $post_id, 'magicreche_review_author', true );

				$return .= '<blockquote>' . $review;
				if ( !empty($name) ) $return .= '<small>' . $name . '</small>';
				$return .= '</blockquote>';

			if( $layout == 'carousel' ) $return .= '</div>';
			$return .= '</div>';
			
		endwhile;

		$return .= '</div>';
	
	endif;

	wp_reset_query();

    return $return;
}