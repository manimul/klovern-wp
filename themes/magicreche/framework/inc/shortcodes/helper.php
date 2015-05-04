<?php

/* Helper
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_helper( $atts, $content = null ) {
extract( shortcode_atts( array(
    'type' => 'gap',
    'gap_height' => '30px'
    ), $atts ) );

	$return = $style = '';

	switch ($type) {
		case 'separator':
			$return = '<hr class="separator">';
			break;

		case 'ckearfix':
			$return = '<div class="clearfix"></div>';
			break;
		
		default:
			$style = ' style="height:' . $gap_height . '"';
			$return = '<div class="' . $type . '"' . $style . '></div>';
			break;
	}

	return $return;
}