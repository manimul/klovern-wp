<?php

/* Tabs
-------------------------------------------------------------------------------------------------------------------*/

//global $tab_counter;
global $tab_counter;

$tab_counter = 1;

function shortcode_tabs( $atts, $content = null ) {

	extract(shortcode_atts(array(), $atts));

	global $tab_counter;
	
	$tab_counter = $tab_counter + 1;

	$return = '<ul class="nav nav-tabs text-center">';

		$i = 0;

		foreach ($atts as $tab) {
			$i = $i + 1;
			if($i == 1) {
				$return .= '<li class="active"><a href="#' . $tab_counter . '-' . $i . '-tab" data-toggle="tab">' . $tab . '</a></li>';
			} else {
				$return .= '<li><a href="#' . $tab_counter . '-' . $i . '-tab" data-toggle="tab">' . $tab . '</a></li>';
			}
		}

	$return .= '</ul>';

	$return .= '<div class="tab-content">' . do_shortcode($content) . '</div>';

	return $return;
}

function shortcode_tab( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'tab_number' => ''
    ), $atts));

    global $tab_counter;

	if($tab_number == 1) {
		$return = '<div id="'. $tab_counter . '-' . $tab_number . '-tab" class="tab-pane active">' . do_shortcode($content) .'</div>';
	} else {
		$return = '<div id="'. $tab_counter . '-' . $tab_number . '-tab" class="tab-pane">' . do_shortcode($content) .'</div>';
	}

	return $return;
}