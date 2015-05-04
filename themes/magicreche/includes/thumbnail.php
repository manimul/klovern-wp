<?php

$post_format = get_post_format();

$thumb_size = 'blog'; 

switch( $post_format ) {

	case 'audio':

		$audio_strings = explode( "\n", get_post_meta($post->ID, '_format_audio_embed', true) );

		if( !empty($audio_strings) ) {

			// check is embed or file
			$ext = pathinfo($audio_strings[0], PATHINFO_EXTENSION);

			if( $ext ) {

				$audio_sc_string = '[audio';

				foreach( $audio_strings as $value ) {
					$ext = pathinfo($value, PATHINFO_EXTENSION);
					$audio_sc_string .= " " . trim($ext) . "='" . trim($value) . "'";
				}

				if( has_post_thumbnail() ) {
					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size );
					$poster = '<img src="' . $thumbnail['0'] . '">';
					$audio_sc_string .= "]";
				} else {
					$poster = '';
					$audio_sc_string .= ']';
				}
			
				echo '<div class="post-thumb">' . $poster . do_shortcode( $audio_sc_string ) . '</div>';

			} else {

				global $wp_embed;
				$audio_sc_string = '[embed width="auto"]' . $audio_strings[0] . '[/embed]';
				$post_embed = $wp_embed->run_shortcode( $audio_sc_string );

				echo '<div class="post-thumb">' . $post_embed . '</div>';
			}

		}

        break;


	case 'video':

		$video_strings = explode( "\n", get_post_meta($post->ID, '_format_video_embed', true) );

		if( !empty($video_strings) ) {

			// check is embed or file
			$ext = pathinfo($video_strings[0], PATHINFO_EXTENSION);

			if( $ext ) {

				$video_sc_string = '[video';

				foreach( $video_strings as $value ) {
					$ext = pathinfo($value, PATHINFO_EXTENSION);
					$video_sc_string .= " " . trim($ext) . "='" . trim($value) . "'";
				}

				if( has_post_thumbnail() ) {
					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size );
					$url = $thumbnail['0'];
					$video_sc_string .= " poster='" . $url . "']";
				} else {
					$video_sc_string .= ']';
				}
			
				echo '<div class="post-thumb">' . do_shortcode( $video_sc_string ) . '</div>';

			} else {

				global $wp_embed;
				$video_sc_string = '[embed width="auto"]' . $video_strings[0] . '[/embed]';
				$post_embed = $wp_embed->run_shortcode( $video_sc_string );

				echo '<div class="post-thumb">' . $post_embed . '</div>';
			}

		}

        break;


	case 'gallery':

		if ( $images = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image' ))){

			$banner_rand = rand();

			?><div class="post-thumb"><div id="banner-<?php echo $banner_rand; ?>" class="carousel slide">
				<ol class="carousel-indicators"><?php

					$dot = 0;

					foreach( $images as $image ) {
						?><li data-target="#banner-<?php echo $banner_rand; ?>" data-slide-to="<?php echo $dot; ?>"<?php if( !$dot ) { ?> class="active"<?php } ?>></li><?php
						$dot++;
					}

				?></ol>

				<div class="carousel-inner"><?php

					$slide = 0;

					foreach( $images as $image ) {
						?><div class="item<?php if( !$slide ) { ?> active<?php } ?>"><?php echo wp_get_attachment_image($image->ID, $thumb_size); ?></div><?php
						$slide++;
					}

				?></div>

			<a class="left carousel-control" href="#banner-<?php echo $banner_rand; ?>" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
			<a class="right carousel-control" href="#banner-<?php echo $banner_rand; ?>" data-slide="next"><i class="fa fa-chevron-right"></i></a>
			</div></div><?php

		}

        break;


    default:

		if( has_post_thumbnail() ) { ?><div class="post-thumb"><?php the_post_thumbnail( $thumb_size ); ?></div><?php }

    	break;

} ?>