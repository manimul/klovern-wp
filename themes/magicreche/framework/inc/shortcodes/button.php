<?php

/* Button
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_btn( $atts, $content = null ) {
extract( shortcode_atts( array(
    'color' => 'default',
    'size' => 'default',
    'link' => '#',
    'target' => ''
    ), $atts ) );

	if( empty($target) ) $target = '_self';

	switch( $size ) {
		case 'large':
			$size = ' btn-lg';
			break;
		case 'small':
			$size = ' btn-sm';
			break;
		default:
			$size = '';
	}

	return '<a href="' . $link . '" class="btn btn-' . $color . $size . '" target="' . $target . '">' . do_shortcode($content) . '</a>';
}