<?php

/* Icon
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_teaser( $atts, $content = null) {

	$type = $image = $icon = $title = $custom_bg_color = $custom_text_color = $custom_icon_bg_color = $custom_icon_color = $button_text = $button_url = $button_color = $arrow = $main_style = $icon_style = $box_style = '';

	extract(shortcode_atts(array(
		'type' => 'icon',
		'image' => '',
		'icon' => '',
		'title' => '',
		'custom_bg_color' => '',
		'custom_text_color' => '',
		'custom_title_color' => '',
		'custom_icon_bg_color' => '',
		'custom_icon_color' => '',
		'button_text' => '',
		'button_url' => '',
		'button_color' => '',
		'arrow' => '',
	), $atts));


	if( !empty($custom_text_color) ) $main_style = ' style="color:' . $custom_text_color . '"';
	$return = '<div class="teaser ' . $type . '"' . $main_style . '>';

		if( !empty($custom_icon_bg_color) || !empty($custom_icon_color) ) {
			$icon_style = ' style="';
			if( !empty($custom_icon_bg_color) ) $icon_style .= 'background-color:' . $custom_icon_bg_color .';';
			if( !empty($custom_icon_color) ) $icon_style .= 'color:' . $custom_icon_color .';';
			$icon_style .= '"';
		}

		if( $type == "icon-box" ) {
			if( !empty($icon) ) {
				$return .= '<div class="icon img-circle"' . $icon_style . '><i class="fa fa-' . $icon . '"></i></div>';
			} else {
				$return .= '<div class="icon img-circle"' . $icon_style . '><img alt="" src="' . $image . '"></div>';
			}
		} elseif ( $type == "image-box" ) {
			$return .= '<div class="image"><img alt="" src="' . $image . '"></div>';
		}

		if( !empty($custom_bg_color) ) $box_style = ' style="background-color:' . $custom_bg_color . '"';
		$return .= '<div class="box"' . $box_style . '>';

			if( !empty($custom_title_color) ) {
				$return .= '<h3 style="color:' . $custom_title_color . ';">' . $title . '</h3>';
			} else {
				$return .= '<h3>' . $title . '</h3>';				
			}

			$return .= '<p>' . $content . '</p>';

			if( !empty($button_text) && !empty($button_url) ) {
				if( !empty($button_color) ) $button_color = ' btn-' . $button_color;
				$return .= '<p><a class="btn' . $button_color . '" href="' . $button_url . '">' . $button_text . '</a></p>';
			}

		//$return .= '</div>';

		if( !empty($arrow) ) {
			$return .= '<div class="arrow"' . $box_style . '></div>';
		}

		$return .= '</div>';

	$return .= '</div>';
      
    return $return;
}