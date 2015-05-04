<?php

/* Staff
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_staff( $atts, $content = null) {

    extract( shortcode_atts( array(
        'layout'  => 'carousel',
        'columns' => 4,
        'show_only_ids' => ''
    ), $atts ) );

    if( !empty($show_only_ids) ) {
    	$show_only_ids = explode(",", $show_only_ids);
		$args = array(
			'post_type'      => 'staff',
			'posts_per_page' => 100,
		    'post__in'       => $show_only_ids
	    );
    } else {
		$args = array(
			'post_type'      => 'staff',
			'posts_per_page' => 100
	    );
    }

    query_posts($args);

	if( have_posts() ) :

		if( $layout == 'carousel' ) {
			$return = '<div class="owl-carousel staff-carousel" data-visible="' . $columns . '">';
		} else {
			$return = '<div class="post-grid row">';

			switch ($columns) {
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
				$return .= '<div class="item staff-item">';
			} else {
				$return .= '<div class="staff-item ' . $width . '">';
			}

				$post_id = get_the_ID();

				$name = get_post_meta( $post_id, 'magicreche_staff_name', true );
				$position = get_post_meta( $post_id, 'magicreche_staff_position', true );
				$facebook = get_post_meta( $post_id, 'magicreche_staff_facebook', true );
				$twitter = get_post_meta( $post_id, 'magicreche_staff_twitter', true );
				$google = get_post_meta( $post_id, 'magicreche_staff_google', true );
				$linkedin = get_post_meta( $post_id, 'magicreche_staff_linkedin', true );
				$flickr = get_post_meta( $post_id, 'magicreche_staff_flickr', true );
				$pinterest = get_post_meta( $post_id, 'magicreche_staff_pinterest', true );
				$instagram = get_post_meta( $post_id, 'magicreche_staff_instargam', true );
				$vimeo = get_post_meta( $post_id, 'magicreche_staff_vimeo', true );
				$youtube = get_post_meta( $post_id, 'magicreche_staff_youtube', true );
				$email = get_post_meta( $post_id, 'magicreche_staff_email', true );

				$content = get_the_content();

				//$return .= '<a href="' . get_permalink($post_id) . '">';
				if (has_post_thumbnail()) $return .= get_the_post_thumbnail($post_id, 'staff');
				//$return .= '</a>';

				if ( !empty($name) ) $return .= '<h4>' . $name . '</h4>';

				if ( !empty($position) ) $return .= '<p>' . $position . '</p>';

				if ( !empty($content) ) $return .= '<p>' . $content . '</p>';

				if( !empty($facebook) || !empty($twitter) || !empty($google) || !empty($linkedin) || !empty($flickr) || !empty($pinterest) || !empty($instagram) || !empty($vimeo) || !empty($youtube) || !empty($email) ) {
					$return .= '<p>';
						if( !empty($facebook) ) $return .= ' <a href="' . $facebook . '"><i class="fa fa-facebook-square fa-lg"></i></a> ';
						if( !empty($twitter) ) $return .= ' <a href="' . $twitter . '"><i class="fa fa-twitter-square fa-lg"></i></a> ';
						if( !empty($google) ) $return .= ' <a href="' . $google . '"><i class="fa fa-google-plus-square fa-lg"></i></a> ';
						if( !empty($linkedin) ) $return .= ' <a href="' . $linkedin . '"><i class="fa fa-linkedin-square fa-lg"></i></a> ';
						if( !empty($flickr) ) $return .= ' <a href="' . $flickr . '"><i class="fa fa-flickr fa-lg"></i></a> ';
						if( !empty($pinterest) ) $return .= ' <a href="' . $pinterest . '"><i class="fa fa-pinterest-square fa-lg"></i></a> ';
						if( !empty($instagram) ) $return .= ' <a href="' . $instagram . '"><i class="fa fa-instagram fa-lg"></i></a> ';
						if( !empty($vimeo) ) $return .= ' <a href="' . $vimeo . '"><i class="fa fa-vimeo-square fa-lg"></i></a> ';
						if( !empty($youtube) ) $return .= ' <a href="' . $youtube . '"><i class="fa fa-youtube-square fa-lg"></i></a> ';
						if( !empty($email) ) $return .= ' <a href="mailto:' . $email . '"><i class="fa fa-envelope fa-lg"></i></a> ';
					$return .= '</p>';
				}

			if( $layout == 'carousel' ) $return .= '</div>';
			$return .= '</div>';
			
		endwhile;

		$return .= '</div>';
	
	endif;

	wp_reset_query();

    return $return;
}