<?php

/* Icon
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_icon( $atts, $content = null) {

	$icon = $size = $css_class = '';

	extract(shortcode_atts(array(
		'icon' => '',
		'size' => 'default',
		'css_class' => ''
	), $atts));

	$class = 'fa fa-' . $icon . ' ' . $size . ' ' . $css_class;
      
    return '<i class="' . $class . '"></i>';
}