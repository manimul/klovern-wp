<?php

/* Row
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_row($atts, $content = null) {
extract( shortcode_atts( array(
    'stick_to_bottom' => 'no',
    'css_class' => ''
    ), $atts ) );

	$extra_start = $extra_end = '';

	if( !empty($css_class) ) {
		$extra_start = '<div class="' . $css_class . '">';
		$extra_end = '</div>';
	}

	if( $stick_to_bottom == 'yes' ) {
		$return = $extra_start . '<div class="stick-to-bottom"><div class="container"><div class="row">' . do_shortcode($content) . '</div></div></div>' . $extra_end;
	} else {
		$return = $extra_start . '<div class="row">' . do_shortcode($content) . '</div>' . $extra_end;
	}

    return $return;
}