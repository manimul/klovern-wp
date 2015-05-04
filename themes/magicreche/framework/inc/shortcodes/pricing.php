<?php

/* Pricing Table
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_pricing_table( $atts, $content = null ) {
	extract( shortcode_atts( array(
    'title' => '',
    'price' => '',
    'price_description' => '',
    'button_text' => '',
    'button_url' => ''
    ), $atts ) );
	
	$return = '<ul class="price-table"><li class="title">' . $title . '</li><li class="price">' . $price . '</li><li class="period">' . $price_description . '</li>';

	$return .= do_shortcode($content);

	if($button_text != '') {
		$return .= '<li><a href="' . $button_url . '" class="btn btn-success btn-lg">' . $button_text . '</a></li></ul>';
	} else {
		$return .= '</ul>';
	}
	
	return $return;
}

function shortcode_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
    ), $atts));
    
	$return = '<li>' . do_shortcode($content) .'</li>';
	
	return $return;
}
