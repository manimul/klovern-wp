<?php

/* Accordion
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_accordion($atts, $content=null, $code) {

	$randomid = rand();

	extract(shortcode_atts(array(
		'open_first' => 'yes'
	), $atts));

	if (!preg_match_all("/(.?)\[(accordion-item)\b(.*?)(?:(\/))?\](?:(.+?)\[\/accordion-item\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} else {
		$return = '';
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
						
			$return .= '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-' . $randomid . '" href="#collapse-' . $randomid . '-' . $i .'">' . $matches[3][$i]['title'] . '</a></h4></div><div id="collapse-' . $randomid . '-' . $i .'" class="panel-collapse collapse"><div class="panel-body">' . do_shortcode(trim($matches[5][$i])) . ' </div></div></div>';
		}
		if( $open_first == 'yes' ) {
			$open_first = ' data-open="first"';
		} else {
			$open_first = '';
		}
		return '<div class="panel-group" id="accordion-' . $randomid . '"' . $open_first . '>' . $return . '</div>';
	}
	
}