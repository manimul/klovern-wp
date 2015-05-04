<?php

/* Row
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_column( $atts, $content = null ) {
extract( shortcode_atts( array(
    'width' => '1/2'
    ), $atts ) );

	switch( $width ) {
		case '1/2':
			$column = 'col-sm-6';
			break;
		case '1/3':
			$column = 'col-sm-4';
			break;
		case '2/3':
			$column = 'col-sm-8';
			break;
		case '1/4':
			$column = 'col-sm-3';
			break;
		case '3/4':
			$column = 'col-sm-9';
			break;
	}

	return '<div class="' . $column . '">' . do_shortcode($content) . '</div>';
}